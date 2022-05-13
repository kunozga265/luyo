<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title'             =>  "Nkhoma",
            'slug'              =>  Str::slug("Nkhoma")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/projects/nkhoma.jpg',
            'client'            =>  "Client",
            'location'          =>  "Location",
            'completed_date'    =>  1640037600, // Dec 21, 2021
            'body'              =>  "
            <p>This is the body</p>
            ",
        ]);

        Project::create([
            'title'             =>  "CEAR",
            'slug'              =>  Str::slug("CEAR")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/projects/cear.jpg',
            'client'            =>  "Client",
            'location'          =>  "Location",
            'completed_date'    =>  1643580000, // Jan 31, 2022
            'body'              =>  "
            <p>This is the body</p>
            ",
        ]);

        Project::create([
            'title'             =>  "Church of Christ",
            'slug'              =>  Str::slug("Church of Christ")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/projects/coc.jpeg',
            'client'            =>  "Client",
            'location'          =>  "Location",
            'completed_date'    =>  1641506400, // Jan 31, 2022
            'body'              =>  "
            <p>This is the body</p>
            ",
        ]);

        Project::create([
            'title'             =>  "Dzingwi Classroom Block",
            'slug'              =>  Str::slug("Dzingwi Classroom Block")."-".date("Y-m-d"),
            'cover_photo'       =>  'images/projects/dzingwi.jpg',
            'client'            =>  "Client",
            'location'          =>  "Location",
            'completed_date'    =>  1646604000, // Jan 31, 2022
            'body'              =>  "
            <p>This is the body</p>
            ",
        ]);
    }
}
