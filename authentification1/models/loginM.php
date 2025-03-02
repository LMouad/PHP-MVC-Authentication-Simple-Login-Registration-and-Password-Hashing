<?php
function login($conn, $username, $password) {
    try {

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header('Location: ../views/login.php');  // Change to the appropriate page
                exit();
            } else {
                return "Invalid password.";
            }
        } else {
            return "No user found with that username.";
        }
    } catch (PDOException $e) {
        return "Database error: " . $e->getMessage();
    }
}
?>
