<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\PhotoGallery;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller {
    public function gallery(Request $request) {
        
        $galleryItems = DB::table('photo_gallery')  ->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')
                                                    ->select('photo_gallery.*', 'gallery.name as galleryName')
                                                    ->where('gallery.name', 'like', '%gallery_album%')
                                                    ->inRandomOrder() // Ensure random ordering
                                                    ->limit(25) // Limit to 25 results
                                                    ->get();
        
        $data = [
            'title' => "Gallery",
            'active_menu' => 'gallery',
            'galleryItems' => $galleryItems
        ];

        return view('user/gallery/gallery')->with($data);
    }
}