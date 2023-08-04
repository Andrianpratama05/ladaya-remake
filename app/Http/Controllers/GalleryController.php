<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
public function index(){
    $posts = Halaman::all();

    return view('gallery',compact('posts'));
}
}