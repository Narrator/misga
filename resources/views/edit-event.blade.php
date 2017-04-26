@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit Event</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Edit Event</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="/handle-edit-event/{{ $event->id }}" novalidate>
                                {{ method_field('PATCH') }}
                        
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="title" style="text-align:left; width:100%">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $event->title }}" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="date" style="text-align:left; width:100%">Date</label>
                                    <input id="date" type="text" class="form-control datepicker" name="date" value="{{ $event->date }}" autofocus>
                                    @if ($errors->has('date'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="time" style="text-align:left; width:100%">Time</label>
                                    <input id="time" type="text" class="form-control timepicker" name="time" value="{{ $event->time }}" autofocus>
                                    @if ($errors->has('time'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('time') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="location" style="text-align:left; width:100%">Location</label>
                                    <input id="location" type="text" class="form-control" name="location" value="{{ $event->location }}" autofocus>
                                    @if ($errors->has('location'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="description" style="text-align:left; width:100%">Description</label>
                                    <textarea id="description" rows=15 class="form-control ckeditor" name="description">
                                        {{ $event->description }}
                                    </textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-theme">Save</button>
                            </form>
                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper-->
        </div><!--//content-->
@endsection
