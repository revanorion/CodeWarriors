<?php
// 	require_once "db_connect.php"; //connects to the data base
session_start();
ob_start();
 //checks if the submit button for signing in is pressed
	$userid = $_POST['znumber']; //setting the values
	$pass = $_POST['password'];
	/* TO CHECK IN THE DATABASE
	$query = "SELECT * FROM `USERS` WHERE `userid` = '$userid' AND `password` = '$password'";
	$result = $db->query($query); //sends the message to mysql to find the user with the specific username and password
	if($result->num_rows == 1) { //checks if the user was found
	*/
	echo "$userid $pass";
	if($userid == '11111111' && $pass == 'admin'){
		$_SESSION["user_name"] = $_POST["znumber"]; //if yes session is created
		$_SESSION['loggedin_time'] = time();
	} else {
		header('Location:index.php?wrongpass=1');
	}

if(isset($_SESSION["user_name"])) { //Checks if the user was sent back for session expiration
	/* WHAT TO DO IF THE SESSION IS SET
	if(!isLoginSessionExpired()) { //if it is not expired it goes to the wall php file
	header('Location:form.php');
	*/
	header('Location:index.php?login_success=1');
	}

	/* IF WE WANT SESSION TO BE TIMED
	function isLoginSessionExpired() { //Session creator
	$login_session_duration = 300;  //duration of session
	$current_time = time(); //gets the current time
	if(isset($_SESSION['loggedin_time']) and isset($_SESSION["user_name"])){  //If the time is ok and the user is connected
		if(((time() - $_SESSION['loggedin_time']) > $login_session_duration)){  //lets the user stay in
			return true;
		}
	}
	return false;
	}
	*/


?>
