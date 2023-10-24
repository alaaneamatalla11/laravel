<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    public function roles(){
        $role = Role::find(1);
        DB::enableQueryLog();
        $role->users;
        dd(DB::getQueryLog());
}
}
