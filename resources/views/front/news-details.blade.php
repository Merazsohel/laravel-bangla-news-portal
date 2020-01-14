@extends('front.layouts.app')
@section('content')

    <section class="bg0 p-b-140 p-t-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 p-b-30">
                    <div class="p-r-10 p-r-0-sr991">
                        <!-- Blog Detail -->
                        <div class="p-b-70">
                            <a href="{{url('category/'.$news->categoryId)}}" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                {{$news->categoryId}}
                            </a>

                            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                {{$news->title}}
                            </h3>

                            <div class="wrap-pic-max-w p-b-30">
                                <img src="{{asset($news->image)}}" alt="IMG">
                            </div>

                            <p class="f1-s-11 cl6 p-b-25">
                                {!! $news->description !!}
                            </p>


                            <div class="flex-s-s mt-5">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>



                                <div class="flex-wr-s-s size-w-0">

                                    <div class="sharethis-inline-share-buttons"></div>

                                </div>
                            </div>
                            <div id="disqus_thread" class="mt-5"></div>
                        </div>

                        <!-- Leave a comment -->
                        <div>
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-10 col-lg-4 p-b-30">
                    <div class="p-l-10 p-rl-0-sr991 p-t-70">
                        <!-- Category -->
                        <div class="p-b-60">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    সর্বশেষঃ
                                </h3>
                            </div>

                            <ul class="p-t-35">
                                @foreach($topNews as $news)
                                <li class="how-bor3 p-rl-4">
                                    <a href="{{url('news-details/'.$news->slug)}}" class="size-w-10 wrap-pic-w hov1 trans-03">
                                        <img src="{{asset($news->image)}}" alt="IMG">
                                    </a>
                                    <a href="{{url('news-details/'.$news->slug)}}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                       {{\Illuminate\Support\Str::limit($news->title,40)}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="p-b-30">
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

                        <!-- Archive -->
                        <div class="p-b-37">
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    আর্কাইভ
                                </h3>
                            </div>

                            <ul class="p-t-32">

                                    @foreach ($postsByDate as $date => $posts)

                                    <li class="p-rl-4 p-b-19">
                                        @foreach($posts as $post)
                                        <a href="{{url('archive-data/'.$post->created_at)}}" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
                                            @endforeach
                                            <span>
                                                {{ $date }}
                                            </span>

                                            <span>
                                                ({{ count($posts) }})
                                            </span>

                                        </a>
                                    </li>

                                    @endforeach


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
    <script>
        (function() {
            var d = document, s = d.createElement('script');
            s.src = 'https://http-news-merazsohel-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    @endsection
