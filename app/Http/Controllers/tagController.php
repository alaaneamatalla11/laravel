<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class tagController extends Controller
{
    public function tag(){
        DB::enableQueryLog();
        $tag = tag::find(1);
        dd(DB::getQueryLog());
}
}
