<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesToAdd = [["name"=> "Attualità"],["name"=> "Sport"],["name"=> "Cultura"],["name"=> "Divertente"],["name"=> "Musica"],["name"=> "Esport"],["name"=> "Strategia"]];
        DB::table("categories")->insert($categoriesToAdd);
    }
}
