<?php

namespace App\Models;

use App\Models\Owner;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Car extends Model
{
    use HasFactory;
    public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Mechanic::class);
}}

