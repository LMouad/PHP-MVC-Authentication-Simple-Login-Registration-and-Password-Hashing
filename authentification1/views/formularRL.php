<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login or Register</h2>

        <!-- Registration Form (Inscription) -->
        <h4>Register</h4>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="reg_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="reg_username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="reg_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="reg_password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="reg_confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="reg_confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>

        <hr>

        <!-- Login Form (Connexion) -->
        <h4>Login</h4>
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="login_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="login_username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="login_password" class="form-label">Password</label>
                <input type="password" class="form-control" id="login_password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS (for any future dynamic elements you may add) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
