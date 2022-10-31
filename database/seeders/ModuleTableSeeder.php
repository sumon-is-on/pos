<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'name' => 'dashboard',
                'slug' => Str::slug('dashboard')
            ],
            [
                'name' => 'product',
                'slug' => Str::slug('product')
            ],
            [
                'name' => 'stock',
                'slug' => Str::slug('stock')
            ],
            [
                'name' => 'user',
                'slug' => Str::slug('user')
            ],
            
        ];
        foreach ($data as $key => $value) {
            Module::create($value);
        }
    }
}
