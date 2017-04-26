@extends('layouts.app')

@section('content')
        <h1 style="display:none;">{{ $news = App\Post::limit(4)->get() }}</h1>
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Events</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Events</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="events-wrapper col-md-8 col-sm-7">
                            @foreach($events as $event)
                                <article class="events-item page-row has-divider clearfix">
                                    <div class="date-label-wrapper col-md-1 col-sm-2">
                                        <p class="date-label">
                                            <span class="month">{{ date('M', strtotime($event->date)) }}</span>
                                            <span class="date-number">{{ date('d', strtotime($event->date)) }}</span>
                                        </p>
                                    </div><!--//date-label-wrapper-->
                                    <div class="details col-md-11 col-sm-10">
                                        <h3 class="title">{{ $event->title }}</h3>
                                         <p class="meta text-muted">By: <a href="/user-profile/{{ $event->user->id }}">{{ $event->user->username }}</a> | Posted on: {{ date('d / m / Y', strtotime($event->created_at)) }}</p>
                                        <p class="meta"><span class="time"><i class="fa fa-clock-o"></i>{{ date('H:i', strtotime($event->time)) }}</span><span class="location"><i class="fa fa-map-marker"></i><a href="#">{{ $event->location }}</a></a></span></p>
                                        {!! $event->description !!}
                                        @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $event->user_id ))
                                            <a class="btn btn-warning red read-more" href="/edit-event/{{ $event->id }}">Edit Event<i class="fa fa-chevron-right"></i></a>
                                        @endif
                                    </div><!--//details-->
                                </article><!--//events-item-->
                            @endforeach
                        </div><!--//events-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Latest News</h3>
                                @foreach($news as $new)
                                    <article class="news-item row">
                                        <figure class="thumb col-md-2">
                                            <img src="{{ $new->picture }}" alt="" >
                                        </figure>
                                        <div class="details col-md-10">
                                            <h4 class="title"><a href="/news-single/{{ $new->id }}">{{ $new->title }}</a></h4>
                                        </div>
                                    </article><!--//news-item-->
                                @endforeach
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
