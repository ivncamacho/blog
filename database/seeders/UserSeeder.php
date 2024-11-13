<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user -> name ="Ivan";
        $user -> lastname = "Camacho";
        $user -> avatar = "";
        $user -> email ="ivan@ivan.com";
        $user -> password = bcrypt("12345678");

        $user -> save();

    User::factory(5)->create()->each(function ($user) {
        Post::factory(10)->create(['user_id' => $user->id]);
    });
    }

}
