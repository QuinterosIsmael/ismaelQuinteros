<?php

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
      
    // $this->call(UserSeeder::class);

    //    $this->call(MotoSeeder::class);

    $this->call(NombreSeeder::class);

    // $this->call(ProfileSeeder::class);
      
    // $this->call(CategoriaSeeder::class);

    // $this->call(PostSeeder::class);
    
    // $this->call(RoleSeeder::class);

    // $this->call(ArticleSeeder::class);

        

    }
}
