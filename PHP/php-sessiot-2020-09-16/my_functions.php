<?php

function checkPermission(){
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != TRUE) {
        header('Location: error.php?error_code=2');
        die();
    }
}