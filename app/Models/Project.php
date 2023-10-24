<?php

namespace App\Models;

use App\Models\Deployment;
use App\Models\Environment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    public function deployments(){
return $this->hasManyThrough(Deployment::class ,Environment::class);


    }
}
