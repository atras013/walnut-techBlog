<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(2);
         
        for( $i = 0 ; $i < 30 ; $i++ ) {

           $user->posts()->save( Post::factory()->make()); 
        }

        
    
    }
}
