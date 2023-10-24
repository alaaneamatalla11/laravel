<?php

namespace App\Http\Controllers;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MechanicController extends Controller
{
    public function mec(){
        $mechanic = Mechanic::find(1);
        DB::enableQueryLog();
        $mechanic->CarOwner;
        // dd($mechanic);
        dd(DB::getQueryLog());
        // dd([
        //     'mechanic_name'=>$mechanic->name,
        //     'carowner'=>$mechanic->owner->name,


        // ]);
}
}


