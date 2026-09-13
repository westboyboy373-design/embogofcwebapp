<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        // Fetch up to 30 latest posts for the dashboard management view
        $posts = DB::table('news_posts')->orderBy('created_at', 'desc')->take(30)->get();

        return view('dashboard', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $postId = DB::table('news_posts')->insertGetId([
            'title' => $request->title,
            'content' => $request->content,
            'author' => 'Kabale Admin',
            'admin_id' => 1,
            'status' => 'Published',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            
            $file->move(public_path('uploads/news'), $filename);
            $filePath = 'uploads/news/' . $filename;

            DB::table('post_media')->insert([
                'post_id' => $postId, // Ensure your post_media foreign key matches news_posts.id
                'file_path' => $filePath,
                'file_type' => 'image',
                'created_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Article and media uploaded successfully.');
    }

    public function destroy($id)
    {
        // Optional: Delete associated media files from storage when deleting post
        $mediaFiles = DB::table('post_media')->where('post_id', $id)->get();
        foreach ($mediaFiles as $media) {
            $fullPath = public_path($media->file_path);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }
        }

        DB::table('post_media')->where('post_id', $id)->delete();
        DB::table('news_posts')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Article removed successfully.');
    }
}