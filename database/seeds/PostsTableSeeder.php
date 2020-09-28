<?php

use App\Posts;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::all();
        $users -> each(function($user) {

            factory(Posts::class, 10) -> create([

                'user_id' => $user -> id

            ]);

        });

    }
}
