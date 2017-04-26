@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Jobs</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="/jobs">Jobs</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">{{ $job->title }}</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-8 col-sm-7">
                            <h3 class="title">{{ $job->title }}</h3>
                            <p class="meta text-muted">By: <a href="/user-profile/{{ $job->user->id }}">{{ $job->user->username }}</a> | Posted on: {{ date('d / m / Y', strtotime($job->created_at)) }}</p>
                            <div class="box box-border page-row">
                                <ul class="list-unstyled">
                                    <li><strong>Department:</strong>{{ $job->department }}</li>
                                    <li><strong>Company:</strong>{{ $job->company }}</li>
                                    <li><strong>Location:</strong>{{ $job->location }}</li>
                                    <li><strong>Salary:</strong>{{ $job->salary }}</li>
                                    <li><strong>Hours:</strong>{{ $job->hours }}</li>
                                    <li><strong>Closing date:</strong>{{ date('d / m / Y', strtotime($job->{'closing-date'})) }}</li>
                                </ul>
                            </div>
                            {!! $job->description !!}
                            @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $job->user_id ))
                                <a class="btn btn-warning red read-more" href="/edit-job/{{ $job->id }}">Edit Job<i class="fa fa-chevron-right"></i></a>
                            @endif
                        </div><!--//jobs-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Why MIS @ OSU</h3>
                                <p>Maecenas nisl urna, condimentum ac justo a, adipiscing hendrerit magna. Fusce pharetra laoreet accumsan. Phasellus elit sapien, consequat vel sapien sit amet, condimentum vulputate odio. Aliquam fringilla justo quis est placerat, eu imperdiet lorem cursus. Curabitur pretium nulla lorem, sed egestas ante vestibulum dignissim.</p>
                                <a class="btn btn-theme" target="_blank" href="https://spears.okstate.edu/mis-analytics/">Find out more</a>
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
