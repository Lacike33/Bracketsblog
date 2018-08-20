<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('post_tag')->delete();
//
//        $tags = Tag::all();
//        $posts = Post::all();
//        for ($i=1; $i<6; $i++) {
//            DB::table('post_tag')->insert([
//                'post_id' => $tags->random()->id,
//                'tag_id' => $posts->random()->id
//            ]);
//        }

        DB::table('post_tag')->insert([
            ['post_id' => 1, 'tag_id' => 1],
            ['post_id' => 1, 'tag_id' => 3],
            ['post_id' => 2, 'tag_id' => 2],
            ['post_id' => 2, 'tag_id' => 4],
            ['post_id' => 5, 'tag_id' => 5],
            ['post_id' => 4, 'tag_id' => 1],
            ['post_id' => 8, 'tag_id' => 3],
            ['post_id' => 8, 'tag_id' => 2],
            ['post_id' => 9, 'tag_id' => 4],
            ['post_id' => 10, 'tag_id' => 1],
            ['post_id' => 10, 'tag_id' => 3],
            ['post_id' => 10, 'tag_id' => 4],
            ['post_id' => 12, 'tag_id' => 1],
        ]);

    }
}
