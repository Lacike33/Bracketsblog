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
        DB::table('post_tag')->delete();

        $tags = Tag::all();
        $posts = Post::all();
        for ($i=1; $i<6; $i++) {
            DB::table('post_tag')->insert([
                'post_id' => $tags->random()->id,
                'tag_id' => $posts->random()->id
            ]);
        }

    }
}
