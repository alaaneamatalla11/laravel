<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = post::find(1);
        DB::enableQueryLog();
        $post->image;
        dd(DB::getQueryLog());
}


}

// $image=Image::find(1);
// $image->imageable;