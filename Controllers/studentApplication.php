<?php

session_start();

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

//This checks which ajax post is called.
if (is_ajax()) {
    if(isset($_POST['signature'])) {
        echo createForm();
    }
}
function createForm(){
    include($_SERVER['DOCUMENT_ROOT']."/Controllers/db_connect.php");
    $insertStmt = "INSERT INTO STUDENT (STUDENT_NAME, BIRTHDAY) VALUES('".$_POST['c1']."', '".$_POST['c107 ']."')";
    $result = $db->query($insertStmt);
    if (mysqli_affected_rows($db) > -1) {
        $insertStmt="INSERT INTO CLAIMING_RESIDENCY (PERSON_NAME, CLAIMANT_RELATIONSHIP, ADDRESS, PHONE_NUMBER, RESIDENCY_DATE) VALUES ('".$_POST['claimantName']."', '".$_POST['relationship']."', '".$_POST['claimantAddress']."', '".$_POST['claimantTelephone']."', '".$_POST['DateOfResidency']."')";
        $result = $db->query($insertStmt);
        if (mysqli_affected_rows($db) > -1) {
            $insertStmt="INSERT INTO RESIDENCY_DECLARATION (STUDENT_NAME, CLAIMANT_NAME, SIGNATURE, DATE) VALUES ('".$_POST['studentNameSign']."', '".$_POST['claimantNameSign']."', '".$_POST['signature']."', '".$_POST['DateSign']."')";
            $result = $db->query($insertStmt);
            if (mysqli_affected_rows($db) > -1) {
                $insertStmt="INSERT INTO STUDENT_RESIDENCY (CLAIMING_RESIDENCY_SEQ, RESIDENCY_DECLARATION_SEQ, STUDENT_SEQ, USER_SEQ, YEAR) VALUES (".getIdentity("CLAIMING_RESIDENCY","CLAIMING_RESIDENCY_SEQ").", ".getIdentity("RESIDENCY_DECLARATION","RESIDENCY_DECLARATION_SEQ").", ".getIdentity("STUDENT","STUDENT_SEQ").", ".$_SESSION['login_user'].", '".$_POST['c97']."')";
                $result = $db->query($insertStmt);
            }
        }
    }
    return $insertStmt." ".$db->error;
}

function getIdentity($tableName, $seqName){
    include ($_SERVER['DOCUMENT_ROOT']."/Controllers/db_connect.php");
    $selectStmt = "SELECT MAX(".$seqName.") AS SEQ FROM ".$tableName;
                $Result = $db->query($selectStmt);

     if (mysqli_num_rows($Result) > 0) {
         while($row = mysqli_fetch_assoc($Result)) {
             return $row["SEQ"];
         }
     }
    return 0;
}



?>
