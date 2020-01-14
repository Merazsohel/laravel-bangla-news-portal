<?php

use App\Category;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category = factory(Category::class)->create();

        for ($i = 1;$i < 5; $i++) {
            factory(Post::class)->create([
                'categoryId' => $category->id,
                'featuredPosition' => $i
            ]);
        }

       factory(User::class)->create();
    }
}
