<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{$settings->site_title}}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset($settings->favicon)}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/front')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/front')}}/css/util.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/front')}}/css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.css" integrity="sha256-T83uxgXXWPZaSIlVc2Y1H6ZSAZVjHyXfX4Y8qof8WKA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('public/front/')}}/css/fonts/font.css">
    @yield('style')
</head>


<body class="animsition">
<header>
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span class="mr-3">
								আজকের সর্বনিম্ন তাপমাত্রাঃ  {{ BanglaConverter::en2bn(round($weatherHome[0]->min_temp)) }} ° সেঃ
							</span>

							<span>
								আজকের সর্বোচ্চ তাপমাত্রাঃ  {{ BanglaConverter::en2bn(round($weatherHome[0]->max_temp)) }}° সেঃ
							</span>
						</span>

                </div>

                <div class="right-topbar">
                    <a href="{{$settings->fb_link}}">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <a href="{{$settings->twitter_link}}">
                        <span class="fa fa-twitter"></span>
                    </a>

                    <a href="{{$settings->pinterest_link}}">
                        <span class="fa fa-pinterest"></span>
                    </a>

                    <a href="{{$settings->vemio_link}}">
                        <span class="fa fa-vimeo"></span>
                    </a>

                    <a href="{{$settings->youtube_link}}">
                        <span class="fa fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{url('/')}}"><img src="{{asset($settings->logo)}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span class="mr-3">
							আজকের সর্বনিম্ন তাপমাত্রাঃ {{$weatherHome[0]->min_temp}}° সেঃ
							</span>


							<span>
							আজকের সর্বোচ্চ তাপমাত্রাঃ {{$weatherHome[0]->max_temp}}° সেঃ
							</span>
						</span>
                </li>

                <li class="right-topbar">
                    <a href="{{$settings->fb_link}}">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <a href="{{$settings->twitter_link}}">
                        <span class="fa fa-twitter"></span>
                    </a>

                    <a href="{{$settings->pinterest_link}}">
                        <span class="fa fa-pinterest"></span>
                    </a>

                    <a href="{{$settings->vemio_link}}">
                        <span class="fa fa-vimeo"></span>
                    </a>

                    <a href="{{$settings->youtube_link}}">
                        <span class="fa fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">

                <li>
                    <a href="{{url('category/'.$categoryOne->name)}}"> {{ isset($categoryOne->name) ? $categoryOne->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categoryTwo->name)}}">{{ isset($categoryTwo->name) ? $categoryTwo->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categoryThree->name)}}">{{ isset($categoryThree->name) ? $categoryThree->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categoryFour->name)}}">{{ isset($categoryFour->name) ? $categoryFour->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categoryFive->name)}}">{{ isset($categoryFive->name) ? $categoryFive->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categorySix->name)}}">{{ isset($categorySix->name) ? $categorySix->name : 'News'}}</a>
                </li>

                <li>
                    <a href="{{url('category/'.$categorySeven->name)}}">{{ isset($categorySeven->name) ? $categorySeven->name : 'News'}}</a>
                </li>

                <li>
                    <a href="#">সব</a>

                    <ul class="sub-menu-m">
                        @foreach($allCategories as $allCategory)
                            <li><a href="{{url('category/'.$allCategory->name)}}">{{$allCategory->name}}</a></li>
                        @endforeach
                    </ul>

                    <span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>

                </li>

            </ul>
        </div>

        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{asset($settings->logo)}}" alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href="#"><img src="{{asset('public/front')}}/images/banner-01.jpg" alt="IMG"></a>
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="{{url('/')}}">
                        <img src="{{asset($settings->logo)}}" alt="LOGO">
                    </a>

                    <ul class="main-menu mt-3 d-flex justify-content-between">

                        <li>
                            <a href="{{url('category/'.$categoryOne->name)}}"> {{ isset($categoryOne->name) ? $categoryOne->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categoryTwo->name)}}">{{ isset($categoryTwo->name) ? $categoryTwo->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categoryThree->name)}}">{{ isset($categoryThree->name) ? $categoryThree->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categoryFour->name)}}">{{ isset($categoryFour->name) ? $categoryFour->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categoryFive->name)}}">{{ isset($categoryFive->name) ? $categoryFive->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categorySix->name)}}">{{ isset($categorySix->name) ? $categorySix->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="{{url('category/'.$categorySeven->name)}}">{{ isset($categorySeven->name) ? $categorySeven->name : 'News'}}</a>
                        </li>

                        <li>
                            <a href="#">সব <i class="fa fa-angle-down"></i></a>

                            <ul class="sub-menu">
                                @foreach($allCategories as $allCategory)
                                    <li><a href="{{url('category/'.$allCategory->name)}}">{{$allCategory->name}}</a></li>
                                @endforeach
                            </ul>

                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>


