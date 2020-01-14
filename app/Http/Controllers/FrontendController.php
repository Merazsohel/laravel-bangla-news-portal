<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Support\Carbon;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::whereIn('featuredPosition', [1, 2, 3,4])->get();

        $topNews = $this->getTopNews();

        $bangladeshCategory = Category::select('id')->where('name', 'বাংলাদেশ')->first();

        $internationalCategory = Category::select('id')->where('name', 'আন্তর্জাতিক')->first();

        $businessCategory = Category::select('id')->where('name', 'অর্থনীতি')->first();

        $opinionCategory = Category::select('id')->where('name', 'মতামত')->first();

        $sportsCategory = Category::select('id')->where('name', 'খেলা')->first();

        $entertainmentCategory = Category::select('id')->where('name', 'বিনোদন')->first();

        $homePageFirstPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $bangladeshCategory->id)->take(2)->latest()->get();

        $homePageSecondPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $internationalCategory->id)->take(2)->latest()->get();

        $homePageThirdPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $businessCategory->id)->take(2)->latest()->get();

        $homePageFourthPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $opinionCategory->id)->take(2)->latest()->get();

        $homePageFifthPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $sportsCategory->id)->take(4)->latest()->get();

        $homePageSixthPortion = Post::select('title', 'slug', 'image', 'created_at')->where('categoryId', $entertainmentCategory->id)->take(4)->latest()->get();

        $popularNews = $this->getPopularPosts();

        $no = 1;

        return view('front.index', compact('posts', 'topNews', 'homePageFirstPortion', 'homePageSecondPortion', 'homePageThirdPortion',
                                                         'homePageFourthPortion', 'homePageFifthPortion', 'homePageSixthPortion', 'popularNews', 'no'));
    }

    public function newsDetails($slug)
    {
        $news = Post::select('title', 'image', 'description', 'categoryId', 'click','created_at')->where('slug', $slug)->first();

        Post::where('slug', $slug)->increment('click');

        $topNews = $this->getTopNews();

        $popularNews = $this->getPopularPosts();

        $no = 1;

        $postsByDate = Post::all()->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('F, Y');
        });


        return view('front.news-details', compact('news', 'topNews', 'popularNews', 'no', 'postsByDate'));
    }

    public function categoryWiseNews($name)
    {
        $category = Category::select('id')->where('name', $name)->first();

        $news = Post::select('title', 'image', 'slug', 'created_at')->where('categoryId', $category->id)->paginate(12);

        $topNews = $this->getTopNews();

        return view('front.category-news', compact('news', 'topNews'));
    }

    public function getPopularPosts()
    {
        return Post::select('title', 'categoryId', 'slug', 'image', 'created_at')->orderBy('click', 'desc')->take('5')->get();
    }

    public function getTopNews()
    {
        $topNews = Post::select('title', 'slug', 'image')->take(3)->get();
        return $topNews;
    }

    public function archiveData($date)
    {
        $news = Post::whereMonth('created_at', Carbon::parse($date)->format('m'))
            ->whereYear('created_at', Carbon::parse($date)->format('Y'))
            ->paginate(12);

        $topNews = $this->getTopNews();

        return view('front.archived-news', compact('news', 'topNews'));
    }
}
