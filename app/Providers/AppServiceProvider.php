<?php

namespace App\Providers;

use App\Post;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Bioudi\LaravelMetaWeatherApi\Weather;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.layouts.app', function ($view) {
            $latestNews = Post::select('id', 'title','slug')->where('breakingNews', 1)->orderBy('id', 'desc')->get();
            $categoryOne = DB::table('categories')->select('id', 'name')->where('position', 1)->latest()->first();
            $categoryTwo = DB::table('categories')->select('id', 'name')->where('position', 2)->latest()->first();
            $categoryThree = DB::table('categories')->select('id', 'name')->where('position', 3)->latest()->first();
            $categoryFour = DB::table('categories')->select('id', 'name')->where('position', 4)->latest()->first();
            $categoryFive = DB::table('categories')->select('id', 'name')->where('position', 5)->latest()->first();
            $categorySix = DB::table('categories')->select('id', 'name')->where('position', 6)->latest()->first();
            $categorySeven = DB::table('categories')->select('id', 'name')->where('position', 7)->latest()->first();
            $allCategories = DB::table('categories')->select('id', 'name')->where('position', 0)->orderBy('id', 'desc')->get();
            $categoryOneCount = DB::table('posts')->where('categoryId', $categoryOne->id)->count();
            $categoryTwoCount = DB::table('posts')->where('categoryId', $categoryTwo->id)->count();
            $categoryThreeCount = DB::table('posts')->where('categoryId', $categoryThree->id)->count();
            $categoryFourCount = DB::table('posts')->where('categoryId', $categoryFour->id)->count();
            $categoryFiveCount = DB::table('posts')->where('categoryId', $categoryFive->id)->count();
            $topNews = Post::select('title', 'slug', 'image', 'created_at')->take(3)->get();
            $weather = new Weather();
            $weatherHome = $weather->getByCityName('dhaka', date('Y/m/j'));
            $settings = Setting::select('logo','site_title','favicon','about_us','fb_link','twitter_link','pinterest_link','vemio_link','youtube_link')->first();

            $view->with('latestNews', $latestNews)
                ->with('categoryOne', $categoryOne)
                ->with('categoryTwo', $categoryTwo)
                ->with('categoryThree', $categoryThree)
                ->with('categoryFour', $categoryFour)
                ->with('categoryFive', $categoryFive)
                ->with('categorySix', $categorySix)
                ->with('categorySeven', $categorySeven)
                ->with('allCategories', $allCategories)
                ->with('weatherHome', $weatherHome)
                ->with('topNews', $topNews)
                ->with('categoryOneCount', $categoryOneCount)
                ->with('categoryTwoCount', $categoryTwoCount)
                ->with('categoryThreeCount', $categoryThreeCount)
                ->with('categoryFourCount', $categoryFourCount)
                ->with('categoryFiveCount', $categoryFiveCount)
                ->with('settings', $settings)
            ;
        });

    }
}
