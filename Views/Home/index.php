<!DOCTYPE html>

<head>
    <title>Getting Started</title>
    <link rel="stylesheet" type="text/css" href="../../Content/ResidencyBundle.css">
    <script src="../../Scripts/jquery-2.2.3.min.js" type="text/javascript"></script>
    <script src="../../Scripts/ResidencyBundle.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
                    <li class="page-scroll"> <a href="#">Home</a> </li>
                    <li class="page-scroll"> <a href="#">Application</a> </li>
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
            <div class="col-md-4 col-md-4-offset">
                <a href="../StudentApplication/Index.php">
                    <button id="studentNewBtn" type="button" class="btn btn-md btn-success center-block">Start an Application</button>
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 text-center"> Please be sure to read the Getting Started guide below before starting an application </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>FAU Residency Affidavit </h3></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"> Welcome to the FAUs online residency application. We make it easier and more convenient for you as a student to fill out your residency affidavit. Simply check out the Getting Started guide below to begin the process! </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Let's Get Started </h2></div>
        </div>
        <div id="step1" class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"> Step 1. Review what's required</div>
                    <div class="panel-body panel-body-background">
                        <p> Take a look at the <a href="https://www.fau.edu/registrar/residency/basic-requirements.php">Florida Residency Guidelines </a> prior to beginning the form itself. Most questions will be answered by the guidelines above so be sure to review the basic requirements to qualify as a Florida Resident.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="step2" class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"> Step 2. Obtain necessary documents </div>
                    <div class="panel-body panel-body-background">
                        <p>If you plan to apply for in-state tuition you must provide valid documents which prove your residency claim.</p>
                        <p>Claimant must provide one of the following</p>
                        <p>
                            <ul>
                                <li> Florida Voter's registration card</li>
                                <li>Florida Driver's license</li>
                                <li>Florida State identification card</li>
                                <li>Florida Vehicle registration</li>
                                <li>Proof of permanent residence for 12 consecutive months prior to students enrollment</li>
                                <li>Proof of homestead exemption in Florida</li>
                                <li>Official transcripts from a Florida high school for 2 or more years</li>
                                <li>Proof of permanent full-time employment (30+ hrs. a week) for a 12 month period</li>
                            </ul>
                        </p>
                        <p> Claimant may provide one or more document to demonstrate residency in Florida </p>
                        <p>
                            <ul>
                                <li>Declaration of domicile in Florida in accordance with s. 222.17, Florida Statutes</li>
                                <li>Florida professional or occupation license</li>
                                <li>Florida incorporation</li>
                                <li>Document evidencing family ties in Florida</li>
                                <li>Proof of membership based in a Florida-based charitable or professional organization</li>
                                <li>Any other documentation that supports your request for resident status (utility bills, lease agreement, etc...)</li>
                            </ul>
                        </p>
                        <p>Once you've obtained the required documentation you are able to send them electronically via scanning them into your computer then uploading in the form itself. If you don't have a scanner any local UPS, FedEx Kinkos, Office Depot, library and many other places have scanners available if not for free then for a very reasonable price.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="step3" class="row">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Step 3. Fill out the form</div>
                        <div class="panel-body panel-body-background">
                            <p>By now you've done the most tedious process of making sure you know what you need and getting what you need. Now it's time to finally fill out the form. Click [here] to get started or go to the top of the page and click on the Start new Application button. Fill in the necessary fields and ensure that the required documents you select to use are the same ones you are uploading to the form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../Scripts/Residency.js"></script>

</html>
