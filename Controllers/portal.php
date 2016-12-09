<?php
// 	require_once "db_connect.php"; //connects to the data base
session_start();

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

//This checks which ajax post is called.
if (is_ajax()) {
    if(isset($_POST['signup']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        echo registerUser($_POST['email'], $_POST['password']);
    }
    if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        echo loginUser($_POST['email'], $_POST['password']);
    }
}

function registerUser($email, $password){
    require_once './db_connect.php';
    $selectStmt = "SELECT USER_SEQ FROM USER WHERE EMAIL_ADDRESS ='".$email."'";
    $result = $db->query($selectStmt);
    if (mysqli_num_rows($result) > 0) {
        return -1;
    }
    else
    {
        $activation = md5(uniqid());
        $insertStmt= "INSERT INTO USER (EMAIL_ADDRESS, PASSWORD, ACTIVATED) VALUES ('".$email."', '".password_hash($password, PASSWORD_DEFAULT)."', '".$activation."')";
        $result = $db->query($insertStmt);
        if (mysqli_affected_rows($db) > -1) {
            $selectStmt = "SELECT MAX(USER_SEQ) AS USER_SEQ FROM USER";
                $Result = $db->query($selectStmt);
            if (mysqli_num_rows($Result) > 0) {
                while($row = mysqli_fetch_assoc($Result)) {
                    //return $row["USER_SEQ"];
                }
            }
            return 1;
        }
        return $db->error;
    }
}


function loginUser($email, $password){
    require_once './db_connect.php';
    $selectStmt = "SELECT USER_SEQ, PASSWORD FROM USER WHERE EMAIL_ADDRESS ='".$email."'";
    $result = $db->query($selectStmt);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["PASSWORD"])){
            //this will store the session vars
//            $_SESSION["login_user_znum"] = $znumber;
            $_SESSION["login_user"] = $row["USER_SEQ"];
            echo "your in".$_SESSION["login_user"];
        }
        else{
            echo "try again";
        }
    }
    else
    {
        echo "User doesnt exist ".$db->error;
    }
}

//if(isset($_SESSION["user_name"])) { //Checks if the user was sent back for session expiration
	/* WHAT TO DO IF THE SESSION IS SET
	if(!isLoginSessionExpired()) { //if it is not expired it goes to the wall php file
	header('Location:form.php');
	*/
//	header('Location:index.php?login_success=1');
//	}

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
