<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,30)->create();
        /*
        \DB::table('posts')->insert([
            'title' => 'First Title',
            'description' => 'First Post Description',
            'content' => 'First Post Content',
            'is_active' => 1,
            'slug' => 'first-post',
            'user_id' => 1,
        ]);*/
    }
}
