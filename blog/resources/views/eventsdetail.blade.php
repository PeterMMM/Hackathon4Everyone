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


        #container{
            margin-top: 2%;background-color: #FFF;
            border-radius: 5px;
            padding: 5px;
            box-shadow: 0.2px 0.2px gray;
        }

        #join-now {
            float: right;
        }

        #main-title {
            display: none;
            position: absolute;
            right: 2em;
            font-size: 30px;

            /*for effect*/
            color: #e0dfdc;
            /*background: #556677;*/
            letter-spacing: .1em;
            text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0,0,0,0.9);
            color: #e0dfdc;
            /*background: #556677;*/
            /*end for effect*/
        }
        /*mobile view*/
        @media only screen and (max-width: 600px) {
            .over-text-cover-img {
                display: none;
            }

            #main-title {
                /*display: none;*/
                position: absolute;
                left: 2em;
                font-size: 13px;

                /*for effect*/
                color: #e0dfdc;
                /*background: #556677;*/
                letter-spacing: .1em;
                text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0,0,0,0.9);
                color: #e0dfdc;
                /*background: #556677;*/
                /*end for effect*/
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
        <div class="container" id="container">
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
                <div id="main-title">
                  Break Down Challage <br>
                  $1000 Price
                </div>
                <div class="over-text-cover-img">
                    <h5 class="card-title" >Challanges for you</h5>
                    <p class="card-text">Identify videos with facial or voice manipulations</p>
                    <p class="card-text"><i class="fas fa-laptop-code"></i> &nbsp; Be ready and take this Break Down Challenge 2020 teams 6 days to go</p>
                </div>

                      <button class="btn btn-lg btn-info" id="join-now">Join Now</button>
              </div>
            </div><br>
            <div>
                 <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Discussion</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rules</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                   <div class="container-fluid">
                        <div class="row">
                            <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">
                                <ul class="nav flex-column flex-nowrap overflow-hidden">
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i></i> <span class="d-none d-sm-inline">Description</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"><i class="fa fa-list"></i> <span class="d-none d-sm-inline">Timeline</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-truncate" href="#"><i class="fa fa-list"></i> <span class="d-none d-sm-inline">Prize</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Data</span>    &nbsp;<i class="fas fa-arrow-down"></i></a>
                                        <div class="collapse" id="submenu1" aria-expanded="false">
                                            <ul class="flex-column pl-2 nav">
                                                <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                                                <li class="nav-item">
                                                    <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                                    <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                                        <ul class="flex-column nav pl-4">
                                                            <li class="nav-item">
                                                                <a class="nav-link p-1" href="#">
                                                                    <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link p-1" href="#">
                                                                    <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link p-1" href="#">
                                                                    <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link p-1" href="#">
                                                                    <i class="fa fa-fw fa-compass"></i> Areas </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Requirement</span></a></li>
                                    <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Leaderboard</span></a></li>
                                    <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Getting Start</span></a></li>
                                    <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Feedback</span></a></li>
                                </ul>
                            </div>
                            <div class="col pt-2">
                                <h2>
                                    <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Content </h2>
                                <h6 class="hidden-sm-down">Shrink page width to see sidebar collapse</h6>
                                <p>Codeply editor wolf moon retro jean shorts chambray sustainable roof party. Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before they sold out gastropub taxidermy Vice.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    Nisi voluptate aliqua irure occaecat elit ea eu consequat est labore veniam ea ea proident magna ea fugiat exercitation aliqua do pariatur mollit aliqua pariatur occaecat adipisicing labore labore eu sunt ut amet dolore sunt esse cupidatat reprehenderit proident consectetur esse ea consequat dolor commodo dolore laborum occaecat cupidatat enim elit aute deserunt occaecat pariatur laborum minim nulla sunt ut dolor officia excepteur ad eiusmod ut qui cillum minim cupidatat veniam pariatur officia aliquip ea nostrud dolor aute laborum ad dolor commodo laborum anim consectetur adipisicing ullamco cupidatat nulla excepteur reprehenderit cupidatat in eiusmod id labore fugiat id duis esse ullamco amet consequat commodo in labore mollit eiusmod sint in officia sint sed irure voluptate excepteur duis ea laboris et laboris irure mollit pariatur dolore eiusmod ut consequat commodo aliquip non minim deserunt est laborum cupidatat id cillum sed nisi occaecat ut sed pariatur ut non ad id voluptate eu irure amet officia eu magna eiusmod dolor quis et eu dolore in id sed esse qui nulla magna reprehenderit sit irure dolor do excepteur aliqua nulla incididunt sunt dolor qui ut dolore mollit nulla irure laborum occaecat eiusmod labore duis et commodo sunt dolore sed incididunt aliquip excepteur consequat ex aute qui magna occaecat culpa aute dolor minim occaecat ea consequat dolor.
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    Lorem ipsum enim anim sed enim officia sit in dolor est ullamco laborum occaecat dolor nostrud aute voluptate incididunt velit aliquip consectetur ad cupidatat nulla ut adipisicing ullamco dolor et in reprehenderit est fugiat ut id consectetur proident velit cillum cupidatat commodo cillum laboris magna duis aliquip qui laborum consectetur exercitation ad commodo dolor proident irure ullamco laborum fugiat labore laborum cupidatat ullamco sint consectetur in dolore labore anim dolor adipisicing sed anim aliquip aute anim eiusmod dolor laboris dolore consectetur enim velit et minim quis nulla officia ullamco in duis in reprehenderit eiusmod aute est proident veniam sed dolor in esse dolor tempor ea exercitation in culpa eu laborum ea enim reprehenderit velit velit eu proident in cillum sunt quis qui excepteur ut pariatur amet deserunt aute dolore aliquip ut deserunt ea sed consequat duis nisi est nisi in deserunt in laboris mollit nisi tempor exercitation reprehenderit aute ad laboris eiusmod elit do aliqua in excepteur excepteur adipisicing sed irure duis mollit laboris esse ut reprehenderit in nisi quis incididunt pariatur dolore irure quis ut adipisicing ut culpa in exercitation qui ut consequat ex ex anim ad in occaecat aute fugiat dolor quis laboris ullamco culpa proident dolor laborum dolor laboris culpa pariatur occaecat ut in veniam eu officia tempor ut aliquip dolor ad ex laboris nostrud consequat.
                  </div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cookie.min.js') }}"></script>

        <script type="text/javascript">


        .nav-link[data-toggle].collapsed:before {
            content: " ▾";
        }
        .nav-link[data-toggle]:not(.collapsed):before {
            content: " ▴";
        }
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
            $('#main-title').show(1000);
        } else {
            $("#login").show(1000);
            $("#logout").hide();
            $('#profile').hide();
            $('#main-title').show(1000);
        }

        </script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    </body>
</html>