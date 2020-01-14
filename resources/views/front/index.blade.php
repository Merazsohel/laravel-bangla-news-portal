@extends('front.layouts.app')
@section('content')
    <!-- Feature post -->
    <section class="bg0" >
        <div class="container">
            <div class="row m-rl--1">
                <div class="col-md-6 p-rl-1 p-b-2">
                    <div class="bg-img1 size-a-3 how1 pos-relative"
                         style="background-image: url({{ isset($posts[0]->image) ? asset($posts[0]->image) : ''}});">

                        <a href="{{url('news-details/'.$posts[0]->slug)}}"  class="dis-block how1-child1 trans-03"></a>


                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            <a href="#"
                               class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                {{ isset($posts[0]->categoryId) ? $posts[0]->categoryId : ''}}
                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">

                                <a href="{{url('news-details/'.$posts[0]->slug)}}"  class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    {{ isset($posts[0]->title) ? $posts[0]->title : ''}}
                                </a>

                            </h3>

                        </div>

                    </div>
                </div>

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        <div class="col-12 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-4 how1 pos-relative"
                                 style="background-image: url({{isset($posts[1]->image) ? asset($posts[1]->image) : ''}});">

                                <a href="{{url('news-details/'.$posts[1]->slug)}}"
                                   class="dis-block how1-child1 trans-03"></a>


                                <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                    <a href="#"
                                       class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        {{ isset($posts[1]->categoryId) ? $posts[1]->categoryId : ''}}
                                    </a>

                                    <h3 class="how1-child2 m-t-14">

                                        <a href="{{url('news-details/'.$posts[1]->slug)}}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                            {{ isset($posts[1]->title) ? $posts[1]->title : ''}}
                                        </a>


                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative"
                                 style="background-image: url({{isset($posts[2]->image) ? asset($posts[2]->image) : ''}});">

                                <a href="{{url('news-details/'.$posts[2]->slug)}}"
                                   class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="{{url('news-details/'.$posts[2]->slug)}}"
                                       class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        {{ isset($posts[2]->categoryId) ? $posts[2]->categoryId : ''}}
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="{{url('news-details/'.$posts[2]->slug)}}"
                                           class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            {{ isset($posts[2]->title) ? $posts[2]->title : ''}}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative"
                                 style="background-image: url({{isset($posts[3]->image) ? asset($posts[3]->image) : ''}});">
                                <a href="{{url('news-details/'.$posts[3]->slug)}}"
                                   class="dis-block how1-child1 trans-03"></a>

                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    <a href="#"
                                       class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        {{ isset($posts[3]->categoryId) ? $posts[3]->categoryId : ''}}
                                    </a>

                                    <h3 class="how1-child2 m-t-14">
                                        <a href="{{url('news-details/'.$posts[3]->slug)}}"
                                           class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            {{ isset($posts[3]->title) ? $posts[3]->title : ''}}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Post -->
    <section class="bg0 p-t-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="p-b-20">
                        <!-- Entertainment -->
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl12 tab01-title">
                                    বাংলাদেশ
                                </h3>

                            </div>


                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                    <div class="row">

                                        @foreach($homePageFirstPortion as $news)

                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                            <!-- Item latest -->
                                            <div class="m-b-45">
                                                <a href="{{url('news-details/'.$news->slug)}}" class="wrap-pic-w hov1 trans-03">
                                                    <img src="{{asset($news->image)}}" alt="IMG">
                                                </a>

                                                <div class="p-t-16">
                                                    <h5 class="p-b-5">
                                                        <a href="{{url('news-details/'.$news->slug)}}"
                                                           class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            {{$news->title}}
                                                        </a>
                                                    </h5>


                                                </div>
                                            </div>
                                        </div>

                                            @endforeach

                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Business -->
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl13 tab01-title">
                                    আন্তর্জাতিক
                                </h3>
                            </div>


                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                                    <div class="row">


                                        @foreach($homePageSecondPortion as $news)

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                <!-- Item latest -->
                                                <div class="m-b-45">
                                                    <a href="{{url('news-details/'.$news->slug)}}" class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{asset($news->image)}}" alt="IMG">
                                                    </a>

                                                    <div class="p-t-16">
                                                        <h5 class="p-b-5">
                                                            <a href="{{url('news-details/'.$news->slug)}}"
                                                               class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                {{$news->title}}
                                                            </a>
                                                        </h5>


                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Travel -->
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl14 tab01-title">
                                    অর্থনীতি
                                </h3>

                            </div>


                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                    <div class="row">
                                        @foreach($homePageThirdPortion as $news)

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                <!-- Item latest -->
                                                <div class="m-b-45">
                                                    <a href="{{url('news-details/'.$news->slug)}}" class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{asset($news->image)}}" alt="IMG">
                                                    </a>

                                                    <div class="p-t-16">
                                                        <h5 class="p-b-5">
                                                            <a href="{{url('news-details/'.$news->slug)}}"
                                                               class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                {{$news->title}}
                                                            </a>
                                                        </h5>


                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl14 tab01-title">
                                    মতামত
                                </h3>

                            </div>


                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                                    <div class="row">
                                        @foreach($homePageFourthPortion as $news)

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                <!-- Item latest -->
                                                <div class="m-b-45">
                                                    <a href="{{url('news-details/'.$news->slug)}}" class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{asset($news->image)}}" alt="IMG">
                                                    </a>

                                                    <div class="p-t-16">
                                                        <h5 class="p-b-5">
                                                            <a href="{{url('news-details/'.$news->slug)}}"
                                                               class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                {{$news->title}}
                                                            </a>
                                                        </h5>


                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">
                        <div>
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    সর্বাধিক পঠিতঃ
                                </h3>
                            </div>

                            <ul class="p-t-35">

                                @foreach($popularNews as $news)

                                <li class="flex-wr-sb-s p-b-30">
                                    <a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($news->image)}}" alt="IMG">
                                    </a>

                                    <div class="size-w-11">
                                        <h6 class="p-b-4">
                                            <a href="{{url('news-details/'.$news->slug)}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                {{$news->title}}
                                            </a>
                                        </h6>

                                        <span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
											 {{$news->categoryId}}
											</a>

										</span>
                                    </div>
                                </li>

                                    @endforeach

                            </ul>
                        </div>

                        <div class="flex-c-s p-t-8">
                            <a href="#">
                                <img class="max-w-full" src="{{asset('public/front')}}/images/banner-02.jpg" alt="IMG">
                            </a>
                        </div>

                        <div class="how2 how2-cl4 flex-s-c mt-3">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                সর্বশেষঃ
                            </h3>
                        </div>
                        <ul class="p-t-35">
                            @foreach($topNews as $news)
                                <li class="how-bor3 p-rl-4">
                                    <a href="{{url('news-details/'.$news->slug)}}"
                                       class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($news->image)}}" alt="IMG">
                                    </a>
                                    <a href="{{url('news-details/'.$news->slug)}}"
                                       class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                        {{\Illuminate\Support\Str::limit($news->title,40)}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <div class="container">
        <div class="flex-c-c">
            <a href="#">
                <img class="max-w-full" src="{{asset('public/front')}}/images/banner-01.jpg" alt="IMG">
            </a>
        </div>
    </div>

    <!-- Latest -->
    <section class="bg0 p-t-60 p-b-35">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-20">
                    <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                        <h3 class="f1-m-2 cl3 tab01-title">
                            খেলাধুলাঃ
                        </h3>
                    </div>

                    <div class="row p-t-35">


                        @foreach($homePageFifthPortion as $news)

                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <!-- Item latest -->
                                <div class="m-b-45">
                                    <a href="{{url('news-details/'.$news->slug)}}" class="wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($news->image)}}" alt="IMG">
                                    </a>

                                    <div class="p-t-16">
                                        <h5 class="p-b-5">
                                            <a href="{{url('news-details/'.$news->slug)}}"
                                               class="f1-m-3 cl2 hov-cl10 trans-03">
                                                {{$news->title}}
                                            </a>
                                        </h5>


                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>

                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">

                        <div class="how2 how2-cl4 flex-s-c mt-3">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                বিনোদনঃ
                            </h3>
                        </div>
                        <ul class="p-t-35">
                            @foreach($homePageSixthPortion as $news)
                                <li class="how-bor3 p-rl-4">
                                    <a href="{{url('news-details/'.$news->slug)}}"
                                       class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($news->image)}}" alt="IMG">
                                    </a>
                                    <a href="{{url('news-details/'.$news->slug)}}"
                                       class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                        {{\Illuminate\Support\Str::limit($news->title,40)}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
