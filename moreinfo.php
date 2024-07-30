<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
        h1,
        h2,
        h3 {
            font-family: 'Alegreya', serif;
        }

        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            background-color: #fafdff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
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

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            /* padding: 0px 0; */
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            flex-shrink: 0;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        .about-section {
            text-align: center;
            padding: 50px 0;
        }

        .about-section h1 {
            font-size: 36px;
            color: #222;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 18px;
            color: #555;
            margin: 20px 0;
        }

        .services-section {
            background-color: #f3f3f3;
            padding: 50px 0;
            text-align: center;
        }

        .services-section h2 {
            font-size: 28px;
            color: #222;
            margin-bottom: 20px;
        }

        .services-section ul {
            list-style: none;
            padding: 0;
        }

        .services-section li {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        .auth-links {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 10px;
            font-weight: bold;
            font-size: 12px;
            border: 3px solid white;
            padding: 7px;
            border-radius: 10px;
        }

        .auth-links a:hover {
            text-decoration: none;
            background-color: rgb(154, 198, 238);
            color: white;
        }

        .services a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .services a:hover {
            border: 1px solid white;
            padding: 5px 5px;
            margin: 2px 2px;
            border-radius: 5px;
            box-shadow: 0 4px 8px blue;
        }

        .address-section a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .address-section a:hover {
            border: 1px solid white;
            padding: 5px 5px;
            margin: 5px 5px;
            border-radius: 5px;
            box-shadow: 0 4px 8px blue;
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

        @media (max-width: 768px) {
            nav a {
                margin: 8px 4px;
                font-size: 10px;
            }

            footer p {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            nav a {
                margin: 4px;
                font-size: 6px;
            }

            footer p {
                font-size: 8px;
            }
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
                <div class="auth-links">
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="content">
            <div class="about-section">
                <div class="container">
                    <h1>About Us</h1>
                    <p>Welcome to ThriftTrove, your trusted partner for buying and selling high-quality, pre-owned
                        vehicles. We are committed to providing a seamless and trustworthy car reselling experience for
                        all our customers. Our platform connects buyers and sellers, ensuring that everyone finds the
                        perfect match for their needs.<br>Project Managed By:-
                    <p style="color:blue">Manjunath Rajkumar Gavandi</p>
                    <p style="color:blue">Sanket Balasaheb Mengale</p>
                    </p>
                </div>
            </div>

            <div class="services-section">
                <div class="container">
                    <h2>Our Services</h2>
                    <ul>
                        <li>Buy a Car</li>
                        <li>Sell a Car</li>
                        <li>Trade-In</li>
                        <li>Financing</li>
                        <li>Warranty</li>
                        <li>Customer Support</li>
                        <li>Loan Calculator</li>

                    </ul>
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
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
    </footer>

</body>

</html>