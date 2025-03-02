<?php
include_once('../config/mydb.php');

function register($conn) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];


            if ($password !== $confirm_password) {
                return 'Passwords do not match';
            }

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);


            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Username already exists';
            } else {

                $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $hashed_password);
                if ($stmt->execute()) {
                    return 'Registration successful';
                } else {
                    return 'An error occurred, please try again later.';
                }
            }
        } else {
            return 'All fields are required';
        }
    }
}

?>
