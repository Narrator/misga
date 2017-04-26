@extends('layouts.app')

@section('content')
        <h1 style="display:none;">{{ $events = App\Event::limit(4)->get() }}</h1>
        <h1 style="display:none;">{{ $news1 = App\Post::limit(3)->get() }}</h1>
        <h1 style="display:none;">{{ $news2 = App\Post::limit(3)->offset(3)->get() }}</h1>
        <div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <li>
                        <img src="assets/images/slides/slide-1.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Join the MIS Graduate Association</span>
                            <br />
                            <span class="secondary clearfix" >Connect with alumni and learn about internship opportunities</span>
                        </p>
                    </li>
                    <li>
                        <img src="assets/images/slides/slide-2.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Come to our Open Days</span>
                            <br />
                            <span class="secondary clearfix" >Meet us and interact with the other association members</span>
                        </p>
                    </li>
                    <li>
                        <img src="assets/images/slides/slide-3.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Attend one of our events</span>
                            <br />
                            <span class="secondary clearfix" >We will provide free food and drinks!</span>
                        </p>
                    </li>
                    <li>
                        <img src="assets/images/slides/slide-4.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Enroll in the MSIS course at OSU</span>
                            <br />
                            <span class="secondary clearfix" >Enroll in one of the most popular programs at OSU</span>
                        </p>
                    </li>
                </ul><!--//slides-->
            </div><!--//flexslider-->
            @if (Auth::guest())
                <section class="promo box box-dark">
                    <div class="col-md-9">
                    <h1 class="section-heading">Welcome to the MIS Graduate Association</h1>
                        <p>Look around here for information regarding courses offered and the MIS department at OSU. If you are already a member, log in to access information about internships, alumni and interact with other members</p>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-cta" href="/login"><i class="fa fa-play-circle"></i>Login Now</a>
                    </div>
                </section><!--//promo-->
            @else
                <section class="promo box box-dark">
                    <div class="col-md-8">
                    <h1 class="section-heading">Welcome {{ Auth::user()->name }}</h1>
                        <p>Click on the button on the right to update your information</p>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-cta" href="/edit-user/{{ Auth::user()->id }}"><i class="fa fa-user"></i>Edit  Profile</a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-cta" href="/logout"><i class="fa fa-play-circle"></i>Logout</a>
                    </div>
                </section><!--//promo-->
            @endif
            <section class="news">
                <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>
                <div class="carousel-controls">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                </div><!--//carousel-controls-->
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
                            
                            <div class="item active">
                                @foreach($news1 as $news)
                                    <div class="col-md-4 news-item">
                                        <h2 class="title"><a href="/news-single/{{ $news->id }}">{{ $news->title }}</a></h2>
                                        <div style="    width: 100px;
    height: 100px;
    overflow: hidden;
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;">
                                            <img style="width:200px;height:auto;" class="thumb" src="{{ $news->picture }}"  alt="" />
                                        </div>
                                        <p>{{ str_limit(strip_tags($news->body), $limit = 100, $end = '...') }}</p>
                                        <a class="read-more" href="/news-single/{{ $news->id }}">Read more<i class="fa fa-chevron-right"></i></a>
                                    </div><!--//news-item-->
                                @endforeach
                            </div><!--//item-->
                            <div class="item">
                                @foreach($news2 as $news)
                                    <div class="col-md-4 news-item">
                                        <h2 class="title"><a href="/news-single/{{ $news->id }}">{{ $news->title }}</a></h2>
                                        <div style="    width: 100px;
    height: 100px;
    overflow: hidden;
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;">
                                            <img style="width:200px;height:auto;" class="thumb" src="{{ $news->picture }}"  alt="" />
                                        </div>
                                        <p>{{ str_limit(strip_tags($news->body), $limit = 100, $end = '...') }}</p>
                                        <a class="read-more" href="/news-single/{{ $news->id }}">Read more<i class="fa fa-chevron-right"></i></a>
                                    </div><!--//news-item-->
                                @endforeach
                            </div><!--//item-->
                        </div><!--//carousel-inner-->
                    </div><!--//news-carousel-->
                </div><!--//section-content-->
            </section><!--//news-->
            <div class="row cols-wrapper">
                <div class="col-md-3">
                    <section class="events">
                        <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                        <div class="section-content">
                            @foreach($events as $event)
                                <div class="event-item">
                                    <p class="date-label">
                                        <span class="month">{{ date('M', strtotime($event->date)) }}</span>
                                        <span class="date-number">{{ date('d', strtotime($event->date)) }}</span>
                                    </p>
                                    <div class="details">
                                        <h2 class="title">{{ $event->title }}</h2>
                                        <p class="time"><i class="fa fa-clock-o"></i>{{ date('H:i', strtotime($event->time)) }}</p>
                                        <p class="location"><i class="fa fa-map-marker"></i>{{ $event->location }}</p>
                                    </div><!--//details-->
                                </div><!--event-item-->
                            @endforeach
                            <a class="read-more" href="/events">All events<i class="fa fa-chevron-right"></i></a>
                        </div><!--//section-content-->
                    </section><!--//events-->
                </div><!--//col-md-3-->
                <div class="col-md-6">
                    <section class="video">
                        <h1 class="section-heading text-highlight"><span class="line">What we do</span></h1>
                        <div class="section-content">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis neque arcu. Nunc pulvinar odio ipsum. Sed mauris erat, ullamcorper eu massa vel, tincidunt fringilla nibh. Aliquam urna risus, volutpat sit amet purus sed, imperdiet tincidunt ante. Etiam dignissim, nisi vitae ullamcorper imperdiet, nisl arcu facilisis odio, sed sollicitudin nibh orci non nisl. Donec sodales pretium tempor. Quisque efficitur neque tortor. In feugiat augue nec mi rhoncus, non ultrices neque congue. Curabitur in rhoncus est. Donec venenatis mi eros, venenatis vehicula quam scelerisque sed. Nullam rhoncus venenatis dui tincidunt viverra.</p>

                            <p class="description">Pellentesque gravida, magna vitae placerat pretium, enim risus bibendum elit, sed egestas nulla libero sed neque. Nam lobortis nibh enim, non feugiat lectus aliquet in. Duis vulputate, massa vel porttitor tempus, ligula purus pulvinar nibh, vel porta lorem erat nec nisl. Proin ultricies, sem sed ullamcorper tincidunt, nulla erat auctor nulla, eget dapibus lorem nunc ac justo. Sed lobortis turpis nec purus aliquet, vitae pretium dui ultricies. Sed bibendum venenatis magna, sed condimentum urna commodo vel. In at dignissim nunc. Nam porta dapibus turpis sed semper. Donec pellentesque facilisis justo.</p>
                        </div><!--//section-content-->
                    </section><!--//video-->
                </div>
                <div class="col-md-3">
                    <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>
                                        </blockquote>
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Marissa Spencer</span><br /><span class="title">Curabitur commodo</span></p>
                                            <img class="profile col-md-4 pull-right" src="assets/images/testimonials/profile-1.png"  alt="" />
                                        </div>
                                    </div><!--//item-->
                                    <div class="item">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>
                                            I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                        </blockquote>
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Marco Antonio</span><br /><span class="title"> Gravida ultrices</span></p>
                                            <img class="profile col-md-4 pull-right" src="assets/images/testimonials/profile-2.png"  alt="" />
                                        </div>
                                    </div><!--//item-->
                                    <div class="item">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>
                                            I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                        </blockquote>
                                        <div class="row">
                                            <p class="people col-md-8 col-sm-3 col-xs-8"><span class="name">Kate White</span><br /><span class="title"> Gravida ultrices</span></p>
                                            <img class="profile col-md-4 pull-right" src="assets/images/testimonials/profile-3.png"  alt="" />
                                        </div>
                                    </div><!--//item-->

                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                </div><!--//col-md-3-->
            </div><!--//cols-wrapper-->
        </div><!--//content-->
@endsection
