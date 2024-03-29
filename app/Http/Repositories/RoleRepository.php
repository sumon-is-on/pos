<?php
namespace App\Http\Repositories;
// namespace App\Http\Repositorise;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoleRepository{
    
    public function store(Request $request)
    {
        $role =  Role::create([
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
        ]);

       $role->permissions()->sync($request->permission_ids);
    }

    public function update(Request $request,$role_id)
    {
        $role = Role::with('permissions')->find($role_id);
        $role->permissions()->sync($request->permission_ids);
    }
}