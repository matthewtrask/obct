<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <title>OBCT | @yield('title')</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>

    <link href="{{url('/')}}/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

</head>
<body>
<!-- Facebook Script -->
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1158671784161005";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<div class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <a href="{{ url('/') }}"><h1>OBCT</h1></a>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li ><a href="{{ url('/about') }}">About Us</a></li>
                <li class="has-dropdown">
                    <a href="#">Studio</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('/classes') }}">Classes</a></li>
                        <li><a href="{{ url('/teachers') }}">Teachers</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/summer') }}">Summer</a></li>
                <li><a href="{{ url('/schools') }}">Schools</a></li>
                <li class="has-dropdown">
                    <a href="#">Shows</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('/currentshow') }}">Current Show</a></li>
                        <li><a href="{{ url('/auditions') }}">Auditions</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href='#'>Festival Theater Troupe</a>
                    <ul class="dropdown">
                        <li><a href="{{ url('/troupe') }}">OBCT National Theater Experience Travel Troupe</a></li>
                        <li><a href="{{ url('/jrtroupe') }}">JTF Troupe</a></li>
                    </ul>
                </li>
                <li><a href='{{ url('/contact') }}'>Contact</a></li>
            </ul>
        </section>
    </nav>
</div>
<div class="row" id="main">
    <div class="small-12 medium-9 columns">
        @yield('content')
    </div>
    <div class="small-12 medium-3 columns" id="sidebar">
        <div class="logo" style="margin-bottom: 10%">
            <img src="img/green-logo.png" alt="Off Broadway Logo">
        </div>
        <div class="panel">
            <h3>Current Show</h3><hr>
            @foreach($performances as $performance)
                <h4>{{$performance->title}}</h4>
                <img src="data:image/jpg;base64,{{$performance->show_image}}">
            @endforeach
        </div>
        <div class="panel">
            <h3>Contact</h3>
            <hr>
            <button class="button message expand"><a href="contact">Contact Us</a></button>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/offbroadwaydancetheater/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/offbroadwaydancetheater/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/offbroadwaydancetheater/?fref=ts">Off Broadway Children&#039;s Theatre</a></blockquote></div>
        <div class="fb-follow" data-href="https://www.facebook.com/offbroadwaydancetheater/?fref=ts" data-layout="standard" data-size="small" data-show-faces="true"></div>
    </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="small-12 columns"><hr />
                <p class="text-center">12315 Crabapple Rd Suite 122 - Alpharetta GA, 30004 <br />
                    <i class="fa fa-mobile"></i> 770-664-2410 <br />
                    <span id="footerEmail"><i class="fa fa-envelope-o"></i> <a href="mailto:offbroadway@msn.com">offbroadway@msn.com</a></span></p>
            </div>
            <div class="small-12 columns" id="footerSM">
                <ul class="text-center">
                    <li><a href="https://www.facebook.com/offbroadwaydancetheater"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                    <li><a href="https://twitter.com/offbroadwayga"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                    <li><a href="https://offbroadwaydance.wordpress.com/"><i class="fa fa-wordpress fa-3x"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCYE5UAeKu42oT4NNTOH6YMQ"><i class="fa fa-youtube-square fa-3x"></i></a></li>
                </ul>
            </div>
            <div class="small-12 columns">
                <p class="text-center" id="copy">&copy; <?php
                    $fromYear = 2000;
                    $thisYear = (int)date('Y');
                    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Off Broadway Children's Theatre.</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{url('/')}}/bower_components/foundation/js/foundation.min.js"></script>
<script src="{{url('/')}}/js/main.js"></script>
<script>
    $(document).foundation();
</script>

</body>
