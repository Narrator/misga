@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">About</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">About</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row page-row">
                        <article class="welcome col-md-8 col-sm-7">
                            <h3 class="title">Welcome to MIS Graduate Association</h3>
                            <p><img class="img-responsive" width="750" src="http://msisstudent.okstate.edu/images/1.jpg" alt="" /></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis urna lectus, a euismod metus facilisis sed. Aliquam tristique sapien et tincidunt semper. Mauris ornare, turpis ac molestie molestie, erat nisi placerat ipsum, sit amet imperdiet ipsum lacus eu orci. Suspendisse euismod mollis nibh eu rhoncus. </p>
                            <ul class="custom-list-style">
                                <li><i class="fa fa-check"></i>Lorem ipsum dolor sit ame</li>
                                <li><i class="fa fa-check"></i>Curabitur elit elit</li>
                                <li><i class="fa fa-check"></i>Nunc tincidunt ipsum a risus</li>
                                <li><i class="fa fa-check"></i>Integer vitae nisi a odio</li>
                                <li><i class="fa fa-check"></i>Suspendisse bibendum tempor</li>
                            </ul>

                            <blockquote class="custom-quote">
                                <p><i class="fa fa-quote-left"></i>Viverra magna pellentesque in magnis gravida sit augue felis vehicula vestibulum semper penatibus justo ornare semper Gravida felis platea arcu mus non. Montes at posuere. Natoque.</p>
                                <p class="people"><span class="name">Adam Windsor</span><br><span class="title">Principle, College Green Online</span></p>
                            </blockquote>
                            <p>
                            Morbi semper. Hac euismod bibendum odio sed sociosqu primis magna suscipit facilisi litora viverra eget nibh praesent vehicula luctus Integer nostra ac duis metus orci.

    Vehicula praesent dolor quam montes fames risus interdum. Tortor lacinia sem aenean sit tellus montes velit ultricies leo eget felis mollis quam. Non odio leo tempus condimentum. Neque. Potenti ornare sapien diam hymenaeos conubia ac. Euismod, venenatis Vulputate sodales morbi aliquet sollicitudin.
                            </p>
                        </article><!--//page-content-->
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
