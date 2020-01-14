@extends('front.layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80">
                <div class="row">
                    @if (count($news) > 0)
                        @foreach($news as $new)
                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                <!-- Item latest -->
                                <div class="m-b-45">
                                    <a href="{{url('news-details/'.$new->slug)}}" class="wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($new->image)}}" alt="IMG">
                                    </a>

                                    <div class="p-t-16">
                                        <h5 class="p-b-5">
                                            <a href="{{url('news-details/'.$new->slug)}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                {{$new->title}}
                                            </a>
                                        </h5>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info">There is no news for this category</div>
                    @endif
                </div>

                <!-- Pagination -->
                <div class="flex-wr-s-c m-rl--7 p-t-15 d-flex justify-content-center">
                    {!! $news->render() !!}
                </div>
            </div>

            <div class="col-md-10 col-lg-4 p-b-80">
                <div class="p-l-10 p-rl-0-sr991">
                    <!-- Most Popular -->
                    <div class="p-b-23">
                        <div class="how2 how2-cl4 flex-s-c">
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
                    <div class="p-b-23">

                        <div class="flex-c-s p-b-50">
                            <a href="#">
                                <img class="max-w-full" src="{{asset('public/front')}}/images/banner-02.jpg" alt="IMG">
                            </a>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
