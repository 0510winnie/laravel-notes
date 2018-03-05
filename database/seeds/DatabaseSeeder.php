<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(\App\Article::class, 30)->create();

        // $tagA = new Tag();
        // $tagA->name = 'Tag A';
        // $tagA->save();

        // 讓article id 1~10 和$tagA 做關聯
        // 1. find article 1~10 
        // 2. 做關聯

        // for($i = 1; $i < 11 ; $i++)
        // {
        //     $article1 = Article::find($i);
        //     $article1->tags()->attach($tagA);
        // }

        // $article->user;
        // $user->articles;


        // $tagB = new Tag();
        // $tagB->name = 'Tag B';
        // $tagB->save();



        // 1 - n
        // $article = new Article();
        // $category = new Category();
        // $category->articles()->save($article);
        // $article->category()->associate($category);

        // n - n
        // $article = new Article();
        // $tag = new Tag();
        // $tag2 = new Tag();
        // $article->tags()->attach($tag);
        // $tag->articles()->attach($article);
        // $tag->articles()->detach($article);
        // $article->tags()->sync([ $tag->id ]);
        // $article->tags()->sync([ $tag2->id ]);
    }
}
