<?php

session_start();

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

//This checks which ajax post is called.
if (is_ajax()) {
    if(isset($_POST['relationship'])) {
        echo $_POST['relationship'];
    }
}

?>
