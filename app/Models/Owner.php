<?php

namespace App\Models;
use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Owner extends Model
{
    use HasFactory;
    public function CarMechanic()
    {
        return $this->hasOneThrough(Mechanic::class, Car::class,'mechanic_id','id');
}
}
