<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    public function latestOrder (){
        return $this->hasMany(Order::class)->latest();
    }
    // public function oldestOrder (){
    //     return $this->hasMany(Order::class)->latest();
}
