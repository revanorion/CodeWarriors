<?php
session_start();
 // Includes Login Script
if(!isset($_SESSION['login_user'])){
    header("location: ../Portal/index.php");
}
?>
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Residency Form</title>
        <link rel="icon" href="../../Content/images/FAU_Favicon 1.png">
        <link rel="stylesheet" type="text/css" href="../../Content/ResidencyBundle.css">
        <link rel="stylesheet" href="../../Content/Steps/jquery.steps.css">
        <link rel="stylesheet" href="../../Content/Steps/main.css">
        <link rel="stylesheet" href="../../Content/Steps/normalize.css">
        <script src="../../Scripts/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="../../Scripts/ResidencyBundle.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>
        <link rel="stylesheet" type="text/css" href="../../Content/residency-custom-bootstrap.css">
        <!-- The import below does not seem to work 100% unless you include
        the integrity and crossorigin tag -->
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <style type="text/css">
            .has-error .form-control {
                border-color: #a94442 !important;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            }

            .has-success .form-control {
                border-color: #3c763d !important;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            }

        </style>

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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span>Menu<i></i> </button> <a class="navbar-brand" id="navtext" href="#page-top">FAU</a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#home"></a>
                        </li>
                        <li class="page-scroll"> <a href="#">Home</a> </li>
                        <li class="page-scroll"> <a href="#">Application</a> </li>
                        <li class="page-scroll"> <a href="#">Login</a> </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- END Leave this in every Page -->
        <div class="container-fluid body-content">
            <!-- OUR FORM -->
            <h3 style="font-family = sans-seriuf">RESIDENCY FORM</h3>
            <form id="studentForm">
                <h4><strong>Initial</strong></h4>
                <section>
                    <h3><strong>Are you a Florida Resident?</strong></h3>

                    <p>This is the beginning of the forms for the student applicants. This web application interface was designed to make it more convenient to fill out the residency apllication and help with checking the status of the application. Please begin by stating if you are a Florida Resident or a Non-Florida Resident.</p>
                    <!--                    <form id="radioSelect">-->
                    <div class="radio">
                        <label>
                            <input type="radio" name="ResidentRadios" value="" checked> Florida Resident
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ResidentRadios" value="non"> Non-Florida Resident
                        </label>
                    </div>

                    <!--                    </form>-->
                </section>
                <h4><strong>Provision</strong></h4>
                <section>
                    <h3><strong>FLORIDA RESIDENCY DECLARATION FOR TUITION PURPOSES</strong></h3>
                    <div>
                        <p>A Florida "resident for tuition purposes" is a person who has, or a dependent person whose parent or legal guardian has, established and maintained legal residency in Florida for at least twelve (12) consecutive months preceding the first day of classes of the term for which Florida residency is sought.</p>
                    </div>
                    <div style="margin-left: 40px">
                        <ul>
                            <li>Residence in Florida must be a bona fide domicile rather than for the purpose of maintaining a residence incident to enrollment at an institution of higher education. </li>
                            <li>To qualify as a Florida resident for tuition purposes, you must be a U.S. citizen, a foreign national in a nonimmigrant visa classification that grants you the legal ability to establish a bona fide domicile in the United States, a permanent resident alien, parolee, asylee, Cuban-Haitian entrant, legal alien granted indefinite stay, or other qualified alien as defined under federal law. Other persons not meeting the twelve-month legal residence requirements may be classified as Florida residents for tuition purposes only if they fall within one of the limited special categories authorized by the Florida Legislature pursuant to section 1009.21, Florida Statutes (see "Qualification by Exception"). All other persons are ineligible for classification as a Florida "resident for tuition purposes". </li>
                            <li>Living in or attending school in Florida will not, in itself, establish legal residence. Students who depend upon out-of-state parents for support are presumed to be legal residents of the same state as their parents.</li>
                            <li>Residency for tuition purposes requires the establishment of legal ties to the state of Florida. A student must verify that the student has broken ties to other states if the student or, in the case of a dependent student, his or her parent has moved from another state. </li>
                        </ul>
                    </div>
                </section>
                <h4><strong>Applicant</strong></h4>
                <section>
                    <h3><strong>Fill in the blank below:</strong></h3>

                    <div class="row">
                        <div class="row">
                            <div class="form-group c1 required col-md-3 col-sm-3" data-cid="c1">
                                <label class="control-label required-field" for="c1">First Name</label>
                                <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user" for="c1"></i> </span>
                                    <input type="text" class="form-control" id="c1" name="c1" value="" data-rule-required="true" /> </div>
                            </div>
                            <div class="form-group c49 required col-md-3" data-cid="c49">
                                <label class="control-label required-field" for="c49">Last Name</label>
                                <input type="text" class="form-control" id="c49" name="c49" value="" data-rule-required="true" /> </div>
                            <div class="form-group c26 col-md-3" data-cid="c26">
                                <label class="control-label" for="c26">Middle Name</label>
                                <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-user"></i> </span>
                                    <input type="text" class="form-control" id="c26" name="c26" value="" /> </div>
                            </div>
                            <div class="form-group c83 col-md-2" data-cid="c83">
                                <label class="control-label" for="c83">Suffix</label>
                                <select class="form-control" id="c83" name="c83">
                                    <option value="">- Select -</option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group c107 required col-md-3" data-cid="c107">
                                <label class="control-label required-field" for="c107">Date of Birth</label>
                                <div class="input-group date">
                                    <input type="text" class="form-control datepicker" id="c107" name="c107" value="" data-rule-required="true" data-datepicker-format="mm/dd/yyyy" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                            </div>
                            <div class="form-group c90 required col-md-3" data-cid="c90">
                                <label class="control-label required-field" for="c90">Term of Application</label>
                                <select class="form-control" id="c90" name="c90" data-rule-required="true">
                                    <option value="">- Select -</option>
                                    <option value="Spring">Spring</option>
                                    <option value="Summer">Summer</option>
                                    <option value="Fall">Fall</option>
                                </select>
                            </div>
                            <div class="form-group c97 required col-md-3 col-sm-3" data-cid="c97">
                                <label class="control-label required-field" for="c97">Year</label>
                                <input type="number" class="form-control" id="c97" name="c97" value="2017" data-rule-number="true" data-rule-required="true" /> </div>
                        </div>
                        <div class="row">
                            <div class="form-group c2 required col-md-3" data-cid="c2">
                                <label class="control-label required-field" for="c2">Email</label>
                                <div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-envelope"></i> </span>
                                    <input type="email" class="form-control" id="c2" name="c2" value="" data-rule-email="true" data-rule-required="true" /> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h4><strong>Dependency</strong></h4>
                <section>
                    <h3><strong>TO BE COMPLETED BY THE STUDENT SEEKING FLORIDA RESIDENCY FOR TUITION PURPOSES:</strong></h3>

                    <p>I qualify as a resident for tuition purposes, as defined by s. 1009.21, Florida Statutes, for the term for which this application is submitted. I understand that it will be necessary for me topresent evidence of residency for tuition purposes, supporting my claim as a Florida resident for tuition purposes. I have read the residency information on qualifying as a dependent or independent student, and declare that: (select one of the options below): </p>

                    <div class="radio">
                        <label>
                            <input type="radio" name="DependencyRadios" value="" checked> I am a dependent student, as defined by s. 1009.21(1)(a), Florida Statutes, in that I am eligible to be claimed as a dependent under the federal income tax code by the claimant below. The claimant is my "parent" as defined by s. 1009.21(1)(f), Florida Statutes, (i.e., either or both parents of the student, any guardian of a student, or any person in a parental relationship to the student). My parent has maintained legal residence in Florida for at least the past 12 consecutive months. As defined by section 1009.21(1)(d), Florida Statutes, "'legal resident' or 'resident' means a person who has maintained his or her residence in this state for the preceding year, has purchased a home which is occupied by him or her as his or her residence, or has established a domicile in this state pursuant to s. 222.17." A copy of your parent's tax return may be requested to establish dependence.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="DependencyRadios" value=""> I am an independent person who has maintained legal residence in Florida for at least the past 12 consecutive months. I provide more than 50% of my own support. An independent student generally includes a person who is at least 24 years old, married, a graduate or professional student, a veteran, a member of the armed forces, a ward of the court, or someone with legal dependents other than a spouse, pursuant to the United States Department of Education for the purposes of federal financial aid eligibility. There may be limited cases where a person under the age of 24 years old may qualify as an independent student. Such students will be required to verify independence (including financial independence.) A copy of your tax return may be requested to establish independence.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="DependencyRadios" value="ex"> I meet residency requirements through one of the Qualifications by Exception below (check appropriate exception):
                        </label>
                    </div>

                </section>
                <h4><strong>Exception</strong></h4>
                <section>
                    <h3><strong>QUALIFICATION BY EXCEPTION</strong></h3>
                    <p style="margin-top:-10px">(<em>to be completedby student.</em>) As provided in s. 1009.21, Florida Statutes, I qualify for residency based on the following permitted exception (documentation required): </p>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value="">I am a qualified beneficiary under the terms of the Florida Prepaid College Program (s. 1009.98, Florida Statutes.) (Required: Copy of Florida Prepaid Recipient card.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> I am married to a person who has maintained legal residence in Florida for at least the past 12 consecutive months. I now have established legal residence and intend to make Florida my permanent home. (Required: copy of marriage certificate and/or other documents required to establish residency.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> I was previously enrolled at a Florida state postsecondary institution and classified as a Florida resident for tuition purposes. I am transferring to another Florida state postsecondary institution within 12 months of the previous enrollment. (Required: Evidence of previous enrollment as a FL resident)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> I was previously enrolled at a Florida state postsecondary institution and classified as a Florida resident for tuition purposes. I abandoned my Florida domicile less than 12 months ago and am now re-establishing Florida legal residence.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> Active duty members of the Armed Services of the United States residing in this state and their spouses and dependent children, and active drilling members of the Florida National Guard. (Required: Copy of military orders or DD2058 showing home of record.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> Active duty members of the Armed Services of the United States and their spouses and dependents attending a Florida College System institution or state university within 50 miles of the military establishment where they are stationed, if such military establishment is within a county contiguous to Florida. (Required: Copy of military orders.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value="">United States citizens living on the Isthmus of Panama, who have completed 12 consecutive months of college work at the Florida State University Panama Canal Branch, and their spouses and dependent children. (Required: Copy of marriage certificate or proof of dependency.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> Full-time instructional and administrative personnel employed by state public schools and institutions of higher education and their spouses and dependent children. (Required: Employment Verification) [
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> Students from Latin America and the Caribbean who receive scholarships from the federal or state government. Any student classified pursuant to this paragraph shall attend, on a full-time basis, a Florida institution of higher education. (Required: proof of scholarship and Latin America or Caribbean residency.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value="">Southern Regional Education Board's Academic Common Market graduate students attending Florida's state universities. (Required: Certification letter from State Academic Common Market Coordinator.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value="">Full-time employees of state agencies or political subdivisions of the state when the student fees are paid by the state agency or political subdivision for the purpose of job-related law enforcement or corrections training. (Required: Employment verification/payment agreement).
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> McKnight Doctoral Fellows and Finalists who are United States citizens. (Required: Verification from graduate studies.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> United States citizens living outside the United States who are teaching at a Department of Defense Dependent School or in an American International School and who enroll in a graduate level education program which leads to a Florida teaching certificate. (Required: Proof of enrollment in graduate program for FL teaching certificate.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value=""> Active duty members of the Canadian military residing or stationed in this state under the North American Air Defense (NORAD) agreement, and their spouses and dependent children, attending a Florida College System institution or state university within 50 miles of the military establishment where they are stationed. (Required: Proof of active duty membership for specified purpose.)
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="ExceptionRadios" value="">Active duty members of a foreign nation's military who are serving as liasion offciers and are residing or stationed in this state, and their spouses and dependent children, attending a Florida College System institution or state university within 50 miles of the military establishment where the foreign liaison officer is stationed. (Required: Proof of active duty membership for specified purpose.)
                        </label>
                    </div>
                </section>
                <h4><strong>Documents</strong></h4>
                <section>
                    <div class="row">
                        <div class="form-group " data-cid="Documents">
                            <label class="control-label" for="Documents"><b>PROVISION OF DOCUMENTS TO SUPPORT CLAIM OF FLORIDA RESIDENCY</b></label>
                            <p id="Documents-help-block" class="description"><strong>Per s. 1009.21(3)(c), Florida Statutes, the residency determination must be documented by the submission of written or electronic verification that includes two or more of the documents identified below. No single piece of evidence shall be conclusive.</strong></p>
                        </div>
                        <div class="form-group sectionA required" data-cid="sectionA">
                            <label class="control-label" for="sectionA"><strong>A. Claimant must provide at least one of the following of his/her personal documentation:</strong></label>

                            <div class="checkbox">
                                <input id="A_1" name="A[]" type="checkbox" value="votersReg" data-rule-required="true">
                                <label for="A_1"> Florida Voter's registration card </label>
                            </div>
                            <div class="row voterReg">
                                <div class="form-group voterReg_Num required col-md-6" data-cid="voterReg_Num">
                                    <label class="control-label" for="voterReg_Num">Voter Registration Number</label>
                                    <input type="text" class="form-control" id="voterReg_Num" name="voterReg_Num" value="" data-rule-number="true" data-rule-required="true" /> </div>
                                <div class="form-group voterReg_Date required col-md-6" data-cid="voterReg_Date">
                                    <label class="control-label" for="voterReg_Date">Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="voterReg_Date" name="voterReg_Date" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="A_2" name="A[]" type="checkbox" value="driversLicense">
                                <label for="A_2"> Florida Driver's license </label>
                            </div>
                            <div class="row license">
                                <div class="form-group license_Num required col-md-4" data-cid="license_Num">
                                    <label class="control-label" for="license_Num">Driver's License Number</label>
                                    <input type="text" class="form-control" id="license_Num" name="license_Num" value="" data-rule-required="true" /> </div>
                                <div class="form-group license_OrigDate required col-md-4" data-cid="license_OrigDate">
                                    <label class="control-label" for="license_OrigDate">Original Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="license_OrigDate" name="license_OrigDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                                <div class="form-group license_CurrDate required col-md-4" data-cid="license_CurrDate">
                                    <label class="control-label" for="license_CurrDate">Current Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="license_CurrDate" name="license_CurrDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="A_3" name="A[]" type="checkbox" value="stateID">
                                <label for="A_3"> Florida State ID </label>
                            </div>
                            <div class="row stateID">
                                <div class="form-group stateID_Num required col-md-4" data-cid="stateID_Num">
                                    <label class="control-label" for="stateID_Num">Florida State ID Number</label>
                                    <input type="text" class="form-control" id="stateID_Num" name="stateID_Num" value="" data-rule-required="true" /> </div>
                                <div class="form-group stateID_OrigDate required col-md-4" data-cid="stateID_OrigDate">
                                    <label class="control-label" for="stateID_OrigDate">Original Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="stateID_OrigDate" name="stateID_OrigDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                                <div class="form-group stateID_CurrDate required col-md-4" data-cid="stateID_CurrDate">
                                    <label class="control-label" for="stateID_CurrDate">Current Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="stateID_CurrDate" name="stateID_CurrDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="A_4" name="A[]" type="checkbox" value="vehicleReg">
                                <label for="A_4"> Florida Vehicle registration </label>
                            </div>
                            <div class="row vehicleReg">
                                <div class="form-group vehicleReg_Num required col-md-4" data-cid="vehicleReg_Num">
                                    <label class="control-label" for="vehicleReg_Num">Florida Vehicle registration Number</label>
                                    <input type="text" class="form-control" id="vehicleReg_Num" name="vehicleReg_Num" value="" data-rule-required="true" /> </div>
                                <div class="form-group vehicleReg_OrigDate required col-md-4" data-cid="vehicleReg_OrigDate">
                                    <label class="control-label" for="vehicleReg_OrigDate">Original Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="vehicleReg_OrigDate" name="vehicleReg_OrigDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                                <div class="form-group vehicleReg_CurrDate required col-md-4 " data-cid="vehicleReg_CurrDate">
                                    <label class="control-label" for="vehicleReg_CurrDate">Current Issue Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="vehicleReg_CurrDate" name="vehicleReg_CurrDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="A_5" name="A[]" type="checkbox" value="permHome">
                                <label for="A_5"> Proof of permanent home in Florida occupied as primary residence for 12 consecutive months prior to the student’s enrollment. (Required: document such as a deed or other evidence of title to property used as primary residence, a homeowner’s policy, a title insurance policy, evidence of a property tax payment on the primary residence, multiple leases reflecting a Florida address, or a lease of multiple years’ duration.) </label>
                            </div>
                            <div class="checkbox">
                                <input id="A_6" name="A[]" type="checkbox" value="homestead">
                                <label for="A_6"> Proof of a homestead exemption in Florida. (Required: document from the county tax collector demonstrating the application of a homestead exemption to the claimant’s primary residence.) </label>
                            </div>
                            <div class="checkbox">
                                <input id="A_7" name="A[]" type="checkbox" value="transcripts">
                                <label for="A_7"> Official transcripts from a Florida high school for multiple years (2 or more years), if the Florida high school diploma or GED was earned within the last 12 months. </label>
                            </div>
                            <div class="row school">
                                <div class="form-group school_AttendanceDate col-md-6 " data-cid="school_AttendanceDate">
                                    <label class="control-label" for="school_AttendanceDate">Dates of Attendance</label>
                                    <input type="text" class="form-control" id="school_AttendanceDate" name="school_AttendanceDate" value="" /> </div>
                                <div class="form-group school_GradDate required col-md-6 " data-cid="school_GradDate">
                                    <label class="control-label" for="school_GradDate">Graduation Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control datepicker" id="school_GradDate" name="school_GradDate" value="" data-rule-required="true" /> <span class="input-group-addon right"><i class="glyphicon glyphicon-th"></i> </span></div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="A_8" name="A[]" type="checkbox" value="employment">
                                <label for="A_8"> Proof of permanent full-time employment in Florida for at least 30 hours per week for a 12-month period. (Required: pay stubs or W-2 form for past 12 consecutive months and/or verification from employers, and/or an IRS 1099 with verification of employment for the past 12 consecutive months from an employer.) </label>
                            </div>
                        </div>
                        <div class="form-group sectionB" data-cid="sectionB">
                            <label class="control-label" for="sectionB">B. Claimant may provide one or more documents from the following categories to demonstrate residency in Florida (to be used in conjunction with one document from above):</label>
                            <div class="checkbox">
                                <input id="B_1" name="B[]" type="checkbox" value="domicile">
                                <label for="B_1"> Declaration of domicile in Florida in accordance with s. 222.17, Florida Statutes. </label>
                            </div>
                            <div class="checkbox">
                                <input id="B_2" name="B[]" type="checkbox" value="profLicense">
                                <label for="B_2"> Florida professional or occupational license. </label>
                            </div>
                            <div class="checkbox">
                                <input id="B_3" name="B[]" type="checkbox" value="incorporation">
                                <label for="B_3"> Florida incorporation. </label>
                            </div>
                            <div class="checkbox">
                                <input id="B_4" name="B[]" type="checkbox" value="family">
                                <label for="B_4"> Document evidencing family ties in Florida </label>
                            </div>
                            <div class="checkbox">
                                <input id="B_5" name="B[]" type="checkbox" value="membership">
                                <label for="B_5"> Proof of membership in a Florida-based charitable or professional organization. </label>
                            </div>
                            <div class="checkbox">
                                <input id="B_6" name="B[]" type="checkbox" value="other">
                                <label for="B_6"> Any other documentation that supports your request for resident status, including, but not limited to, utility bills and proof of 12 consecutive months of payments; a lease agreement and proof of 12 consecutive months of payments; or an official state, federal, or court document evidencing legal ties to Florida. </label>
                            </div>
                        </div>
                    </div>
                </section>
                <h4><strong>Claimant</strong></h4>
                <section>
                    <h3><strong>TO BE COMPLETED BY THE CLAIMANT / PERSON CLAIMING FLORIDA RESIDENCY</strong></h3>
                    <p>Note: If the student is a dependent, the parent is the claimant and will complete this section and provide evidence of residency supporting the claim. If the student is independent, the student is the claimant and will complete this section and provide evidence of residency supporting the claim. <em>No single document shall be conclusive in establishing residency.  Additional documentation, other than what is prescribed, may be requested in some cases.  All documentation provided is subject to verification.  Evidence of ties to another state may result in denial of Florida residency for tuition purposes.</em></p>
                    <div class="row form-group" style="margin-left:10px; margin-right:10px">
                        <label class="control-label col-md-2 required-field" for="claimantName">Claimant/Name of Person claiming FL Residency: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="claimantName" placeholder="Jon Snow"> </div>
                        <label class="control-label col-md-2" for="relationship">Claimant Relationship to Student: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="relationship" placeholder="Self"> </div>
                    </div>
                    <div class="row form-group" style="margin-left:10px; margin-right:10px">
                        <label class="control-label col-md-2 required-field" for="claimantAddress">Claimant's address: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control required" name="claimantAddress" placeholder="North Pole"> </div>
                        <label class="control-label col-md-2" for="claimantTelephone">Telephone Number: </label>
                        <div class="col-md-4">
                            <input type="tel" class="form-control" name="claimantTelephone" placeholder="000-000-0000"> </div>
                    </div>
                    <div class="row form-group" style="margin:10px">
                        <label class="control-label col-md-2 required-field" for="DateOfResidency">Date Claimant began establishing legal Fl residence (if upon birth enter birthdate): </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control datepicker required" name="DateOfResidency" placeholder="12-02-3000"> </div>
                    </div>
                    <br style="clear:both" />
                    <h4><strong>RESIDENCY DECLARATION:</strong></h4>
                    <section>

                        <p>I, the undersigned, hereby declare that I have read the foregoing document and that the facts stated in it are true and further affirm the authenticity of the information provided on all pages of this Residency Declaration. I understand that any false or misleading information on this Residency Declaration, or provided in support of this Residency Declaration, will subject me to penalties pursuant to section 837.06, Florida Statutes, for making a false statement. I give permission for the institution to review or examine any and all documents and records, including those accessible electronically, which may assist in support of my claim as a Florida resident for tuition purposes.</p>

                        <div class="row">
                            <label class="control-label col-md-2 required-field" for="studentNameSign">Student Name (Please Print): </label>
                            <div class="col-md-2">
                                <input type="text" class="form-control required" name="studentNameSign" placeholder="Jon"> </div>

                            <label class="control-label col-md-1" for="claimantNameSign">Claimant Name (if not the Student): </label>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="claimantNameSign" placeholder="Jon"> </div>
                        </div>
                        <div class="row">
                            <label class="control-label col-md-2 required-field" for="signature">Signature: </label>
                            <div class="col-md-2">
                                <input type="text" class="form-control required" name="signature" placeholder="Jon"> </div>
                            <label class="control-label col-md-1 required-field" for="DateSign">Date </label>
                            <div class="col-md-2">
                                <input type="text" class="form-control datepicker required" name="DateSign"> </div>
                        </div>
                    </section>
            </form>
        </div>
        <!-- Include out validation.js script -->
        <!--<script src="validation.js"></script>-->
        <!--
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center footer-text"> An Equal Opportunity/Equal Access Institution © Copyright 2016.
                        <br/> Florida Atlantic University </div>
                </div>
            </div>
        </footer>
-->
        <!--    necessary for jQuery steps-->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
        <script src="jquery.steps.js"></script>
        <script>
            function resizeJquerySteps() {
                $('.wizard .content').animate({
                    height: $('.body.current').outerHeight()
                }, "slow");
            }
            $(document).ready(function() {
                debugger;
                //Disable and hide fields
                $(".voterReg :input").prop('disabled', true);
                $(".voterReg").hide();
                $(".license :input").prop('disabled', true);
                $(".license").hide();
                $(".stateID :input").prop('disabled', true);
                $(".stateID").hide();
                $(".vehicleReg :input").prop('disabled', true);
                $(".vehicleReg").hide();
                $(".school :input").prop('disabled', true);
                $(".school").hide();

                $(function() {
                    $(".datepicker").datepicker();
                });

                //$(".voterReg :input").prop("disabled", true);
                /*$("#A1").on("click", function(){
                    $(".voterReg").hide();
                    if($(".voterReg").prop('disabled')){
                        $(".voterReg :input").prop('disabled', false);
                        $(".voterReg").show();
                    }
                    else{
                        $(".voterReg :input").prop('disabled', true);
                        $(".voterReg").hide();
                    }
                });*/

                /*$.validator.addMethod("valueNotEquals", function(value, element, arg) {
                    return arg != value;
                }, "Value must not equal arg.");*/
                /*$(".voterReg").hide(1000);
                $(".voterReg :input").prop("disabled", true);
                $("#A_1").click(function(){
                    $(".voterReg").toggle();
                    $(".voterReg :input").prop('disabled', !$(".voterReg").prop('disabled'));
                });*/
                var form = $("#studentForm").show();
                form.steps({
                    headerTag: "h4",
                    bodyTag: "section",
                    transitionEffect: "slideLeft",
                    onStepChanging: function(event, currentIndex, newIndex) {
                        // Allways allow previous action even if the current form is not valid!
                        if (currentIndex > newIndex) {
                            return true;
                        }
                        // Needed in some cases if the user went back (clean up)
                        if (currentIndex < newIndex) {
                            // To remove error styles
                            form.find(".body:eq(" + newIndex + ") label.error").remove();
                            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                        }
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    onStepChanged: function(event, currentIndex, priorIndex) {
                        if (currentIndex === 1 && $("input[name='ResidentRadios']:checked").val() === "non") {
                            form.steps("previous");
                            //window.location.replace("../Home/index.php");
                        }
                        if (currentIndex === 4 && $("input[name='DependencyRadios']:checked").val() != "ex") {
                            form.steps("next");
                        }
                        // Used to skip the "Warning" step if the user is old enough.
                        //                    if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                        //                        form.steps("next");
                        //                    }
                        //                    // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                        //                    if (currentIndex === 2 && priorIndex === 3) {
                        //                        form.steps("previous");
                        //                    }
                    },
                    onFinishing: function(event, currentIndex) {
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function(event, currentIndex) {
                        alert("Submitted!");
                        var data = $("#studentForm").serialize();
                        var url = '../../Controllers/studentApplication.php';
                        $.post(url, data, function(response) {
                            console.log(response)
                        }).fail(function(e) {
                            alert("error" + e);
                        });
                    }
                }).validate({
                    errorPlacement: function errorPlacement(error, element) {
                        element.after(error);
                    },
                    highlight: function(element) {
                        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    unhighlight: function(element) {
                            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                        }
                        /*highlight: function(element) {
                            $(element).closest('.form-group').addClass('has-error');
                        },
                        unhighlight: function(element) {
                            $(element).closest('.form-group').removeClass('has-error');
                        }*/
                        ,
                    errorElement: 'span',
                    errorClass: 'help-block',
                    errorPlacement: function(error, element) {
                            if (element.parent('.input-group').length) {
                                error.insertAfter(element.parent());
                            } else {
                                error.insertAfter(element);
                            }
                        }
                        /*highlight: function(element) {
                            var id_attr = "#" + $( element ).attr("id") + "1";
                            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                            $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
                        },
                        unhighlight: function(element) {
                            var id_attr = "#" + $( element ).attr("id") + "1";
                            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                            $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
                        },
                        errorElement: 'span',
                        errorClass: 'help-block',
                        errorPlacement: function(error, element) {
                            if(element.length) {
                                error.insertAfter(element);
                            } else {
                                error.insertAfter(element);
                            }
                        }*/
                        /*rules: {
                            TermSelect: {
                                valueNotEquals: "
                            }
                        },
                        messages: {
                            TermSelect: {
                                valueNotEquals: "Please select an item!"
                            }
                        }*/
                });
                //All on click events must go AFTER form.steps function
                $("#A_1").on("click", function() {
                    console.log("Lole1");
                    if ($(".voterReg :input").prop('disabled')) {
                        $(".voterReg :input").prop('disabled', false);
                        $(".voterReg").show("slow");
                    } else {
                        $(".voterReg :input").prop('disabled', true);
                        $(".voterReg").hide("slow");
                    }
                });
                $("#A_2").on("click", function() {
                    console.log("Lole2");
                    if ($(".license :input").prop('disabled')) {
                        $(".license :input").prop('disabled', false);
                        $(".license").show("slow");
                    } else {
                        $(".license :input").prop('disabled', true);
                        $(".license").hide("slow");
                    }
                });
                $("#A_3").on("click", function() {
                    console.log("Lole3");
                    if ($(".stateID :input").prop('disabled')) {
                        $(".stateID :input").prop('disabled', false);
                        $(".stateID").show("slow");
                    } else {
                        $(".stateID :input").prop('disabled', true);
                        $(".stateID").hide("slow");
                    }
                });
                $("#A_4").on("click", function() {
                    console.log("Lole4");
                    if ($(".vehicleReg :input").prop('disabled')) {
                        $(".vehicleReg :input").prop('disabled', false);
                        $(".vehicleReg").show("slow");
                    } else {
                        $(".vehicleReg :input").prop('disabled', true);
                        $(".vehicleReg").hide("slow");
                    }
                });
                $("#A_7").on("click", function() {
                    console.log("Lole7");
                    if ($(".school :input").prop('disabled')) {
                        $(".school :input").prop('disabled', false);
                        $(".school").show("slow");
                    } else {
                        $(".school :input").prop('disabled', true);
                        $(".school").hide("slow");
                    }
                });
            });

        </script>
    </body>

    </html>
