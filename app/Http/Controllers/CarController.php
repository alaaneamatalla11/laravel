<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CarController extends Controller
{
    public function car (){
        DB::enableQueryLog();
        $car=Car::find(1);
        $car->mechanic;

        dd(DB::getQueryLog());
    }
}
