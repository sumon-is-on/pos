<?php

namespace App\Http\Controllers\backend;

use App\Models\Role;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\RoleRepository;
use App\Http\Request\RoleFormRequest;
use App\Models\Permission;

class RoleController extends Controller
{
    public $roleRepository;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index(){
        $roles=Role::get();
        return view('backend.pages.role.index',compact('roles'));
    }

    public function create(){
        $modules = Module::with('permission')->get();
        return view('backend.pages.role.create',compact('modules'));
    }

    public function store(RoleFormRequest $request)
    {
        try {
            $this->roleRepository->store($request);
            return redirect()->route('admin.role.index');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function edit($role_id)
    {
        $role = Role::with('assignPermissions')->find($role_id);
        $modules = Module::with('permission')->get();
        if ($role) {
            return view('backend.pages.permission.update',compact('role','modules'));
        }
    }

    public function update(Request $request, $role_id)
    {
        try {
            $this->roleRepository->update($request,$role_id);
            return redirect()->route('admin.role.index');
        } catch (\Throwable $th) {
            return redirect()->back();
        }
        
    }
}
