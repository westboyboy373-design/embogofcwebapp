<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $posts = DB::table('news_posts')->orderBy('created_at', 'desc')->take(3)->get();
    return view('welcome', compact('posts'));
})->name('home');

Route::get('/news', function () {
    $posts = DB::table('news_posts')->orderBy('created_at', 'desc')->take(30)->get();
    return view('news', compact('posts'));
})->name('news');

Route::get('/club', function () {
    return view('club');
})->name('club');

// Contact Form Routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Kits and Shop Routes (Mapped cleanly to support both 'kits' and 'kits.index' route names)
Route::get('/kits', function () {
    $kits = DB::table('kit_inventory')->orderBy('created_at', 'desc')->get();
    return view('kits', compact('kits'));
})->name('kits');

Route::get('/kits-index', function () {
    $kits = DB::table('kit_inventory')->orderBy('created_at', 'desc')->get();
    return view('kits', compact('kits'));
})->name('kits.index');

Route::get('/shop', function () {
    $kits = DB::table('kit_inventory')->orderBy('created_at', 'desc')->get();
    return view('shop.index', compact('kits'));
})->name('shop');

Route::get('/league', function () {
    $leagueMedia = DB::table('league_table_media')->orderBy('created_at', 'desc')->get();
    return view('league', compact('leagueMedia'));
})->name('league');

Route::get('/fixtures', function () {
    $fixturePhotos = DB::table('fixture_photos')->orderBy('created_at', 'desc')->get();
    return view('fixtures', compact('fixturePhotos'));
})->name('fixtures');

