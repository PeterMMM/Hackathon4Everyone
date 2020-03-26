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
            background-image: url('{{ asset('img/cover-event-detail.jpg')  }}');
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

        #cover-img {
            
            height: auto;
        }
        .over-text-cover-img {
            margin-top: 15%;
        }

        .navbar-nav > li {
          float: left;
          position: relative;
        }
        .navbar-light .navbar-nav .active a::after {
          border-bottom: 2px solid #5bc0eb;
          bottom: -10px;
          content: " ";
          left: 0;
          position: relative;
          right: 0;
        }


        /*mobile view*/
        @media only screen and (max-width: 600px) {
            .over-text-cover-img {
                display: none;
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
            <!-- http://getwallpapers.com/wallpaper/full/3/7/5/1521426-full-size-geometry-wallpapers-1920x1080-for-android-50.jpg -->
            <!-- <div class="card mb-10">
              <img class="card-img-top" src="http://getwallpapers.com/wallpaper/full/3/7/5/1521426-full-size-geometry-wallpapers-1920x1080-for-android-50.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div> -->

            <div class="card bg-white text-white">
              <img class="card-img" src="{{ asset('img/cover-com.jpg') }}" alt="Card image" id="cover-img">
              <div class="card-img-overlay">
                <div class="over-text-cover-img">
                    <h5 class="card-title" >Challanges for you</h5>
                    <p class="card-text">Identify videos with facial or voice manipulations</p>
                    <p class="card-text"><i class="fas fa-laptop-code"></i> &nbsp; Be ready and take this Break Down Challenge 2020 teams 6 days to go</p>
                </div>
              </div>
              <div class="card-body">

                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                </div>

              </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cookie.min.js') }}"></script>

        <script type="text/javascript">
        // window.onload = function() {
        //     if (window.jQuery) {  
        //         // jQuery is loaded  
        //         alert("Yeah!");
        //     } else {
        //         // jQuery is not loaded
        //         alert("Doesn't Work");
        //     }
        // }
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
            $('#profile').show();
        } else {
            $("#login").show(1000);
            $("#logout").hide();
            $('#profile').hide();
        }
        </script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </body>
</html>