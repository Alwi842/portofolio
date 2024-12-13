<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function show()
    {
        // Fetch all image files from the 'public/images' folder
        $images = File::files(public_path('\assets\img\certificate'));

        // Extract only the relative paths for display
        $imagePaths = array_map(function ($file) {
            return 'assets/img/certificate/' . $file->getFilename();
        }, $images);

        // Pass image paths to the view
        return view('certificate', ['imagePaths' => $imagePaths]);
    }
}
