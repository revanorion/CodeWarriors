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

        <script>
            $(function() {
                $(".datepicker").datepicker();
            });

        </script>
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
                <h4><strong>Are you a Florida Resident?</strong></h4>
                <section>

                    <p>This is the beginning of the forms for the student applicants. This web application interface was designed to make it more convenient to fill out the residency apllication and help with checking the status of the application. Please begin by stating if you are a Florida Resident or a Non-Florida Resident.</p>

                    <input type="radio" name="" value=""> Florida Resident
                    <br>
                    <input type="radio" name="" value=""> Non-Florida Resident
                    <br>
                </section>
                <h4><strong>FLORIDA RESIDENCY DECLARATION FOR TUITION PURPOSES</strong></h4>
                <section>

                        <p>A Florida "resident for tuition purposes" is a person who has, or a dependent person whose parent or legal guardian has, established and maintained legal residency in Florida for at least twelve (12) consecutive months preceding the first day of classes of the term for which Florida residency is sought.</p>


                        <div>Wanted to add a border line</div>
                        <ul>
                            <li>Residence in Florida must be a bona fide domicile rather than for the purpose of maintaining a residence incident to enrollment at an institution of higher education. </li>
                            <li>To qualify as a Florida resident for tuition purposes, you must be a U.S. citizen, a foreign national in a nonimmigrant visa classification that grants you the legal ability to establish a bona fide domicile in the United States, a permanent resident alien, parolee, asylee, Cuban-Haitian entrant, legal alien granted indefinite stay, or other qualified alien as defined under federal law. Other persons not meeting the twelve-month legal residence requirements may be classified as Florida residents for tuition purposes only if they fall within one of the limited special categories authorized by the Florida Legislature pursuant to section 1009.21, Florida Statutes (see "Qualification by Exception"). All other persons are ineligible for classification as a Florida "resident for tuition purposes". </li>
                            <li>Living in or attending school in Florida will not, in itself, establish legal residence. Students who depend upon out-of-state parents for support are presumed to be legal residents of the same state as their parents.</li>
                            <li>Residency for tuition purposes requires the establishment of legal ties to the state of Florida. A student must verify that the student has broken ties to other states if the student or, in the case of a dependent student, his or her parent has moved from another state. </li>
                        </ul>

                    <div class="row form-group">
                        <label class="control-label col-md-2 required-field" for="firstname">First Name: </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control required" name="firstname" placeholder="Jon"> </div>
                        <label class="control-label col-md-1" for="middlename">Middle Name: </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="middlename" placeholder=""> </div>
                        <label class="control-label col-md-1 required-field" for="lastname">Last Name: </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="lastname" placeholder="Snow"> </div>
                        <label class="control-label col-md-1" for="suffix">Suffix: </label>
                        <div class="col-md-1">
                            <select class="form-control" name="suffix">
                                <option selected>Select One</option>
                                <option value="Jr">Jr</option>
                                <option value="Sr">Sr</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-md-2 required-field" for="term">Term of Application: </label>
                        <div class="col-md-1">
                            <select class="form-control" name="term">
                                <option selected>Select One</option>
                                <option value="Fall">Fall</option>
                                <option value="Spring">Spring</option>
                                <option value="Summer">Summer</option>
                            </select>
                        </div>
                        <label class="control-label col-md-2 required-field" for="year">Year: </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="year" placeholder="2016"> </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-md-2 required-field" for="dob">Date of Birth: </label>
                        <div class="col-md-1">
                            <input type="text" class="form-control datepicker" name="dob" placeholder="01/01/2016"> </div>
                    </div>
                    <div class="row form-group">
                        <label class="control-label col-md-2 required-field" for="email">Email: </label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="email" placeholder="jsnow2016@fau.edu"> </div>
                    </div>
                </section>
                <h4><strong>TO BE COMPLETED BY THE STUDENT SEEKING FLORIDA RESIDENCY FOR TUITION PURPOSES:</strong></h4>
                <section>

                    <p>I qualify as a resident for tuition purposes, as defined by s. 1009.21, Florida Statutes, for the term for which this application is submitted. I understand that it will be necessary for me topresent evidence of residency for tuition purposes, supporting my claim as a Florida resident for tuition purposes. I have read the residency information on qualifying as a dependent or independent student, and declare that: (select one of the options below): </p>



                    <input type="checkbox" name="" value=""> I am a dependent student, as defined by s. 1009.21(1)(a), Florida Statutes, in that I am eligible to be claimed as a dependent under the federal income tax code by the claimant below. The claimant is my "parent" as defined by s. 1009.21(1)(f), Florida Statutes, (i.e., either or both parents of the student, any guardian of a student, or any person in a parental relationship to the student). My parent has maintained legal residence in Florida for at least the past 12 consecutive months. As defined by section 1009.21(1)(d), Florida Statutes, "'legal resident' or 'resident' means a person who has maintained his or her residence in this state for the preceding year, has purchased a home which is occupied by him or her as his or her residence, or has established a domicile in this state pursuant to s. 222.17." A copy of your parent's tax return may be requested to establish dependence.
                    <br>
                    <input type="checkbox" name="" value=""> I am an independent person who has maintained legal residence in Florida for at least the past 12 consecutive months. I provide more than 50% of my own support. An independent student generally includes a person who is at least 24 years old, married, a graduate or professional student, a veteran, a member of the armed forces, a ward of the court, or someone with legal dependents other than a spouse, pursuant to the United States Department of Education for the purposes of federal financial aid eligibility. There may be limited cases where a person under the age of 24 years old may qualify as an independent student. Such students will be required to verify independence (including financial independence.) A copy of your tax return may be requested to establish independence.
                    <br>
                    <input type="checkbox" name="" value=""> I meet residency requirements through one of the Qualifications by Exception below (check appropriate exception):
                    <br>

                    <label>TERM OF APPLICATION: (check one): </label>
                    <input type="checkbox" name="" value="">FALL
                    <br>
                    <input type="checkbox" name="" value="">SPRING
                    <br>
                    <input type="checkbox" name="" value="">SUMMER
                    <br>


                </section>
                <h4><strong>QUALIFICATION BY EXCEPTION</strong></h4>
                <section>

                    <p> (to be completedby student.) As provided in s. 1009.21, Florida Statutes, I qualify for residency based on the following permitted exception (documentation required): </p>

                    <input type="checkbox" name="" value="">I am a qualified beneficiary under the terms of the Florida Prepaid College Program (s. 1009.98, Florida Statutes.) (Required: Copy of Florida Prepaid Recipient card.)
                    <br>
                    <input type="checkbox" name="" value=""> I am married to a person who has maintained legal residence in Florida for at least the past 12 consecutive months. I now have established legal residence and intend to make Florida my permanent home. (Required: copy of marriage certificate and/or other documents required to establish residency.)
                    <br>
                    <input type="checkbox" name="" value=""> I was previously enrolled at a Florida state postsecondary institution and classified as a Florida resident for tuition purposes. I am transferring to another Florida state postsecondary institution within 12 months of the previous enrollment. (Required: Evidence of previous enrollment as a FL resident)
                    <br>
                    <input type="checkbox" name="" value=""> I was previously enrolled at a Florida state postsecondary institution and classified as a Florida resident for tuition purposes. I abandoned my Florida domicile less than 12 months ago and am now re-establishing Florida legal residence.
                    <br>
                    <input type="checkbox" name="" value=""> Active duty members of the Armed Services of the United States residing in this state and their spouses and dependent children, and active drilling members of the Florida National Guard. (Required: Copy of military orders or DD2058 showing home of record.)
                    <br>
                    <input type="checkbox" name="" value=""> Active duty members of the Armed Services of the United States and their spouses and dependents attending a Florida College System institution or state university within 50 miles of the military establishment where they are stationed, if such military establishment is within a county contiguous to Florida. (Required: Copy of military orders.)
                    <br>
                    <input type="checkbox" name="" value="">United States citizens living on the Isthmus of Panama, who have completed 12 consecutive months of college work at the Florida State University Panama Canal Branch, and their spouses and dependent children. (Required: Copy of marriage certificate or proof of dependency.)
                    <br>
                    <input type="checkbox" name="" value=""> Full-time instructional and administrative personnel employed by state public schools and institutions of higher education and their spouses and dependent children. (Required: Employment Verification) [
                    <br>
                    <input type="checkbox" name="" value=""> Students from Latin America and the Caribbean who receive scholarships from the federal or state government. Any student classified pursuant to this paragraph shall attend, on a full-time basis, a Florida institution of higher education. (Required: proof of scholarship and Latin America or Caribbean residency.)
                    <br>
                    <input type="checkbox" name="" value="">Southern Regional Education Board's Academic Common Market graduate students attending Florida's state universities. (Required: Certification letter from State Academic Common Market Coordinator.)
                    <br>
                    <input type="checkbox" name="" value="">Full-time employees of state agencies or political subdivisions of the state when the student fees are paid by the state agency or political subdivision for the purpose of job-related law enforcement or corrections training. (Required: Employment verification/payment agreement).
                    <br>
                    <input type="checkbox" name="" value=""> McKnight Doctoral Fellows and Finalists who are United States citizens. (Required: Verification from graduate studies.)
                    <br>
                    <input type="checkbox" name="" value=""> United States citizens living outside the United States who are teaching at a Department of Defense Dependent School or in an American International School and who enroll in a graduate level education program which leads to a Florida teaching certificate. (Required: Proof of enrollment in graduate program for FL teaching certificate.)
                    <br>
                    <input type="checkbox" name="" value=""> Active duty members of the Canadian military residing or stationed in this state under the North American Air Defense (NORAD) agreement, and their spouses and dependent children, attending a Florida College System institution or state university within 50 miles of the military establishment where they are stationed. (Required: Proof of active duty membership for specified purpose.)
                    <br>
                    <input type="checkbox" name="" value="">Active duty members of a foreign nation's military who are serving as liasion offciers and are residing or stationed in this state, and their spouses and dependent children, attending a Florida College System institution or state university within 50 miles of the military establishment where the foreign liaison officer is stationed. (Required: Proof of active duty membership for specified purpose.)
                    <br>
                </section>
                <h4><strong>TO BE COMPLETED BY THE CLAIMANT / PERSON CLAIMING FLORIDA RESIDENCY</strong></h4>
                <section>
                    <p>Note: If the student is a dependent, the parent is the claimant and will complete this section and provide evidence of residency supporting the claim. If the student is independent, the student is the claimant and will complete this section and provide evidence of residency supporting the claim. <strong>No single document shall be conclusive in establishing residency.  Additional documentation, other than what is prescribed, may be requested in some cases.  All documentation provided is subject to verification.  Evidence of ties to another state may result in denial of Florida residency for tuition purposes.</strong></p>
                    <!--                <div style="align:left">-->
                    <label class="control-label col-md-2 required-field" for="claimantname">Claimant/Name of Person claiming FL Residency: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="claimantName" placeholder="Jon"> </div>
                    <label class="control-label col-md-1" for="relationship">Claimant Relationship to Student: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="relationship" placeholder="Self"> </div>
                    <label class="control-label col-md-1 required-field" for="claimantAdress">Claimant's adress: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="claimantAddress" placeholder=""> </div>
                    <label class="control-label col-md-1" for="claimantTelephone">Telephone Number: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="claimantTelephone" placeholder=""> </div>
                    <label class="control-label col-md-1" for="DateOfResidency">Date Claimant began establishing legal Fl residence (if upon birth enter birthdate): </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="DateOfResidency" placeholder=""> </div>
                    <!--                </div> --><strong>PROVISION OF DOCUMENTS TO SUPPORT CLAIM OF FLORIDA RESIDENCY:</strong>
                    <p> <strong>Per s. 1009.21(3)(c), Florida Statutes, the residency determination must be documented by the submission of written or electronic verification that includes two or more of the documents identified below.  No single piece of evidence shall be conclusive.</strong> </p> <strong>A.  Claimant must provide at least one of the following of his/her personal documentation:</strong>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br> <strong>B.   Claimant may provide one or more documents from the following categories to demonstrate residency in Florida (to be used in conjunction with one document from above):</strong>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value="">
                    <br>
                    <input type="checkbox" name="" value=""> </section>
                <h4><strong>RESIDENCY DECLARATION:</strong></h4>
                <section>

                    <p>I, the undersigned, hereby declare that I have read the foregoing document and that the facts stated in it are true and further affirm the authenticity of the information provided on all pages of this Residency Declaration. I understand that any false or misleading information on this Residency Declaration, or provided in support of this Residency Declaration, will subject me to penalties pursuant to section 837.06, Florida Statutes, for making a false statement. I give permission for the institution to review or examine any and all documents and records, including those accessible electronically, which may assist in support of my claim as a Florida resident for tuition purposes.</p>

                    <label class="control-label col-md-2 required-field" for="studentName">Student Name (Please Print): </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="studentName" placeholder="Jon"> </div>
                    <label class="control-label col-md-1" for="claimantName">Claimant Name (if not the Student): </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="relationship" placeholder="Jon"> </div>
                    <label class="control-label col-md-1" for="signature">Signature: </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="signature" placeholder="Jon"> </div>
                    <label class="control-label col-md-1" for="Date">Date </label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" name="Date" placeholder="Jon"> </div>
                    <div class="col-md-13 form-group">
                        <div class="btn-group pull-right" role="group">
                            <button type="button" class="btn btn-default">Submit</button>
                            <button type="button" class="btn btn-success">Next</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
        <!-- Include out validation.js script -->
        <!--<script src="validation.js"></script>-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center footer-text"> An Equal Opportunity/Equal Access Institution © Copyright 2016.
                        <br/> Florida Atlantic University </div>
                </div>
            </div>
        </footer>
        <!--    necessary for jQuery steps-->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
        <script src="../../Scripts/jquery.steps.min.js"></script>
        <script>
            debugger;
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
                }
            }).validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                }
            });

        </script>
    </body>

    </html>
