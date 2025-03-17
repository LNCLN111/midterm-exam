<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaravelInfoSeeder::create([
            'id' => 1,
            'feature name' => 'Model',
            'description' => 'Represents database table and allows user to interact in object-oriented way.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 2,
            'feature name' => 'View',
            'description' => 'Displays data through HTML templates.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 3,
            'feature name' => 'Controller',
            'description' => 'Manages Model and View logic.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 4,
            'feature name' => 'Routes',
            'description' => 'Defines URLs and directs user accordingly.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 5,
            'feature name' => 'Middleware',
            'description' => 'Filters HTTP request allowing authentication or/and logging in.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 6,
            'feature name' => 'Blade Templates',
            'description' => 'Template engine for creating dynamic views.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 7,
            'feature name' => 'Migrations',
            'description' => 'Version control for database schema.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 8,
            'feature name' => 'Seeders',
            'description' => 'Populates database with initial data.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 9,
            'feature name' => 'Database',
            'description' => 'Unified interface for database interaction and storage for data.',
        ]);

        LaravelInfoSeeder::create([
            'id' => 10,
            'feature name' => 'Eloquent ORM',
            'description' => 'ActiveRecord implementation for working with database.',
        ]);
    }
}
