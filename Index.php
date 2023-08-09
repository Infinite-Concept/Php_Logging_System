<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Logging system</title>

    <!-- Bootstrap -->
    <link href="./bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Styling -->
    <link rel="stylesheet" href="index.css">

<body>

    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>

    <!-- Navigation Bar -->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

        <div class="container-fluid">

            <div class="navbar-header">

                <a class="navbar-brand">Pulse Code</a>

                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle nagivation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#login_modal" data-toggle="modal">Login</a></li>
                    <li><a href="" data-target="#signup_modal" data-toggle="modal">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Login Form -->
    <form action="" method="post" id="loginform">

        <div class="modal" id="login_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Login:
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Login message error -->
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                            <input type="email" placeholder="Enter your Email" name="loginemail" maxlength="50" class="form-control" id="loginemail">
                        </div>

                        <div class="form-group">
                            <label for="loginpassword" class="sr-only">Password:</label>
                            <input type="password" placeholder="Choose a Password" name="loginpassword" maxlength="30" class="form-control" id="loginpassword">
                        </div>

                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="rememberme" id="rememberme">
                                Remember me
                            </label>

                            <a data-target="#forgot_modal" class="pull-right" style="cursor: pointer;" data-dismiss="modal" data-toggle="modal">Forgot Password?</a>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="login" class="btn green" value="Login">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <button class="btn btn-default pull-left" type="button" data-dismiss="modal" data-target="#signup_modal" data-toggle="modal">
                            Register
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Sign Up Form -->

    <form action="" method="post" id="signupform">

        <div class="modal" id="signup_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Sign up today and start using our online note app!
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Sign Up message error -->
                        <div id="signupmessage"></div>

                        <div class="form-group">
                            <label for="username" class="sr-only">Username:</label>
                            <input type="text" placeholder="Enter your Username" name="username" maxlength="30" class="form-control" id="username">
                        </div>

                        <div class="form-group">
                            <label for="email" class="sr-only">Email:</label>
                            <input type="email" placeholder="Enter your Email" name="email" maxlength="50" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label for="password" class="sr-only">Password:</label>
                            <input type="password" placeholder="Choose a Password" name="password" maxlength="30" class="form-control" id="password">
                        </div>

                        <div class="form-group">
                            <label for="password2" class="sr-only">Comfirm Password:</label>
                            <input type="password" placeholder="Comfirm your Password" name="password2" maxlength="30" class="form-control" id="password2">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="signup" class="btn green" value="Sign up">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Forgot password Form -->

    <form action="" method="post" id="forgotform">

        <div class="modal" id="forgot_modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Forgot Password? Enter your email address:
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Forgot message error -->
                        <div id="Forgotpasswordmsg"></div>

                        <div class="form-group">
                            <label for="forgotemail" class="sr-only">Email:</label>
                            <input type="email" placeholder="Enter your Email" name="forgotemail" maxlength="50" class="form-control" id="forgotemail">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="Forgot-pwd" class="btn green" value="Submit">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <button class="btn btn-default pull-left" type="button" data-dismiss="modal" data-target="#signup_modal" data-toggle="modal">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Footer -->

    <!-- <div class="footer">
        <div class="container">
            <p>Ifenowo Copyright &copy; 2022-<?php $today = date("Y");
                                                echo $today ?>.</p>
        </div>
    </div> -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

    <!-- javascript file link -->
    <script src="index.js"></script>
</body>

</html>