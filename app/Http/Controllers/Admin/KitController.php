<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KitController extends Controller
{
    // 1. Display the customer-facing kit/shop page
    public function index()
    {
        $kits = DB::table('kit_inventory')->get();
        return view('kits', compact('kits')); // Updated from 'shop' to 'kits'
    }

    // 2. Display the admin management view
    public function adminIndex()
    {
        $kits = DB::table('kit_inventory')->orderBy('id', 'asc')->get();
        return view('admin.kits', compact('kits'));
    }

    // 3. Store a new kit with an image upload
    public function store(Request $request)
    {
        $request->validate([
            'kit_name' => 'required|string|max:255',
            'classification' => 'required|string|max:255',
            'price_ugx' => 'required|numeric',
            'kit_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imagePath = null;

        // Check if an image file was uploaded with name 'kit_image'
        if ($request->hasFile('kit_image')) {
            // Stores the file in 'storage/app/public/kits' and returns the path
            $imagePath = $request->file('kit_image')->store('kits', 'public');
        }

        DB::table('kit_inventory')->insert([
            'kit_name' => $request->input('kit_name'),
            'classification' => $request->input('classification'),
            'price_ugx' => $request->input('price_ugx'),
            'image_reference' => $imagePath ? 'storage/' . $imagePath : null, // Saves public asset path
        ]);

        return redirect()->back()->with('success', 'Kit added successfully with image.');
    }

    // 4. Update an existing kit with a new image
    public function update(Request $request, $id)
    {
        $request->validate([
            'kit_name' => 'sometimes|required|string|max:255',
            'classification' => 'sometimes|required|string|max:255',
            'price_ugx' => 'sometimes|required|numeric',
            'kit_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $updateData = [];

        if ($request->has('kit_name')) {
            $updateData['kit_name'] = $request->input('kit_name');
        }
        if ($request->has('classification')) {
            $updateData['classification'] = $request->input('classification');
        }
        if ($request->has('price_ugx')) {
            $updateData['price_ugx'] = $request->input('price_ugx');
        }

        // Check if a new image is being uploaded
        if ($request->hasFile('kit_image')) {
            $kit = DB::table('kit_inventory')->where('id', $id)->first();
            
            if ($kit && !empty($kit->image_reference)) {
                $oldPath = str_replace('storage/', '', $kit->image_reference);
                Storage::disk('public')->delete($oldPath);
            }

            // Store the new image
            $newPath = $request->file('kit_image')->store('kits', 'public');
            $updateData['image_reference'] = 'storage/' . $newPath;
        }

        DB::table('kit_inventory')->where('id', $id)->update($updateData);

        return redirect()->back()->with('success', 'Kit updated successfully.');
    }

    // 5. Handle standard resource destroy (deletes image file too)
    public function destroy($id)
    {
        $kit = DB::table('kit_inventory')->where('id', $id)->first();

        if ($kit && !empty($kit->image_reference)) {
            // Delete the image file from storage when the kit is removed
            $oldPath = str_replace('storage/', '', $kit->image_reference);
            Storage::disk('public')->delete($oldPath);
        }

        DB::table('kit_inventory')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Kit and its image removed from inventory.');
    }
}