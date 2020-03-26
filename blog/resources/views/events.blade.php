<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Required meta tags -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <style type="text/css">
        @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

        html,body{
            background-image: url({{ asset('img/cover-events.jpg') }});
            background-size: cover;
            background-repeat: repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            }

        body {
            padding: 60px 0px;
            background-color: rgb(220, 220, 220);
        }

        
        .event-list {
            list-style: none;
            font-family: 'Lato', sans-serif;
            margin: 0px;
            padding: 0px;
        }
        .event-list > li {
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 0px 5px rgb(51, 51, 51);
            box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
            padding: 0px;
            margin: 0px 0px 20px;
        }
        .event-list > li > time {
            display: inline-block;
            width: 100%;
            color: rgb(255, 255, 255);
            background-color: rgb(197, 44, 102);
            padding: 5px;
            text-align: center;
            text-transform: uppercase;
        }
        .event-list > li:nth-child(even) > time {
            background-color: rgb(165, 82, 167);
        }
        .event-list > li > time > span {
            display: none;
        }
        .event-list > li > time > .day {
            display: block;
            font-size: 56pt;
            font-weight: 100;
            line-height: 1;
        }
        .event-list > li time > .month {
            display: block;
            font-size: 24pt;
            font-weight: 900;
            line-height: 1;
        }
        .event-list > li > img {
            width: 100%;
        }
        .event-list > li > .info {
            padding-top: 5px;
            text-align: center;
        }
        .event-list > li > .info > .title {
            font-size: 17pt;
            font-weight: 700;
            margin: 0px;
        }
        .event-list > li > .info > .desc {
            font-size: 13pt;
            font-weight: 300;
            margin: 0px;
        }
        .event-list > li > .info > ul,
        .event-list > li > .social > ul {
            display: table;
            list-style: none;
            margin: 10px 0px 0px;
            padding: 0px;
            width: 100%;
            text-align: center;
        }
        .event-list > li > .social > ul {
            margin: 0px;
        }
        .event-list > li > .info > ul > li,
        .event-list > li > .social > ul > li {
            display: table-cell;
            cursor: pointer;
            color: rgb(30, 30, 30);
            font-size: 11pt;
            font-weight: 300;
            padding: 3px 0px;
        }
        .event-list > li > .info > ul > li > a {
            display: block;
            width: 100%;
            color: rgb(30, 30, 30);
            text-decoration: none;
        } 
        .event-list > li > .social > ul > li {    
            padding: 0px;
        }
        .event-list > li > .social > ul > li > a {
            padding: 3px 0px;
        } 
        .event-list > li > .info > ul > li:hover,
        .event-list > li > .social > ul > li:hover {
            color: rgb(30, 30, 30);
            background-color: rgb(200, 200, 200);
        }
        .facebook a,
        .twitter a,
        .google-plus a {
            display: block;
            width: 100%;
            color: rgb(75, 110, 168) !important;
        }
        .twitter a {
            color: rgb(79, 213, 248) !important;
        }
        .google-plus a {
            color: rgb(221, 75, 57) !important;
        }
        .facebook:hover a {
            color: rgb(255, 255, 255) !important;
            background-color: rgb(75, 110, 168) !important;
        }
        .twitter:hover a {
            color: rgb(255, 255, 255) !important;
            background-color: rgb(79, 213, 248) !important;
        }
        .google-plus:hover a {
            color: rgb(255, 255, 255) !important;
            background-color: rgb(221, 75, 57) !important;
        }

        @media (min-width: 768px) {
            .event-list > li {
                position: relative;
                display: block;
                width: 100%;
                height: 120px;
                padding: 0px;
            }
            .event-list > li > time,
            .event-list > li > img  {
                display: inline-block;
            }
            .event-list > li > time,
            .event-list > li > img {
                width: 120px;
                float: left;
            }
            .event-list > li > .info {
                background-color: rgb(245, 245, 245);
                overflow: hidden;
            }
            .event-list > li > time,
            .event-list > li > img {
                width: 120px;
                height: 120px;
                padding: 0px;
                margin: 0px;
            }
            .event-list > li > .info {
                position: relative;
                height: 120px;
                text-align: left;
                padding-right: 40px;
            }   
            .event-list > li > .info > .title, 
            .event-list > li > .info > .desc {
                padding: 0px 10px;
            }
            .event-list > li > .info > ul {
                position: absolute;
                left: 0px;
                bottom: 0px;
            }
            .event-list > li > .social {
                position: absolute;
                top: 0px;
                right: 0px;
                display: block;
                width: 40px;
            }
            .event-list > li > .social > ul {
                border-left: 1px solid rgb(230, 230, 230);
            }
            .event-list > li > .social > ul > li {          
                display: block;
                padding: 0px;
            }
            .event-list > li > .social > ul > li > a {
                display: block;
                width: 40px;
                padding: 10px 0px 9px;
            }
        }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">Hackathon4Everyone</a>
            <button class="btn btn-info btn-sm" id="profile" style="display: none;">
                <span id="userName"></span><i class="fas fa-user"></i>
            </button>             
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/') }}">Home
                            <span class="sr-only">(current)</span>
                          </a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('events') }}">Events</a>
                    </li>
                </ul>

                <a class="nav-link" href="{{ url('login') }}">
                    <button class="btn btn-dafault btn-md" id="login" style="display: none;"> 
                        <i class="fas fa-sign-in-alt"></i>
                        Login/Register
                    </button>
                </a>
                <button class="btn btn-dafault btn-md" id="logout" style="display: none;" >
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>

            </div>
          </div>
        </nav>
        <div class="container" style="margin-top: 2%">
            <div class="row">
                <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                    <ul class="event-list">
                        <li class="event-items" style=" display: none;" >
                            <time datetime="2014-07-20">
                                <span class="day">4</span>
                                <span class="month">Jul</span>
                                <span class="year">2014</span>
                                <span class="time">ALL DAY</span>
                            </time>
                            <img alt="Independence Day" src="{{ asset('img/sm-pic2.jpg') }}" />
                            <div class="info">
                                <h2 class="title">Independence Day</h2>
                                <p class="desc">United States Holiday <br>
                                    <a href="/detail/" style="text-decoration: none;">
                                        View Detail
                                    </a>
                                </p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="event-items" style=" display: none;"  >
                            <time datetime="2014-07-20 0000">
                                <span class="day">8</span>
                                <span class="month">Jul</span>
                                <span class="year">2014</span>
                                <span class="time">12:00 AM</span>
                            </time> 
                            <img alt="Independence Day" src="{{ asset('img/sm-pic2.jpg') }}" />
                            <div class="info">
                                <h2 class="title">One Piece Unlimited World Red</h2>
                                <p class="desc">United States Holiday <br>
                                    <a href="/detail/" style="text-decoration: none;">
                                        View Detail
                                    </a>
                                </p>
                                <ul>
                                    <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
                                    <li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="event-items" style=" display: none;" >
                            <time datetime="2014-07-20 2000">
                                <span class="day">20</span>
                                <span class="month">Jan</span>
                                <span class="year">2014</span>
                                <span class="time">8:00 PM</span>
                            </time>
                            <img alt="My 24th Birthday!" src="{{ asset('img/sm-pic1.jpg') }}" />
                            <div class="info">
                                <h2 class="title">Mouse0270's 24th Birthday!</h2>
                                <p class="desc">United States Holiday <br>
                                    <a href="/detail/" style="text-decoration: none;">
                                        View Detail
                                    </a>
                                </p>
                                <ul>
                                    <li style="width:33%;">1 <span class="glyphicon glyphicon-ok"></span></li>
                                    <li style="width:34%;">3 <span class="fa fa-question"></span></li>
                                    <li style="width:33%;">103 <span class="fa fa-envelope"></span></li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="event-items" style=" display: none;" >
                            <time datetime="2014-07-31 1600">
                                <span class="day">31</span>
                                <span class="month">Jan</span>
                                <span class="year">2014</span>
                                <span class="time">4:00 PM</span>
                            </time>
                            <img alt="Disney Junior Live On Tour!" src="{{ asset('img/sm-pic1.jpg') }}" />
                            <div class="info">
                                <h2 class="title">Disney Junior Live On Tour!</h2>
                                <p class="desc">United States Holiday <br>
                                    <a href="/detail/" style="text-decoration: none;">
                                        View Detail
                                    </a>
                                </p>
                                <ul>
                                    <li style="width:33%;">$49.99 <span class="fa fa-male"></span></li>
                                    <li style="width:34%;">$29.99 <span class="fa fa-child"></span></li>
                                </ul>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                    <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                    <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cookie.min.js') }}"></script>

        <script type="text/javascript">
        $(function($) {
          function displayMessage(msg) {
            // $('#message').html(msg).css({color: 'green'});
            alert(msg);
          }

          $('#setSessionCookie').click(function() { 
            $.cookie('test', 'Hmmm, cookie');
            displayMessage("Cookie 'test' has been set.");
          });

          $('#setCookie').click(function() {
            $.cookie('test', 'Hmmm, cookie', { expires: 7 });
            displayMessage("Cookie 'test' has been set and will expire in 7 days.");
          });

          $('#getCookie').click(function() {
            displayMessage("The value of the cookie named 'test' is: " + $.cookie('test'));
          });

          $('#logout').click(function() {
            $.cookie('userlogintoken', null);
            $.cookie('username', null);
            $.cookie('userloginstatus', null);
            displayMessage("Cookie 'test' has been deleted.");
            $('#userName').html('');
            $("#login").show(1000);
            $("#logout").hide();
            $('#profile').hide();
          });

          $('#testCookiesEnabled').click(function() {
            $.cookie('testcookiesenabled', null);
            $.cookie('testcookiesenabled', 'enabled');
            if ($.cookie('testcookiesenabled')) {
              displayMessage("Cookie: "+ $.cookie('testcookiesenabled'));
            } else {
              displayMessage("Cookies disabled");
              $.cookie('testcookiesenabled', null);
            }
          });

        });

        console.log("logout u - "+ $.cookie('username'));
        console.log("logout to - "+ $.cookie('userlogintoken'));
        var userlogintoken = $.cookie('userlogintoken');
        var username = $.cookie('username');
        var userloginstatus = $.cookie('userloginstatus');
        // console.log('all value -'+ userlogintoken + "-" + username );
        console.log('userloginstatus '+userloginstatus );
        if(userloginstatus == 'true') {
            $("#logout").show(1000);
            $("#login").hide();
            $('#userName').html($.cookie('username'));
            $('#profile').show(1000);
            $( '.event-items' ).show(1000);
            
        } else {
            $("#login").show(1000);
            $("#logout").hide();
            $('#profile').hide();
            $( '.event-items' ).show(1000);
            
        }


        </script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </body>
</html>