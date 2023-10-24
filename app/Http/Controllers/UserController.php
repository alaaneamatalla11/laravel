<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function index(){
    $user = User::find(1);
    DB::enableQueryLog();
    $user->country;
    dd(DB::getQueryLog());
    
}
public function users(){
    $user = User::find(1);
    DB::enableQueryLog();
    $user->roles;
    dd(DB::getQueryLog());}


    
}