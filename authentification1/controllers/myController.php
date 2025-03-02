<?php 
include_once('../config/mydb.php'); 
include('../models/registerM.php');
include('../models/loginM.php');

// register logic
function register1($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $message = register($conn);
        

        echo "<div class='alert alert-info'>{$message}</div>";
    }
}

// Login logic
function login1($conn){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $message = login($conn, $username, $password);


            echo "<div class='alert alert-info'>{$message}</div>";
        } else {
            echo "<div class='alert alert-danger'>Please enter both username and password.</div>";
        }
    }
}
?>
