<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Like;
use App\Models\PhotoComment ;

class GalleryController extends Controller
{
    public function index(){
        $photo = Photo::join('albums', 'albums.albumId', '=', 'photos.albumId')->get();
        return view('initial-view.home', compact('photo'));
    }
    public function gallery(){
        $album = Album::all();
        return view('initial-view.gallery', compact('album'));
    }
    public function detail_album()
    {
        return view('initial-view.detail-album');
    }
    public function detail_photo()
    {
        return view('initial-view.detail-photo');
    }
}
