<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('id', 1)->first();
        $role->permissions()->sync(Permission::get()->pluck('id'));
        
        $data =[
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'role_id' => 1
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345'),
                'role_id' => 2
            ],
            [
                'name' => 'sell',
                'email' => 'sell@gmail.com',
                'password' => bcrypt('12345'),
                'role_id' => 3
            ],

        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
