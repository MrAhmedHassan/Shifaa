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
        $this->call(humanBodySeeder::class);
        $this->call(CategoryDB::class);
        $this->call(DiseaseDB::class);
        $this->call(UsersTableSeeder::class);
        $this->call(testSeeder::class);
        $this->call(questionSeeder::class);
         $this->call(answerSeeder::class);
     
      $this->call(resultSeeder::class);
      


    }
}
