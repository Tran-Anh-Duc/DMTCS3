<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset("login/images/icons/favicon.ico")}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/bootstrap/css/bootstrap.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animate/animate.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/css-hamburgers/hamburgers.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animsition/css/animsition.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/select2/select2.min.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/vendor/daterangepicker/daterangepicker.css")}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset("login/css/util.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("login/css/main.css")}}">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
                @csrf
                <span class="login100-form-title p-b-43">
						Sign Up
					</span>

                <div class="wrap-input100" >
                    <input class="input100" type="text" name="name">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Name</span>
                    @error("name")
                    <p class="text text-danger" >{{$message}}</p>
                    @enderror
                </div>


                <div class="wrap-input100 " >
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    @error("email")
                    <p class="text text-danger" >{{$message}}</p>
                    @enderror
                </div>


                <div class="wrap-input100" >
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                    @error("password")
                    <p class="text text-danger" >{{$message}}</p>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Sign up now
                    </button>
                </div>


                <div class="text-center p-t-46 p-b-20">
                    <p class="text-inverse text-left"><a href="{{route("login.form")}}"><b style="font-weight: bolder">Back to website</b></a></p>
                </div>

            </form>
            <div class="login100-more" style="background-image: url('{{asset("login/images/bg-01.jpg")}}');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="{{asset("login/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/vendor/bootstrap/js/popper.js")}}"></script>
<script src="{{asset("login/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/vendor/daterangepicker/moment.min.js")}}"></script>
<script src="{{asset("login/vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
<script src="{{asset("login/js/main.js")}}"></script>

</body>
</html>
