@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit Job</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Edit Job</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="/handle-edit-job/{{ $job->id }}" novalidate>
                                {{ method_field('PATCH') }}
                        
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="title" style="text-align:left; width:100%">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $job->title }}" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="department" style="text-align:left; width:100%">Department</label>
                                    <input id="department" type="text" class="form-control" name="department" value="{{ $job->department }}" autofocus>
                                    @if ($errors->has('department'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('department') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="company" style="text-align:left; width:100%">Company</label>
                                    <input id="company" type="text" class="form-control" name="company" value="{{ $job->company }}" autofocus>
                                    @if ($errors->has('company'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="location" style="text-align:left; width:100%">Location</label>
                                    <input id="location" type="text" class="form-control" name="location" value="{{ $job->location }}" autofocus>
                                    @if ($errors->has('location'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="salary" style="text-align:left; width:100%">Salary</label>
                                    <input id="salary" type="text" class="form-control" name="salary" value="{{ $job->salary }}" autofocus>
                                    @if ($errors->has('salary'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('salary') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group hours">
                                    <label for="hours">Hours</label>
                                    <select class="form-control" id="hours" name="hours">
                                        <option {{ $job->hours == 'full-time' ? 'selected="selected"' : '' }} value="full-time">Full Time</option>
                                        <option {{ $job->hours == 'internship' ? 'selected="selected"' : '' }} value="internship">Internship</option>
                                    </select>
                                </div><!--//form-group-->
                                <div class="form-group{{ $errors->has('closing-date') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="closing-date" style="text-align:left; width:100%">Closing Date</label>
                                    <input id="closing-date" type="text" class="form-control datepicker" name="closing-date" value="{{ $job->{'closing-date'} }}" autofocus>
                                    @if ($errors->has('closing-date'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('closing-date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="description" style="text-align:left; width:100%">Description</label>
                                    <textarea id="description" rows=15 class="form-control ckeditor" name="description">
                                        {{ $job->description }}
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
