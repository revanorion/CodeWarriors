<?php
session_start();
 // Includes Login Script
if(isset($_SESSION['login_user'])){
    header("location: ../StudentApplication/Index.php");
}

?>
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Application Portal</title>
        <link rel="stylesheet" type="text/css" href="../../Content/ResidencyBundle.css">
        <script src="../../Scripts/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="../../Scripts/ResidencyBundle.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- BEGINNING Leave this in every page -->
        <header class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <a href="/" class="header-logo" title="Florida Atlantic University"> <img id="fau-header" class="img-responsive pull-left" src="../../Content/Images/fau-home-logo.png" /> </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default  navbar-custom">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> Menu<i></i> </button> <a class="navbar-brand" id="navtext" href="#page-top">FAU</a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#home"></a>
                        </li>
                        <li class="page-scroll"> <a href="http://fauresidencyapp.byethost9.com/">Home</a> </li>
                        <li class="page-scroll"> <a href="http://fauresidencyapp.byethost9.com/StudentApplication/Index.php">Application</a> </li>
                        <li class="page-scroll">
                            <button type="button" class="btn btn-lg btn-default dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item">
                                    <?php
                                echo $_SESSION["login_user_email"];
                                ?>
                                </a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="../../Controllers/logout.php">Logout</a> </li>
                    </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
        </nav>
        <!-- END Leave this in every Page -->
        <div class="container-fluid body-content">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <h2>FAU Application Portal</h2> </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center"> Please enter your FAU Email to login and get started on your application</div>
            </div>
            <form id="loginForm" class="form-group" action="../../Controllers/portal.php">
                <div class="row">
                    </br>
                    </br>
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="email">Email:</label>
                        <div class="input-group"> <span class="input-group-addon" id="basic-addon1">E</span>
                            <input class="form-control" name="email" id="email" type="email" placeholder="Enter Email" aria-describedby="basic-addon1"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="Z-number">Password:</label>
                        <div class="input-group"> <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                            <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password" aria-describedby="basic-addon1"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="btn-group ">
                            <button id="login" type="button" class="btn btn-success btn-lg">Login</button>
                            <button id="sign-up" type="button" class="btn btn-primary btn-lg">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="portal.js" type="text/javascript"></script>
    </body>

    </html>
