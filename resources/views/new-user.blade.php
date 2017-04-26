@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Add User</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Add User</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="/add-user" novalidate>
                                {{ method_field('POST') }}
                        
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="username" style="text-align:left; width:100%">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" placeholder="Enter Username" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="password" style="text-align:left; width:100%">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter new password" autofocus>
                                </div>
                                <div class="form-group confirm-password">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input id="confirm-password" type="password" class="form-control" placeholder="Confirm the password">
                                </div><!--//form-group-->
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="name" style="text-align:left; width:100%">Name</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter the name" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="phone" style="text-align:left; width:100%">Phone</label>
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Enter the phone" autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="email" style="text-align:left; width:100%">E-mail</label>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Enter the email" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="title" style="text-align:left; width:100%">Title</label>
                                    <input id="title" type="text" class="form-control" name="title" placeholder="Enter the Title" autofocus>
                                    @if ($errors->has('title'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="company" style="text-align:left; width:100%">Company</label>
                                    <input id="company" type="text" class="form-control" name="company" placeholder="Enter the company" autofocus>
                                    @if ($errors->has('company'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}" style="margin-bottom: 10px">
                                    <label for="bio" style="text-align:left; width:100%">Bio</label>
                                    <textarea id="bio" rows=15 class="form-control ckeditor" name="bio">
                                    </textarea>
                                    @if ($errors->has('bio'))
                                        <span class="help-block" style="text-align:left; width:100%; margin-bottom: 0">
                                            <strong>{{ $errors->first('bio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group role">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="student">Student</option>
                                        <option value="alumni">Alumni</option>
                                        <option value="faculty">Faculty</option>
                                    </select>
                                </div><!--//form-group-->
                                <div class="form-group picture">
                                    <label for="picture">Picture</label>
                                    <input id="picture" name="picture" type="file" class="form-control" value="">
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
