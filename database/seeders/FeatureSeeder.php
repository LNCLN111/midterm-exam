<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'name' => 'Model',
                'description' => 'Models represent database tables and provide an interface for interacting with the data.'
            ],
            [
                'name' => 'View',
                'description' => 'Views are responsible for rendering the HTML output of the application.'
            ],
            [
                'name' => 'Controller',
                'description' => 'Controllers handle the logic of the application, processing requests and returning responses.'
            ],
            [
                'name' => 'Routes',
                'description' => 'Routes define the URL endpoints of the application and map them to controllers or closures.'
            ],
            [
                'name' => 'Middleware',
                'description' => 'Middleware provides a mechanism to filter HTTP requests entering the application.'
            ],
            [
                'name' => 'Blade Templates',
                'description' => 'Blade is a simple yet powerful templating engine provided with Laravel.'
            ],
            [
                'name' => 'Migrations',
                'description' => 'Migrations allow you to define and manage database schema changes in a version-controlled way.'
            ],
            [
                'name' => 'Seeders',
                'description' => 'Seeders allow you to populate your database with initial data.'
            ],
            [
                'name' => 'Database',
                'description' => 'Laravel provides a powerful database abstraction layer for interacting with various databases.'
            ],
            [
                'name' => 'Eloquent ORM',
                'description' => 'Eloquent ORM is Laravel\'s object-relational mapper, making database interactions easy and expressive.'
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}