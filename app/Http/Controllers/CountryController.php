<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    
    
        //hasone//
         // small date
        public function index(){
        $country = country::find(1);
        DB::enableQueryLog();
        $country->users;
        dd(DB::getQueryLog());
    }}
      // larage data
        // $collection = country::join('users', 'users.country_id','=', 'countries.id')
        // ->select('users.*','countries.name as counrty_name')
        // ->first();
      
        // dd($collection);
        // dd($country);
    

