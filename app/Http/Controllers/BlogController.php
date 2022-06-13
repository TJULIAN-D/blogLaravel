<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // index
public function index(){
    return view('Blog.index');
}

public function indexCategory(){
    return "categoria";
}

public function show($post){
    return "post " . $post;
}


}
