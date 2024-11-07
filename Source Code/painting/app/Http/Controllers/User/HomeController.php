<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    public function home(Request $request) {
        
        $posterItems = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', '%poster%')->get();

        $poster_1 = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'poster_1')->take(1)->get();

        $poster_2 = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'poster_2')->take(1)->get();
        $poster_3 = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'poster_3')->take(1)->get();

        $poster_aboutUs = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'forAboutUsMenu')->take(1)->get();

        $poster_contact = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'forContactMenu')->take(1)->get();

        $poster_gallery = DB::table('photo_gallery')->join('gallery', 'gallery.id', '=', 'photo_gallery.gallery_id')->select('photo_gallery.*', 'gallery.name as galleryName')->where('gallery.name', 'like', 'forGalleryMenu')->take(1)->get();
        
        $data = [
            'title' => "Home",
            'active_menu' => 'home',
            'request' => $request,
            'poster_1' => $poster_1,
            'poster_2' => $poster_2,
            'poster_3' => $poster_3,
            'poster_aboutUs' => $poster_aboutUs,
            'poster_contact' => $poster_contact,
            'poster_gallery' => $poster_gallery,
            'posterItems' => $posterItems,
        ];

        return view('user/home/home')->with($data);
    }

    public function test() {
        
        return view('test');
    }
}
