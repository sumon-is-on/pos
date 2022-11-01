<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dashboardModule = Module::updateOrCreate([
            'name' => 'dashboard',
            'slug' => Str::slug('dashboard')
        ]);
        Permission::updateorCreate([
            'module_id' => $dashboardModule->id,
            'name' => 'dashboard',
            'slug' => Str::slug('dashboard'),
        ]);

        $ProductModule = Module::updateOrCreate([
            'name' => 'product',
            'slug' => Str::slug('product')
        ]);
        Permission::updateorCreate([
            'module_id' => $ProductModule->id,
            'name' => 'product.list',
            'slug' => Str::slug('product.list'),
        ]);
        Permission::updateorCreate([
            'module_id' => $ProductModule->id,
            'name' => 'product.create',
            'slug' => Str::slug('product.create')
        ]);
        Permission::updateorCreate([
            'module_id' => $ProductModule->id,
            'name' => 'product.edit',
            'slug' => Str::slug('product.edit'),
        ]);
        Permission::updateorCreate([
            'module_id' => $ProductModule->id,
            'name' => 'product.delete',
            'slug' => Str::slug('product.delete'),
        ]);

        $userModule = Module::updateOrCreate([
            'name' => 'user',
            'slug' => Str::slug('user')
        ]);
        Permission::updateorCreate([
            'module_id' => $userModule->id,
            'name' => 'user.list',
            'slug' => Str::slug('user.list'),
        ]);
        Permission::updateorCreate([
            'module_id' => $userModule->id,
            'name' => 'user.create',
            'slug' => Str::slug('user.create'),
        ]);
        Permission::updateorCreate([
            'module_id' => $userModule->id,
            'name' => 'user.block',
            'slug' => Str::slug('user.block'),
        ]);
        Permission::updateorCreate([
            'module_id' => $userModule->id,
            'name' => 'user.unblock',
            'slug' => Str::slug('user.unblock'),
        ]);
    }
}
