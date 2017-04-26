@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Edit News</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Edit news</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="/handle-edit-news/{{ $post->id }}" novalidate>
                                {{ method_field('PATCH') }}
                        
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="title" style="text-align:left; width:100%">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" value="{{ $post->title }}" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="body" style="text-align:left; width:100%">Body</label>
                                    <textarea id="body" rows=15 class="form-control ckeditor" name="body">
                                        {{ $post->body }}
                                    </textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group picture">
                                    <label for="picture">Picture</label>
                                    <input id="picture" name="picture" type="file" class="form-control" value="{{ $post->picture }}">
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
