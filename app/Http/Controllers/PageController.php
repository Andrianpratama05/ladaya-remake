<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $posts = Halaman::all();

        return view('page',compact('posts'));
    }

    public function edit($id){
        $post = Halaman::where('id',$id)->first();

        return response()->json(['result' => $post]);
    }
}