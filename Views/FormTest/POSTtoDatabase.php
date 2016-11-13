<?php
// The following code is in preparation for grabbing ALL data from the form
// and serves as an example of what the POST to the MySQL DB will look like

// This function will run within each post array including multi-dimensional arrays 

function ExtendedAddslash(&$params)
{ 
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
            unset($var);
        }
} 

// Initialize ExtendedAddslash() function for every $_POST variable

ExtendedAddslash($_POST);  

// Store all form fields inside variables
$residentStatus = $_POST["residentStatus"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
// middlename is optional so we only store it if it exists
// though this may not be necessary
if ($_POST["middleName"]) {
	$middlename = $_POST["middleName"];
}
$suffix = $_POST["suffix"]; 
$zNum = $_POST["zNum"]; 
$applicationTerm = $_POST["applicationTerm"]; 
$applicationYear = $_POST["applicationYear"]; 
$dobM = $_POST["dobM"]; 
$dobD = $_POST["dobD"]; 
$dobY = $_POST["dobY"]; 
$email = $_POST["email"];
$citizenStatus = $_POST["citizenStatus"];
$alienRegNum = $_POST["alienRegNum"];
$issueDate = $_POST["issueDate"];
$visaCategory = $_POST["visaCategory"];
$qualifications = $_POST["qualifications"];
$claimantName = $_POST["claimant"];
$claimantRelationship = $_POST["claimantRelationship"];
$claimantAddress = $_POST["claimantAddress"];
$claimantPhone = $_POST["claimantPhone"];
$claimantResidencyDate = $_POST["claimantResidencyDate"];



// initialize database connectivity to MySQL
$db_host = 'db hostname here';
$db_username = 'db username here';
$db_password = 'db password here';
$db_name = 'name of your database';
mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name); 

// search submission ID

$query = "SELECT * FROM `table_name` WHERE `submission_id` = '$submission_id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `table_name` SET 
                                `name` = '$name',
                                `email` = '$email',
                                `phone` = '$phonenumber',
                                `subject` = '$subject',
                                `message` = '$message'        
                             WHERE `submission_id` = '$submission_id'") 
     or die(mysql_error());
    
} else {

    mysql_query("INSERT INTO `table_name` (submission_id, formID, IP, 
                                                                          name, email, phone, subject, message) 
                               VALUES ('$submission_id', '$formID', '$ip', 
                                                 '$name', '$email', '$phonenumber', '$subject', '$message') ") 
    or die(mysql_error());  

}
?>