
<?php
$con = mysqli_connect("localhost", "root", "", "register");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Checking email if present
    $checkEmailQuery = "SELECT * FROM `users` WHERE email='$email'";
    $checkEmailResult = mysqli_query($con, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        //display email present
        $message = "Email already exists. Please use a different email.";
        echo '<script>alert("' . $message . '"); window.location.href = "register.php";</script>';
        exit();
    } else {
        //to insert operation
        $sql = "INSERT INTO `users` (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            
            $message = "Registration successful!";
            echo '<script>alert("' . $message . '"); window.location.href = "login.php";</script>';
            exit();
        } else {
            die(mysqli_error($con));
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
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
        body::before{
            background: url('car-hero.jpg') no-repeat center center/cover;
            content:"";
            opacity: 0.5;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
        }
        .register-container {
            background-color: rgb(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            /* backdrop-filter: blur(10px); */
        }
        .register-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .register-container form {
            display: flex;
            flex-direction: column;
        }
        .register-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .register-container input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .register-container button {
            padding: 10px;
            border: none;
            border-radius: 20px;
            background-color: #222;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: rgb(154, 198, 238);
        }
        .register-container .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .register-container .login-link a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }
        .register-container .login-link a:hover {
            text-decoration: underline;
            color: rgb(154, 198, 238);
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register at ThriftTrove</h1>
        <form action="register.php" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit"name="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
