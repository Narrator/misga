@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Faculty</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Faculty</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="team-wrapper col-md-8 col-sm-7">
                            @foreach($faculty as $fac)
                                <div class="row page-row" >
                                    <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                        <img class="img-responsive" src="{{ $fac->picture }}" alt="" />
                                    </figure>
                                    <div class="details col-md-9 col-sm-8 col-xs-6">
                                        <h3 class="title">{{ $fac->name }}</h3>
                                        <h4>{{ $fac->title }}</h4>
                                        {{ str_limit(strip_tags($fac->bio), $limit = 300, $end = '...') }}
                                        <br><br>
                                        <a class="btn btn-theme read-more" href="/user-profile/{{ $fac->id }}">Read more<i class="fa fa-chevron-right"></i></a>
                                        @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $fac->id ))
                                            <a class="btn btn-warning red read-more" href="/edit-user/{{ $fac->id }}">Edit Profile<i class="fa fa-chevron-right"></i></a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div><!--//team-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Download Prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="https://spears.okstate.edu/mis-analytics/files/DSandAD_MA_Flier_16_v1.pdf"><i class="fa fa-download"></i>Download now</a>
                            </section><!--//widget-->
                            <section class="widget row-divider">
                                <h3 class="title">Student Testimonials</h3>
                                <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marissa Spencer</span><br><span class="title">Curabitur commodo</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-1.png">
                                            </div>
                                        </div><!--//item-->
                                        <div class="item">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marco Antonio</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-2.png">
                                            </div>
                                        </div><!--//item-->
                                        <div class="item active">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Kate White</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-3.png">
                                            </div>
                                        </div><!--//item-->

                                    </div><!--//carousel-inner-->
                                    <div class="carousel-controls">
                                        <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                                        <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                                    </div><!--//carousel-controls-->
                                </div><!--//testimonials-carousel-->
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
