<?php 
include_once('../config/mydb.php');
include_once('../controllers/myController.php');

// Establish the database connection
$conn = db();

// Call register and login functions (they will process POST requests if available)
register1($conn);
login1($conn);

// Include the registration/login form (this should be after calling the controller functions to display messages)
include_once('../views/formularRL.php');
?>
