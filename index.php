<?php
session_name("coranyx");
session_start();
$session_output = NULL;

if (!isset($_SESSION['access_level']) && !isset($_SESSION['user_identity'])) {
    include_once 'pages/login.php';
} else {
    include_once 'pages/home.php';
}
