<?php

namespace Database\Seeders;

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
        $data = [
            [
                'name' => 'product.list',
                'slug' => Str::slug('product.list'),
            ],

            [
                'name' => 'product.add',
                'slug' => Str::slug('product.add'),
            ],
            [
                'name' => 'product.edit',
                'slug' => Str::slug('product.edit'),
            ],
            [
                'name' => 'product.delete',
                'slug' => Str::slug('product.delete'),
            ],
        ];
        
        foreach ($data as $key => $value) {
            Permission::create($value);
        }
    }
}
