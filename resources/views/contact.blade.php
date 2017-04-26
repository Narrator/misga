@extends('layouts.app')

@section('content')
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Contact</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Contact</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header>
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">
                            <h3 class="title">Get in touch</h3>
                            <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                            <form>
                                <div class="form-group name">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" placeholder="Enter your name">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input id="email" type="email" class="form-control" placeholder="Enter your email">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Enter your contact number">
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea id="message" class="form-control" rows="6" placeholder="Enter your message here..."></textarea>
                                </div><!--//form-group-->
                                <button type="submit" class="btn btn-theme">Send message</button>
                            </form>
                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Download Prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="https://spears.okstate.edu/mis-analytics/files/DSandAD_MA_Flier_16_v1.pdf"><i class="fa fa-download"></i>Download now</a>
                            </section><!--//widget-->

                            <section class="widget has-divider">
                                <h3 class="title">Postal Address</h3>
                                <p class="adr">
                                    <span class="adr-group">
                                        <span class="street-address">MIS Graduate Association</span><br>
                                        <span class="region">Spears school of Business</span><br>
                                        <span class="region">Oklahoma State University</span><br>
                                        <span class="region">Stillwater</span><br>
                                        <span class="postal-code">OK 74074</span><br>
                                        <span class="country-name">USA</span>
                                    </span>
                                </p>
                            </section><!--//widget-->

                            <section class="widget">
                                <h3 class="title">All Enquiries</h3>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 405 762 3594</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="mailto:misga@okstate.edu">misga@okstate.edu</a></p>
                            </section>
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div class="gmap-wrapper" id="map">
                                <!--//You need to embed your own google map below-->
                                <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3222.82377699894!2d-97.06938558513257!3d36.122150780093904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b10a3f226cc965%3A0x1ea4f7d95c5a928f!2sSpears+School+of+Business!5e0!3m2!1sen!2sus!4v1492732295309" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div><!--//gmap-wrapper-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper-->
        </div><!--//content-->
@endsection
