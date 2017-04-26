@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">{{ $user->username }}</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">{{ $user->username }}</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <div class="team-wrapper col-md-8 col-sm-7">
                            <div class="row page-row" >
                                <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                    <img class="img-responsive" src="{{ $user->picture }}" alt="" />
                                </figure>
                                <div class="details col-md-9 col-sm-8 col-xs-6">
                                    <h2 style="margin-top:0px;">{{ $user->name }}</h2>
                                    <br>
                                    <h5>Title: {{ $user->title }}</h5>
                                    <h5>Affiliation: {{ $user->company }}</h5>
                                    <h5>Phone: {{ $user->phone }}</h5>
                                    <h5>E-mail: {{ $user->email }}</h5>
                                    <br>
                                    <h5>Bio:</h5>
                                    {!! $user->bio !!}
                                    <br><br>
                                    @if (Auth::user() && (Auth::user()->isAdmin() || Auth::user()->id == $user->id ))
                                        <a class="btn btn-warning red read-more" href="/edit-user/{{ $user->id }}">Edit Profile<i class="fa fa-chevron-right"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div><!--//team-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-->
        </div><!--//content-->
@endsection
