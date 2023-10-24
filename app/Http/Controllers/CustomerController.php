<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function customer(){
        $customer = Customer::find(1);
        DB::enableQueryLog();
        $customer->latestOrder;
        dd(DB::getQueryLog());
}
}
