<?php

namespace Database\Seeders;

use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'=>'Post one',
                'excerpt'=>'Summary of Post one',
                'body'=>'Body of Post one',
                'image_path'=>'empty',
                'is_published'=>false,
                'min_to_read'=>2
            ],
            [
                'title'=>'Post two',
                'excerpt'=>'Summary of Post two',
                'body'=>'Body of Post two',
                'image_path'=>'empty',
                'is_published'=>false,
                'min_to_read'=>2
            ]
        ];
        foreach($posts as $key=>$value){
            Post::create($value);
        }
    }
}
