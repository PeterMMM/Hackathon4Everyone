<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Required meta tags -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <title>Login Page</title>
       <!--Made with love by Mutiullah Samim -->
       
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <style type="text/css">
            /* Made with love by Mutiullah Samim*/

            @import url('https://fonts.googleapis.com/css?family=Numans');

            html,body{
            background-image: url('http://getwallpapers.com/wallpaper/full/9/2/b/36940.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
            }

            .container{
            height: 100%;
            align-content: center;
            }

            .card{
            height: auto;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
            }

            .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
            }

            .social_icon span:hover{
            color: white;
            cursor: pointer;
            }

            .card-header h3{
            color: white;
            }

            .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
            }

            .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
            }

            input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

            }

            .remember{
            color: white;
            }

            .remember input
            {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
            }

            .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
            }

            .login_btn:hover{
            color: black;
            background-color: white;
            }

            .links{
            color: white;
            }

            .links a{
            margin-left: 4px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form id="my-form">
                        {{ csrf_field() }}
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <!-- <div class="row align-items-center remember">
                            <input type="checkbox" name="rememberme" value="true">Remember Me
                        </div> -->
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="{{ url('register') }}">Register</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                    <a href="{{ url('/') }}">Home</a>
                </div>
            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>        
    <script type="text/javascript">
        var loginStatus = $.cookie('userloginstatus');
        console.log('login Status' + loginStatus);
        if (loginStatus == 'true') {
            window.location.href = '/';
        }
        // var json = '{"success": true,"data": {"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTc5MWZhMzBmZDY5YTMxMGUwNjM5OWMyMmJiMzFkOTkxY2JlMzgyOWViM2VhMTQ4ZDVlY2I0ZGQ5Mjg2ZmQyY2IwMTM4YjQxMzZmMTRhMjgiLCJpYXQiOjE1ODQzNDcwOTMsIm5iZiI6MTU4NDM0NzA5MywiZXhwIjoxNjE1ODgzMDkzLCJzdWIiOiIyNCIsInNjb3BlcyI6W119.4zMSlUI9-mK9so1qppO9QizF2tUy7wipXOCS6winuiW6t8LQMf9jbYyfWsh0cFPsnolWR7Jpkz7Gll5_gejT9qr-0CyHV1xyubiYILvbLOYR2FYrw43b5gwlQTxSZs_rxAxhPi5IRKo4GsOLgmj8u13l7Z7HcZk5zgFdPWKvcJ_WpEBf2ZEqzPZyBEOn6rVarAvD2ltKwYbWbGggxrSSKegRxwz_uwOJKhrLARzCyVtZAn7LA7wqDFu-iakYkv_DKIaTHn7gaXNuFSKQ_tJ_jVByC0OCvXIjAvKLjE0Gth6oXMPtfjkD67UMUpS2YrhBcq6Vj5ZOyTKqAHYy3ZqII7Zd00VdGo-lS_-EGUu9UitfFgapChzpfHZqJfoidXPDoYAYytDfITX6TL7GDrZ6nNzoOqO2j4v2UioukKZCkpZkDfYhN4JvwDuYMLGXujjPTEcehAGLZpZcSy9elcnj1vBNcYsIaGXQ_FJPwredJzWxEHfNvCBfGLcyubuyPMCvDKlJDLHAMIT8gabm0UeXWJ7dP6rA5v3gdvwfv9bepGnS4QUJG1cpXRmU2EgQQXlBhTOMSrRhSlh88xVbV7SSeeV_h78a5qndpzFL4XLhjlLK6FKbl-hFH_y8WbviV4TnQopZsjWHdcY9lAwroIFkZWX4H0B5JdPe2rhfjxYX2-c","name": "qa"},"message": "User register successfully."}';
        (function ($) {
            function processForm(e) {
                $.ajax({
                    url:'http://localhost:8000/api/login',
                    dataType: 'text',
                    type: 'post',
                    contentType: 'application/x-www-form-urlencoded',
                    data: $(this).serialize(),
                    success: function(responce, textStatus, jQxhr) {
                        var obj = JSON.parse(responce);
                        alert(obj.message);
                        console.log("Register status :"+ obj.message);
                        console.log("Token - "+ obj.data.token);
                        if (obj !== null) {
                            var date = new Date();
                            var m = 5;
                            date.setTime(date.getTime() + (m * 60 * 1000));
                            $.cookie("userloginstatus", 'true', { expires: date });
                            $.cookie("userlogintoken", obj.data.token, { expires: date });
                            // $.cookie("userLoginToken",obj.data.token);
                            $.cookie("username",obj.data.name, { expires: date });
                            window.location.href = '/';
                        }

                        console.log("User Info : "+ $.cookie("userlogintoken")+", name : "+$.cookie("username"));
                    },
                    error: function (jqXhr,textStatus, errorThrown) {
                        console.error("Register fail error : " +errorThrown);
                    }
                });
                e.preventDefault();
            }
            $('#my-form').submit(processForm);
        })(jQuery);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>