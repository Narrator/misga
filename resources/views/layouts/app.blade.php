<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>MIS Graduate Association | Oklahoma State University</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="/assets/plugins/pretty-photo/css/prettyPhoto.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
</head>

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** -->
        <header class="header">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        @if (Auth::user() && Auth::user()->isAdmin())
                            <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="/new-event" ><i class="fa fa-calendar"></i></a></li>
                            <li><a href="/new-news" ><i class="fa fa-newspaper-o"></i></a></li>
                            <li><a href="/new-job" ><i class="fa fa-money"></i></a></li>
                            <li><a href="/new-course" ><i class="fa fa-book"></i></a></li>                            
                            <li class="row-end"><a href="/new-user" ><i class="fa fa-user-plus"></i></a></li>                            
                        @elseif (Auth::user())
                            <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="/new-event" ><i class="fa fa-calendar"></i></a></li>
                            <li><a href="/new-news" ><i class="fa fa-newspaper-o"></i></a></li>
                            <li><a href="/new-job" ><i class="fa fa-money"></i></a></li>
                            <li class="row-end"><a href="/new-course" ><i class="fa fa-book"></i></a></li>
                        @else
                            <li class="row-end"><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        @endif
                    </ul><!--//social-icons-->
                    <form class="pull-right search-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form>
                </div>
            </div><!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="/"><img id="logo" src="/assets/images/logo.png" alt="Logo"></a>
                </h1><!--//logo-->
                <div class="info col-md-8 col-sm-8">
                    <ul class="menu-top navbar-right hidden-xs">
                        <li class="divider"><a href="/">Home</a></li>
                        <li class="divider"><a href="/faq">FAQ</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul><!--//menu-top-->
                    <br />
                    <div class="contact pull-right">
                        <p class="phone"><i class="fa fa-phone"></i>Call us today 405 762 3594</p>
                        <p class="email"><i class="fa fa-envelope"></i><a href="mailto:misga@okstate.edu">misga@okstate.edu</a></p>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->

        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{{ (Request::is('/') ? 'active' : '') }}} nav-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="{{{ (Request::is('news') ? 'active' : '') }}} nav-item">
                            <a  href="/news">News</a>
                        </li>
                        <li class="{{{ (Request::is('events') ? 'active' : '') }}} nav-item">
                            <a href="/events">Events</a>
                        </li>
                        <li class="{{{ (Request::is('courses') ? 'active' : '') }}} nav-item">
                            <a href="/courses">Courses</a>
                        </li>
                        <li class="{{{ (Request::is('jobs') ? 'active' : '') }}} nav-item">
                            <a href="/jobs">Jobs</a>
                        </li>
                        <li class="{{{ (Request::is('alumni') ? 'active' : '') }}} nav-item">
                            <a href="/alumni">Alumni</a>
                        </li>
                        <li class="{{{ (Request::is('faculty') ? 'active' : '') }}} nav-item">
                            <a href="/faculty">Faculty</a>
                        </li>
                        <li class="{{{ (Request::is('students') ? 'active' : '') }}} nav-item">
                            <a href="/students">Students</a>
                        </li>
                        <li class="{{{ (Request::is('team') ? 'active' : '') }}} nav-item">
                            <a href="/team">Team</a>
                        </li>
                        <li class="{{{ (Request::is('about') ? 'active' : '') }}} nav-item">
                            <a href="/about">About</a>
                        </li>
                        <li class="{{{ (Request::is('faq') ? 'active' : '') }}} nav-item">
                            <a href="/faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact">Contact</a>
                        </li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->

        <!-- ******CONTENT****** -->
        @yield('content')
    </div><!--//wrapper-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-md-3 col-sm-4 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="/about"><i class="fa fa-caret-right"></i>About us</a></li>
                            <li><a href="/contact"><i class="fa fa-caret-right"></i>Contact us</a></li>
                            <li><a href="/team"><i class="fa fa-caret-right"></i>Team</a></li>
                            <li><a href="/faq"><i class="fa fa-caret-right"></i>FAQ</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-6 col-sm-8 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        <form class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="submit" value="Subscribe">
                        </form>

                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-md-3 col-sm-12 contact">
                    <div class="footer-col-inner">
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-md-12 col-sm-4">
                                <i class="fa fa-map-marker pull-left"></i>
                                <span class="adr-group pull-left">
                                    <span class="street-address">MIS Graduate Association</span><br>
                                    <span class="region">Spears school of Business</span><br>
                                    <span class="region">Oklahoma State University</span><br>
                                    <span class="region">Stillwater</span><br>
                                    <span class="postal-code">OK 74074</span><br>
                                    <span class="country-name">USA</span>
                                </span>
                            </p>
                            <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>405 762 3594</p>
                            <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="mailto:misga@okstate.edu">misga@okstate.edu</a></p>
                        </div>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                </div>
            </div>
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2017 MIS Graduate Student Association | <a href="http://okstate.edu">Oklahoma State University</a></small>
                    <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                        <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fa fa-skype"></i></a></li>
                        <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="/assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
    <script>
    $( function() {
        $( ".datepicker" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });
        $('.timepicker').timepicker({ 'timeFormat': 'H:i' });
    });
    </script>
</body>
</html>

