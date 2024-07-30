<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "register");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if (isset($_POST['login'])) {
    // Login form submitted
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $sql = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Email exists, check password
        $user = mysqli_fetch_assoc($result);
        if ($password == $user['password']) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email; // Store email in session
            $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';
            unset($_SESSION['redirect_url']);
            header("Location: $redirect_url"); // Redirect to intended page or profile/home page
            exit();
        } else {
            $message = "Password incorrect. Please try again.";
        }
    } else {
        $message = "Email not registered. Please register first.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            background-color: #fafdff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }
        body::before {
            background: url('car-hero.jpg') no-repeat center center/cover;
            content: "";
            opacity: 0.5;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 230px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .login-container input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .login-container button {
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #222;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: rgb(154, 198, 238);
        }
        .login-container .message {
            margin-top: 10px;
            color: red;
        }
        .login-container .register-link {
            text-align: center;
            margin-top: 10px;
        }
        .login-container .register-link a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }
        .login-container .register-link a:hover {
            text-decoration: underline;
            color: rgb(154, 198, 238);
        }
        .login-container .forgot-password-link {
            margin-top: 10px;
            text-align: center;
        }
        .login-container .forgot-password-link a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }
        .login-container .forgot-password-link a:hover {
            text-decoration: underline;
            color: rgb(154, 198, 238);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login to ThriftTrove</h1>
        
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
            <?php
            if (!empty($message)) {
              echo '<div class="message">' . $message . '</div>';
            }
            ?>
        </form>
        <div class="forgot-password-link">
            <p><a href="forgot_password.php">Forgot Password?</a></p>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>
