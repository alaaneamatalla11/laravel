<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    public function comment(){
        $comment = Comment::find(1);
        DB::enableQueryLog();
        $comment->commtable;
        dd(DB::getQueryLog());
}
}
