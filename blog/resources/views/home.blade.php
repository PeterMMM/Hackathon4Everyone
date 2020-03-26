<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Required meta tags -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


        <title>Home</title>
        <!-- Styles -->
        <style>
            .carousel-item {
              height: 65vh;
              min-height: 350px;
              background: no-repeat center center scroll;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="/">Hackathon4Everyone </a>
              <button class="btn btn-info btn-sm" id="profile" style="display: none;">
                <span id="userName"></span><i class="fas fa-user"></i>
              </button>            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
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

        <header>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active" style="background-image: url('{{ asset('img/cover-home3.jpg')  }}')">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4">Are you serious on Challenges!!</h3>
                  <p class="lead">Welcome to Challenges!!</p>
                </div>
              </div>
              <!-- Slide Two - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('{{ asset('img/cover-home2.jpg')  }}')">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4">Are you ready!</h3>
                  <p class="lead">Here is hackathon for you.</p>
                </div>
              </div>
              <!-- Slide Three - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('{{ asset('img/cover-home1.jpg')  }}')">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4">Let start now</h3>
                  <p class="lead">Here is problem for you..</p>
                  <a href="{{ url('events') }}">
                      <button class="btn btn-danger btn-md">START NOW</button>
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
        </header>

        <!-- Page Content -->
        <section class="py-5">
          <div class="container">
            <h1 class="font-weight-light">Let join the competition!</h1>
            <p class="lead">The creation of something new is not accomplished by the intellect, but by the play instinct arising from inner necessity. The creative mind plays with the object it <b>loves</b>.!</p>
            <div style="color: black;text-shadow: 1px 1px lightgray;">
                <b>Time <i class="fab fa-algolia" style="color: blue;"></i></b>
                <b>Skill <i class="fas fa-atom" style="color: red;"></i></b>
                <b>Hard work<i class="fas fa-laptop-code" style="color: green;"></i></b>
            </div>

          </div>
        </section>

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
            $('#profile').hide();
            $("#login").show(1000);
            $("#logout").hide();
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