/*
|--------------------------------------------------------------------------
| Admin Login
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('admin', ['loginError' => null]);
})->name('login');

Route::post('/admin', function () {
    request()->validate([
        'email'    => ['required', 'email'],
        'password' => ['required'],
    ]);

    $user = DB::table('users')->where('email', request('email'))->first();

    if ($user && Hash::check(request('password'), $user->password)) {
        session([
            'admin_logged_in' => true,
            'admin_email'     => $user->email,
        ]);

        return redirect()->route('dashboard');
    }

    return view('admin', [
        'loginError' => 'The provided credentials do not match our records.',
    ]);
})->name('login.submit');

Route::post('/admin/login', function () {
    return redirect()->route('login');
});

Route::post('/admin/logout', function () {
    session()->forget(['admin_logged_in', 'admin_email']);
    session()->flush();
    return redirect('/admin');
})->name('logout');

/*
|--------------------------------------------------------------------------
| Admin Management Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    if (! session('admin_logged_in')) {
        return redirect()->route('login');
    }

    $posts         = DB::table('news_posts')->orderBy('created_at', 'desc')->take(30)->get();
    $fixturePhotos = DB::table('fixture_photos')->orderBy('created_at', 'desc')->take(20)->get();
    $leagueMedia   = DB::table('league_table_media')->orderBy('created_at', 'desc')->take(20)->get();
    $kits          = DB::table('kit_inventory')->orderBy('created_at', 'desc')->take(20)->get();
    $messages      = DB::table('contact_messages')->orderBy('created_at', 'desc')->take(20)->get();
    $users         = DB::table('users')->orderBy('created_at', 'desc')->get(); 

    return view('dashboard', compact('posts', 'fixturePhotos', 'leagueMedia', 'kits', 'messages', 'users'));
})->name('dashboard');

Route::get('/profile', function () {
    return redirect('/dashboard');
})->name('profile.edit');

Route::prefix('admin')->name('admin.')->group(function () {

    // --- User Management ---
    Route::post('/users', function () {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        request()->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        DB::table('users')->insert([
            'name'       => request('name'),
            'email'      => request('email'),
            'password'   => Hash::make(request('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'New admin user created successfully.');
    })->name('users.store');

    Route::delete('/users/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        if ($id == 1) {
            return redirect()->back()->withErrors(['error' => 'Cannot delete the primary system administrator.']);
        }

        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'User account removed successfully.');
    })->name('users.destroy');


    // --- News Management ---
    Route::post('/news', function () {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        request()->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'media'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $postId = DB::table('news_posts')->insertGetId([
            'title'      => request('title'),
            'content'    => request('content'),
            'author'     => 'Kabale Admin',
            'admin_id'   => 1,
            'status'     => 'Published',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if (request()->hasFile('media')) {
            $file = request()->file('media');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/news'), $filename);

            DB::table('post_media')->insert([
                'post_id'    => $postId,
                'file_path'  => 'uploads/news/' . $filename,
                'file_type'  => 'image',
                'created_at' => now(),
            ]);
        }

        return redirect()->back()->with('success', 'Article and media uploaded successfully.');
    })->name('news.store');

    Route::delete('/news/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

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
    })->name('news.destroy');

    // --- Fixture Photos Management & Upload ---
    Route::post('/fixtures', function () {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        request()->validate([
            'title'      => 'required|string|max:255',
            'type'       => 'required|string',
            'match_date' => 'nullable|date',
            'media'      => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filePath = '';
        if (request()->hasFile('media')) {
            $file = request()->file('media');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/fixtures'), $filename);
            $filePath = 'uploads/fixtures/' . $filename;
        }

        DB::table('fixture_photos')->insert([
            'title'      => request('title'),
            'type'       => request('type'),
            'file_path'  => $filePath,
            'match_date' => request('match_date'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Fixture photo uploaded successfully.');
    })->name('fixtures.store');

    Route::delete('/fixtures/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $photo = DB::table('fixture_photos')->where('id', $id)->first();
        if ($photo && File::exists(public_path($photo->file_path))) {
            File::delete(public_path($photo->file_path));
        }

        DB::table('fixture_photos')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Fixture photo removed successfully.');
    })->name('fixtures.destroy');

    // --- League Table Standings Management & Upload ---
    Route::post('/league', function () {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        request()->validate([
            'season'   => 'nullable|string|max:50',
            'matchday' => 'nullable|string|max:100',
            'media'    => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filePath = '';
        if (request()->hasFile('media')) {
            $file = request()->file('media');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/league'), $filename);
            $filePath = 'uploads/league/' . $filename;
        }

        DB::table('league_table_media')->insert([
            'season'     => request('season', '2026/2027'),
            'matchday'   => request('matchday'),
            'file_path'  => $filePath,
            'status'     => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'League standings image uploaded successfully.');
    })->name('league.store');

    Route::delete('/league/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $media = DB::table('league_table_media')->where('id', $id)->first();
        if ($media && File::exists(public_path($media->file_path))) {
            File::delete(public_path($media->file_path));
        }

        DB::table('league_table_media')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'League standings image removed.');
    })->name('league.destroy');

    // --- Kit Inventory Management & Store ---
    Route::post('/kits', function () {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        request()->validate([
            'kit_name'       => 'required|string|max:255',
            'classification' => 'required|string|max:100',
            'price_ugx'      => 'required|numeric|min:0',
            'media'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if (request()->hasFile('media')) {
            $file = request()->file('media');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/kits'), $filename);
            $imagePath = 'uploads/kits/' . $filename;
        }

        DB::table('kit_inventory')->insert([
            'kit_name'        => request('kit_name'),
            'classification'  => request('classification'),
            'price_ugx'       => request('price_ugx'),
            'image_reference' => $imagePath,
            'created_at'      => now(),
            'updated_at'      => now(),
        ]);

        return redirect()->back()->with('success', 'Kit added to inventory successfully.');
    })->name('kits.store');

    Route::delete('/kits/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        $kit = DB::table('kit_inventory')->where('id', $id)->first();
        if ($kit && $kit->image_reference && File::exists(public_path($kit->image_reference))) {
            File::delete(public_path($kit->image_reference));
        }

        DB::table('kit_inventory')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Kit removed from inventory.');
    })->name('kits.destroy');

    // --- Contact Messages Management ---
    Route::delete('/contact/{id}', function ($id) {
        if (! session('admin_logged_in')) {
            return redirect()->route('login');
        }

        DB::table('contact_messages')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Contact inquiry deleted.');
    })->name('contact.destroy');
});