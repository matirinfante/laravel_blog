<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Creates user
        User::create([
            'name' => 'Matias',
            'email' => 'mail@mail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
            'is_staff' => true,
        ]);

        //Creates 50 users using previously created PostFactory
        Post::factory()->count(50)->create();

        //php artisan db:seed for execution
    }
}
