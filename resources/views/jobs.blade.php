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
                            <li class="current">Jobs</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-8 col-sm-7">
                            @foreach($jobs as $job)
                                <div class="panel panel-default page-row">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="job-single/{{ $job->id }}">{{ $job->title }}</a> <span class="label label-{{ ($job->hours == 'full-time') ? 'success' : 'warning' }} pull-right">{{ $job->hours }}</span></h3>

                                </div>
                                <div class="panel-body">
                                    {{ str_limit(strip_tags($job->description), $limit = 500, $end = '...') }}
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Department:</strong> {{ $job->department }}</li>
                                    <li class="list-group-item"><strong>Location:</strong>{{ $job->location }}</li>
                                    <li class="list-group-item"><strong>Salary:</strong>{{ $job->salary }}</li>
                                    <li class="list-group-item"><strong>Hours:</strong>{{ $job->hours }}</li>
                                    <li class="list-group-item"><strong>Closing Date:</strong>{{ date('d / m / Y', strtotime($job->{'closing-date'})) }}</li>
                                </ul>
                                <div class="panel-footer">
                                    <div class="row">
                                        <ul class="list-inline col-md-8 col-sm-6 col-xs-6">
                                            <li><a href="/job-single/{{$job->id}}">More details</a></li>
                                        </ul>
                                        <div class="meta col-md-4 col-sm-6 col-xs-6 text-right">
                                            <small>Posted by <a href="/user/profile/{{ $job->user_id }}">{{ $job->user->username }}</a> on {{ date('d / m / Y', strtotime($job->created_at)) }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//panel-->
                            @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $job->user_id ))
                                <a class="btn btn-warning red read-more" href="/edit-job/{{ $job->id }}">Edit Job<i class="fa fa-chevron-right"></i></a>
                            @endif
                            @endforeach

                        </div><!--//jobs-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget">
                                <h3 class="title">Contact</h3>
                                <p>Suspendisse mollis neque augue, vitae malesuada mi dictum quis. Ut mollis purus vel orci aliquam sagittis. Aliquam erat volutpat. </p>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 405 762 3594</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="mailto:misga@okstate.edu">misga@okstate.edu</a></p>
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