<input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
<label class="onoffswitch3-label mt-1 mb-1" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">
                   @foreach($latestNews as $news)

                        <a href="{{url('news-details/'.$news->slug)}}" style="color: black">{{$news->title}} </a>   <span class="ml-3 mr-3"> || </span>

                    @endforeach
                </marquee>
                <span class="onoffswitch3-switch">ব্রেকিং নিউজঃ </span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">ব্রেকিং নিউজ দেখুনঃ</span></span>
        </span>
</label>


@yield('content')


<footer>
    <div class="bg2 p-t-40 p-b-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <a href="{{url('/')}}">
                            <img class="max-s-full logo" src="{{asset($settings->logo)}}" alt="LOGO">
                        </a>
                    </div>

                    <div>
                        <p class="f1-s-1 cl11 p-b-16">
                            {!! $settings->about_us !!}

                        </p>

                        <div class="p-t-15">
                            <a href="{{$settings->fb_link}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fa fa-facebook"></span>
                            </a>

                            <a href="{{$settings->twitter_link}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fa fa-twitter"></span>
                            </a>

                            <a href="{{$settings->pinterest_link}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fa fa-pinterest"></span>
                            </a>

                            <a href="{{$settings->vemio_link}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fa fa-vimeo"></span>
                            </a>

                            <a href="{{$settings->youtube_link}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                <span class="fa fa-youtube"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            সর্বশেষঃ
                        </h5>
                    </div>

                    <ul>
                        @foreach($topNews as $news)
                            <li class="flex-wr-sb-s p-b-20">
                                <a href="{{url('news-details/'.$news->slug)}}"
                                   class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="{{asset($news->image)}}" alt="IMG">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="{{url('news-details/'.$news->slug)}}" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            {{\Illuminate\Support\Str::limit($news->title,30)}}
                                        </a>
                                    </h6>


                                </div>
                                @endforeach
                            </li>

                    </ul>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            ক্যাটাগরি
                        </h5>
                    </div>

                    <ul class="m-t--12">
                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="{{url('category/'.$categoryOne->name)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$categoryOne->name}}   ({{ BanglaConverter::en2bn($categoryOneCount) }})
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="{{url('category/'.$categoryTwo->name)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$categoryTwo->name}}  ({{ BanglaConverter::en2bn($categoryTwoCount) }})
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="{{url('category/'.$categoryThree->name)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$categoryThree->name}}  ({{ BanglaConverter::en2bn($categoryThreeCount) }})
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="{{url('category/'.$categoryFour->name)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$categoryFour->name}}  ({{ BanglaConverter::en2bn($categoryFourCount) }})
                            </a>
                        </li>

                        <li class="how-bor1 p-rl-5 p-tb-10">
                            <a href="{{url('category/'.$categoryFive->name)}}" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                {{$categoryFive->name}}   ({{ BanglaConverter::en2bn($categoryFiveCount) }})
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">

					<a href="https://news.merazsohel.com" class="f1-s-1 cl10 hov-link1">  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
                            class="fa fa-heart" aria-hidden="true"></i> by {{$settings->site_title}}</a>

				</span>
        </div>
    </div>
</footer>


<div class="btn-back-to-top mb-3" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fa fa-angle-up"></span>
		</span>
</div>


<script src="{{asset('public/front')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('public/front')}}/js/popper.js"></script>
<script src="{{asset('public/front')}}/js/bootstrap.min.js"></script>
<script src="{{asset('public/front')}}/js/main.js"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e1b4f7ed9b8290012a6ec03&product=inline-share-buttons" async="async"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156068392-1"></script>
<script type="text/javascript" src="{{asset('public/front')}}/js/ga.js"> </script>
@yield('script')
</body>
</html>
