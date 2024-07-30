<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "register");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if (isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password == $confirm_password) {
      
        $sql = "SELECT * FROM `users` WHERE email='$email'";  // emial ahe ka nhi bgych .
       $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
           
            $sql = "UPDATE `users` SET password='$new_password' WHERE email='$email'";
            if (mysqli_query($con, $sql)) {
                $message = "Password successfully updated. You can now <a href='login.php' class='login-link'>login</a>.";
            } else {
                $message = "Error updating password: " . mysqli_error($con);
            }
        } else {
            $message = "Email not registered. Please register first.";
        }
    } else {
        $message = "Passwords do not match. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
           .login-link {
            text-decoration: none;
            font-weight: bold;
            color: black;
        }
        .login-link:hover {
            color: rgb(154, 198, 238);
            text-decoration: underline;
        }
        body {
            font-family: 'Alegreya', serif;
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
        .reset-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 230px;
            text-align: center;
        }
        .reset-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .reset-container form {
            display: flex;
            flex-direction: column;
        }
        .reset-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .reset-container input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .reset-container button {
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #222;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .reset-container button:hover {
            background-color: rgb(154, 198, 238);
        }
        .reset-container .message {
            margin-top: 10px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="reset-container">
        <h1>Reset Password</h1>
        
        <form action="forgot_password.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <button type="submit" name="reset_password">Reset Password</button>
            <?php
            if (!empty($message)) {
                echo '<div class="message">' . $message . '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
