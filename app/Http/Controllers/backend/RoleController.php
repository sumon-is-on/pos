<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::get();
        return view('backend.pages.role.index',compact('roles'));
    }
    public function create(){
        return view('backend.pages.role.create');
    }
}
