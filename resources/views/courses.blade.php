@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Course List</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Course List</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="courses-wrapper col-md-8 col-sm-7">
                            <div class="course-item-header row-divider hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-title col-md-4 col-sm-6"><strong>Course name</strong></div>
                                    <div class="col-meta col-md-8 col-sm-6">
                                        <div class="row">
                                            <div class="col-start col-md-3"><strong>Start date</strong></div>
                                            <div class="col-duration col-md-2"><strong>Duration</strong></div>
                                            <div class="col-location col-md-3"><strong>Location</strong></div>
                                            <div class="col-semester col-md-4"><strong>Semester</strong></div>
                                        </div>
                                    </div><!--//col-meta-->
                                </div><!---//row-->
                            </div><!--//course-item-header-->
                            @foreach($courses as $course)
                                <article class="course-item row-divider">
                                    <div class="details row">
                                        <div class="col-title col-md-4 col-sm-6"><a href="/course-single/{{ $course->id }}">{{ $course->title }}</a></div>
                                        <div class="col-meta col-md-8 col-sm-6">
                                            <div class="row">
                                                <div class="col-start col-md-3">{{ date('d / m / Y', strtotime($course->{'start-date'})) }}</div>
                                                <div class="col-duration col-md-2">{{ $course->duration }}</div>
                                                <div class="col-location col-md-3">{{ $course->location }}</div>
                                                <div class="col-semester col-md-4" style="text-transform:uppercase;">{{ $course->semester }}</div>
                                            </div>
                                        </div><!--//col-meta-->
                                    </div><!--//details-->
                                </article><!--//course-item-->
                            @endforeach
                        </div><!--//courses-wrapper-->
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
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-1.png" alt="">
                                            </div>
                                        </div><!--//item-->
                                        <div class="item">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Marco Antonio</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-2.png" alt="">
                                            </div>
                                        </div><!--//item-->
                                        <div class="item active">
                                            <blockquote class="quote">
                                                <i class="fa fa-quote-left"></i>
                                                I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                            </blockquote>
                                            <div class="row">
                                                <p class="people col-md-8 col-md-push-1"><span class="name">Kate White</span><br><span class="title"> Gravida ultrices</span></p>
                                                <img class="profile col-md-4" src="assets/images/testimonials/profile-3.png" alt="">
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
