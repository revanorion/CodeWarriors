<?php

session_start();

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

//This checks which ajax post is called.
if (is_ajax()) {
    if(isset($_POST['signature'])) {
        echo createForm();
        echo $_POST['relationship'];
    }
}
function createForm(){
    require_once '../../Controllers/db_connect.php';
    $insertStmt = "INSERT INTO STUDENT (STUDENT_NAME, Z_NUMBER, BIRTHDAY) VALUES('".$_POST['c1']."', '".$_SESSION["login_user_znum"]."', '".$_POST['c107 ']."')";
    $result = $db->query($insertStmt);
    if (mysqli_affected_rows($db) > -1) {
        $insertStmt="INSERT INTO CLAIMING_RESIDENY (PERSON_NAME, CLAIMANT_RELATIONSHIP, ADDRESS, PHONE_NUMBER, RESIDENCY_DATE) VALUES ('".$_POST['claimantName']."', '".$_POST['relationship']."', '".$_POST['claimantAddress']."', '".$_POST['claimantTelephone']."', '".$_POST['DateOfResidency']."')";
        $result = $db->query($insertStmt);
        if (mysqli_affected_rows($db) > -1) {
            $insertStmt="INSERT INTO STUDENT_RESIDENCY (CLAIMING_RESIDENCY_SEQ, STUDENT_SEQ, USER_SEQ, YEAR) VALUES (".getIdentity("CLAIMING_RESIDENCY","CLAIMING_RESIDENCY_SEQ").",".getIdentity("STUDENT","STUDENT_SEQ").",".$_SESSION['login_user'].", '".$_POST['c97']."')"
        }
    }
}

function getIdentity($tableName, $seqName){
    $selectStmt = "SELECT MAX(".$seqName.") AS SEQ FROM ".$tableName;
                $Result = $db->query($selectStmt);

     if (mysqli_num_rows($Result) > 0) {
         while($row = mysqli_fetch_assoc($Result)) {
             return $rowImg["SEQ"];
         }
     }
    return 0;
}



?>
