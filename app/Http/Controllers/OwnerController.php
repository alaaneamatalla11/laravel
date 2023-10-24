<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class OwnerController extends Controller
{
    public function owner (){
        $owner = Owner::find(1);
        DB::enableQueryLog();
        $owner->CarMechanic;
        // $mechanic=Owner::find(1)->car->mechanic;
        dd(DB::getQueryLog());

        
    }
}

