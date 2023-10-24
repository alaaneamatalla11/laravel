<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order(){
        $order = Order::find(1);
        DB::enableQueryLog();
        $order->latestCustomer; 
        dd(DB::getQueryLog());
}


}








// public function order(){
// $order= DB::table('orders')
//             ->join('orders', 'customer.id', '=', 'orders.customer_id')
//             ->select('orders.*', 'customer_id')
//             ->get();
// public function order(){
//     $order = Order::find(1);
//         $collection = order::join('customers', 'customers.order_id','=', 'orders.id')
//         ->select('customers.*','orders.id as order_id')
//         ->first();
      
//         dd($collection);
//         dd($order);
    