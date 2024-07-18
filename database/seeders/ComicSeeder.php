<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        $data = config('comics');
 
        // print_r($data);
        // die();

        DB::table('comics')->truncate();

        foreach($data as $comics_db) {
            
            $comics = new Comics();

            $comics->title = $comics_db['title'];
            $comics->description = $comics_db['description'];
            $comics->thumb = $comics_db['thumb'];
            $comics->price = $comics_db['price'];
            $comics->series = $comics_db['series'];
            $comics->sale_date = $comics_db['sale_date'];
            $comics->type = $comics_db['type'];

            $comics->artists = implode("," ,$comics_db['artists']);
            $comics->writers = implode("," , $comics_db['writers']);

            $comics->save();
        }
    }
}
