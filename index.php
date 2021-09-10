<?php
session_name("coranyx");
session_start();

if (!isset($_SESSION['Access_level']) && !isset($_SESSION['Email']) && !isset($_SESSION['Matricula'])) {
    include_once 'pages/login.php';
} else {
    include_once 'pages/home.php';
}
