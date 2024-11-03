<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;



class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'created_at' => Carbon::now()->timestamp,
            'updated_at' => Carbon::now()->timestamp
        ]);
        DB::table('todos')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'created_at' => Carbon::now()->timestamp,
            'updated_at' => Carbon::now()->timestamp
        ]);
        DB::table('todos')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'created_at' => Carbon::now()->timestamp,
            'updated_at' => Carbon::now()->timestamp
        ]);
        DB::table('todos')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'created_at' => Carbon::now()->timestamp,
            'updated_at' => Carbon::now()->timestamp
        ]);

    }
}
