@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">{{ $course->title }}</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="/courses">Course</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">{{ $course->title }}</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="course-wrapper col-md-8 col-sm-7">
                            <article class="course-item">
                                <p class="featured-image page-row"><img class="img-responsive" src="{{ $course->picture }}" alt=""/></p>
                                <div class="page-row box box-border">
                                    <ul class="list-unstyled no-margin-bottom">
                                        <li><strong>Start date:</strong> <em>{{ date('d / m / Y', strtotime($course->{'start-date'})) }}</em></li>
                                        <li><strong>Duration: </strong> <em>{{ $course->duration }}</em></li>
                                        <li><strong>Location: </strong> <em>{{ $course->location }}</em></li>
                                        <li><strong>Semester: </strong> <em style="text-transform:uppercase;">{{ $course->semester }}</em></li>
                                    </ul>
                                </div><!--//page-row-->
                                <div class="page-row">
                                    {!! $course->description !!}
                                    @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $course->user_id ))
                                        <a class="btn btn-warning red read-more" href="/edit-course/{{ $course->id }}">Edit Course<i class="fa fa-chevron-right"></i></a>
                                    @endif
                                </div><!--//page-row-->
                            </article><!--//course-item-->
                        </div><!--//course-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Why MIS @ OSU?</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="https://spears.okstate.edu/mis-analytics/files/DSandAD_MA_Flier_16_v1.pdf"><i class="fa fa-download"></i>Download prospectus</a>
                            </section><!--//widget-->
                            <section class="widget has-divider">
                                <h3 class="title">Enquire about this course</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 405 762 3594</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="mailto:misga@okstate.edu">misga@okstate.edu</a></p>
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
