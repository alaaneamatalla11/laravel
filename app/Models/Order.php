<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function Customer (){
        return $this->belongsTo(Customer::class ,'customer_id','id')->latest();
    }
}
