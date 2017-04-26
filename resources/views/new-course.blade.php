@extends('layouts.app')

@section('content')
@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Add Course</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Add Course</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="/add-course" novalidate>
                        
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="title" style="text-align:left; width:100%">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" placeholder="Enter the title" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('start-date') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="start-date" style="text-align:left; width:100%">Start Date</label>
                                    <input id="start-date" type="text" class="form-control" name="start-date" placeholder="Enter the Start date" autofocus>
                                    @if ($errors->has('start-date'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('start-date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="duration" style="text-align:left; width:100%">Duration</label>
                                    <input id="duration" type="text" class="form-control" name="duration" placeholder="Enter the duration" autofocus>
                                    @if ($errors->has('duration'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('duration') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="location" style="text-align:left; width:100%">Location</label>
                                    <input id="location" type="text" class="form-control" name="location" placeholder="Enter the location" autofocus>
                                    @if ($errors->has('location'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group semester">
                                    <label for="semester">Semester</label>
                                    <select class="form-control" id="semester" name="semester">
                                        <option value="spring">Spring</option>
                                        <option value="summer">Summer</option>
                                        <option value="fall">Fall</option>
                                    </select>
                                </div><!--//form-group-->
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="description" style="text-align:left; width:100%">Description</label>
                                    <textarea id="description" rows=15 class="form-control ckeditor" name="description">
                                    </textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group picture">
                                    <label for="picture">Picture</label>
                                    <input id="picture" name="picture" type="file" class="form-control">
                                </div><!--//form-group-->
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

@endsection
