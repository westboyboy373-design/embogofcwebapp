<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FixturePhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:upcoming,result',
            'photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'match_date' => 'nullable|date',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            
            $file->move(public_path('uploads/fixtures'), $filename);
            $filePath = 'uploads/fixtures/' . $filename;

            DB::table('fixture_photos')->insert([
                'title' => $request->title,
                'type' => $request->type,
                'file_path' => $filePath,
                'match_date' => $request->match_date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Match graphic uploaded successfully!');
    }

    public function destroy($id)
    {
        $photo = DB::table('fixture_photos')->where('id', $id)->first();
        
        if ($photo && file_exists(public_path($photo->file_path))) {
            @unlink(public_path($photo->file_path));
        }

        DB::table('fixture_photos')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Match graphic deleted successfully!');
    }
}
?>