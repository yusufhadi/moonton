<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'The-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=PLl99DlL6b4',
                'thumbnail' => 'https://i.pinimg.com/474x/a5/2b/93/a52b936b7eabb91d1b2bb3e9e047fe52.jpg',
                'rating' => 4.3,
                'is_featured' => 1
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'The-godfather',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=UaVTIH8mujA',
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMb1-omi45xsvt3lLmWnp_FSYadyg8yEnJeg&usqp=CAU',
                'rating' => 4.2,
                'is_featured' => 0
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'The-godfather-part-ii',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=OA1ij0alE0w',
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHcSEy07bi_H_c-0j-n9UpopvjuAgsV4HVJ1r6MKOtgOUqL-mGwRFV2o8y8UD55xlExms&usqp=CAU',
                'rating' => 4.0,
                'is_featured' => 0
            ],
        ];

        Movie::insert($movies);
    }
}
