<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Environment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Deployment extends Model
{
    use HasFactory;
    public function projects(){
         return $this->belongsTo(Project::class ,Environment::class,'project_id','id');
        
        
            }
}
