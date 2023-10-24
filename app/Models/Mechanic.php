<?php

namespace App\Models;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mechanic extends Model
{
    use HasFactory;
    public function CarOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class,);
        // return $this->through('cars')->has('owner');
    }
}
