<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LeagueTableController extends Controller
{
    // Display the admin upload form / current table
    public function index()
    {
        $currentTable = DB::table('league_table_media')->orderBy('id', 'desc')->first();
        return view('admin.league.index', compact('currentTable'));
    }

    // Handle the image upload and store in database
    public function store(Request $request)
    {
        $request->validate([
            'matchday' => 'nullable|string|max:100',
            'table_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:3048',
        ]);

        if ($request->hasFile('table_image')) {
            $file = $request->file('table_image');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            
            // Ensure directory exists
            $uploadPath = public_path('uploads/league');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $file->move($uploadPath, $filename);
            $filePath = 'uploads/league/' . $filename;

            // Optional: Set previous tables to inactive or keep latest active
            DB::table('league_table_media')->insert([
                'matchday' => $request->matchday ?? 'Matchday Standings',
                'file_path' => $filePath,
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'League table image uploaded successfully.');
    }
}
