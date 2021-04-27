<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Profile::create([
            'titulo'=>'Tester',
            'texto'=>'Texto 3',
            'info'=>'Info 3',
            'user_id'=>3,
          ]);
    }
}
