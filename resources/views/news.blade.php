@extends('layouts.app')

@section('content')
        <h1 style="display:none;">{{ $events = App\Event::limit(3)->get() }}</h1>
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">News</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">News</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="news-wrapper col-md-8 col-sm-7">
                            @foreach($posts as $post)
                                <article class="news-item page-row has-divider clearfix row">
                                    <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                                        <img class="img-responsive" src="{{ $post->picture }}" alt="" />
                                    </figure>
                                    <div class="details col-md-10 col-sm-9 col-xs-8">
                                        <h3 class="title"><a href="/news-single/{{ $post->id }}">{{ $post->title }}</a></h3>
                                        <p class="meta text-muted">By: <a href="/user-profile/{{ $post->user->id }}">{{ $post->user->username }}</a> | Posted on: {{ date('d / m / Y', strtotime($post->created_at)) }}</p>
                                        {{ str_limit(strip_tags($post->body), $limit = 500, $end = '...') }}
                                        <br><br>
                                        <a class="btn btn-theme read-more" href="/news-single/{{ $post->id }}">Read more<i class="fa fa-chevron-right"></i></a>
                                        @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $post->user_id ))
                                            <a class="btn btn-warning red read-more" href="/edit-news/{{ $post->id }}">Edit News<i class="fa fa-chevron-right"></i></a>
                                        @endif
                                    </div>
                                </article><!--//news-item-->
                            @endforeach
                        </div><!--//news-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Upcoming Events</h3>
                                @foreach($events as $event)
                                    <article class="events-item row page-row">
                                            <div class="date-label-wrapper col-md-3 col-sm-4 col-xs-4">
                                                <p class="date-label">
                                                    <span class="month">{{ date('M', strtotime($event->date)) }}</span>
                                                    <span class="date-number">{{ date('d', strtotime($event->date)) }}</span>
                                                </p>
                                            </div><!--//date-label-wrapper-->
                                            <div class="details col-md-9 col-sm-8 col-xs-8">
                                                <h5 class="title">{{ $event->title }}</h5>
                                                <p class="time text-muted">{{ date('H:i', strtotime($event->time)) }}<br />{{ $event->location }}</p>
                                            </div><!--//details-->
                                    </article>
                                @endforeach
                            </section><!--//widget-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
