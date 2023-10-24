<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Deployment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeploymentController extends Controller
{
    public function deployment(){
        $deployment = Deployment::find(1);
        DB::enableQuerylog();
        $deployment->projects;
        dd(DB::getQueryLog());

    }
}
