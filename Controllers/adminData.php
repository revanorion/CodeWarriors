<?php

session_start();

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

//This checks which ajax post is called.
if (is_ajax()) {
    if(isset($_POST['loadData'])) {
        //echo loadData();
    }
}
//function loadData(){
    include($_SERVER['DOCUMENT_ROOT']."/Controllers/db_connect.php");
    $selectStmt = "SELECT S.STUDENT_NAME, S.Z_NUMBER, R.YEAR, ST.DESCRIPTION AS STATUS FROM STUDENT_RESIDENCY R JOIN STUDENT S ON S.STUDENT_SEQ = R.STUDENT_SEQ LEFT JOIN STATUS ST ON ST.STATUS_SEQ = R.STATUS_SEQ";

    $result = $db->query($selectStmt);

     $a= array();
    while ($row = mysqli_fetch_assoc($result)) {
        $a['data'][] = $row;
    }
    echo (json_encode($a));
//}
?>
