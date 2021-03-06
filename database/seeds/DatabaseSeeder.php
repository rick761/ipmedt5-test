<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             Advies::class,
             OntvangenSignaal::class,             
             QuizVraag::class,
			 QuizAntwoord::class,
             User::class,
             UserHistory::class
         ]);
    }
}
