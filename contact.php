<?php
$con = mysqli_connect("localhost", "root", "", "contact");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageText = $_POST['message'];

    $sql = "INSERT INTO `contactus` (name, email, message) VALUES ('$name', '$email', '$messageText')";
    
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Registration successful message
        $message = "Your message has been submitted successfully!";
        echo '<script>alert("' . $message . '"); window.location.href = "contact.php";</script>';
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">

    <style>
        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }
        h1,
        h2,
        h3 {
            font-family: 'Alegreya', serif;
        }


        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('858768.jpg') no-repeat center center/cover;
            opacity: 0.9;
            z-index: -1;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        nav h1 {
            font-family: cursive;
            display: flex;
            align-items: center;
        }

        nav h1 img {
            height: 50px;
            margin-right: 10px;
            filter: brightness(0) invert(1);
        }

        .nav-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0px 10px;
            font-weight: bold;
            font-size: 15px;
            padding: 0px 20px;
        }

        nav a:hover {
            text-decoration: underline;
            color: rgb(154, 198, 238);
        }

        .hero {
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }

        .hero h1 {
            margin: 0;
            font-size: 36px;
            color: black;
            text-decoration: underline;
        }

        .hero p {
            font-size: 22px;
            color: black;
            font-weight: bold;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            padding: 20px 0;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            flex-shrink: 0;
        }

        footer h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        footer p,
        footer ul {
            margin: 8px 0;
            font-size: 14px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons img:hover {
            filter: drop-shadow(2px 14px 4px rgba(145, 35, 35, 0.5));
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid white;
            border-radius: 10px;
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 1px 1px 10px black;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: flex-start;
            border-radius: 20px;
        }

        input[type="submit"]:hover {
            background-color: #444;
            filter: drop-shadow(1px 1px 10px rgba(12, 12, 12, 0.5));
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 14px;
            }

            nav a {
                margin: 8px 4px;
                font-size: 10px;
            }

            footer h2 {
                font-size: 22px;
            }

            footer p,
            footer ul {
                font-size: 12px;
            }

            form {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 30px 0;
            }

            .hero h1 {
                font-size: 16px;
            }

            .hero p {
                font-size: 8px;
            }

            nav a {
                margin: 4px;
                font-size: 6px;
            }

            footer h2 {
                font-size: 16px;
            }

            footer p,
            footer ul {
                font-size: 8px;
            }

            .social-icons {
                margin-top: 10px;
            }

            form {
                padding: 5px;
            }
        }

        span {
            padding: 3px;
            text-align: justify;
            color: white;
            font-weight: bold;
            text-decoration: underline;
        }
        .call-support {
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 1000;
        }

        .call-support a {
            display: block;
            width: 60px;
            height: 60px;
            background-color: white;
          
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            
            font-size: 30px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* transition: background-color 0.3s; */
        }

        .call-support a:hover {
            background-color: burlywood;
       
        }

        .call-support img {
            width: 30px;
            height: 30px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div>
                    <h1>
                        <img src="racing.png" alt="ThriftTrove Logo" class="white-logo">
                        ThriftTrove
                    </h1>
                </div>
                <div class="nav-links">
                    <a href="index.php">Home</a>
                    <a href="services.php">Services</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="selltrade.php">Sell/Trade</a>
                    <a href="financing.php">Financing</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="hero" id="contact">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.
                </p>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <form action="contact.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <input type="submit" name="submit" value="Send Message">
                </form>
                <div class="social-icons">
                    <span>or</span>
                    <a href="https://www.instagram.com/manjunath_0724?igsh=Z290bXpod2V6aHVk" target="_blank">
                        <img src="instagram.png" alt="Instagram"></a>
                   
                    <a href="https://chat.whatsapp.com/GmyLro29YmyJB77jeknlZ7" target="_blank">
                        <img src="whatsapp.png" alt="WhatsApp"></a>
                    <a href="https://t.me/Manjunath0724" target="_blank"><img src="telegram.png" alt="Telegram"></a>
                </div>
                <div class="message">
                    <?php
                    if (!empty($message)) {
                        echo '<p>' . $message . '</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <div class="call-support">
    <a href="https://wa.me/917972937245">
        <img src="support.png" alt="Call Support">
    </a>
</div>

    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Car Reselling Website. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
