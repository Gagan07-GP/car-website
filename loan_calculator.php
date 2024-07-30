<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            background-color: #fafdff;
            background-image: url('https://th.bing.com/th/id/OIP.BNUGQxfGCpHEerl-FjxGUwHaEJ?w=540&h=303&rs=1&pid=ImgDetMain');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
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
            padding: 35px 0;
        }

        .calculator {
            max-width: 500px; /* Reduced width */
            min-height: 400px; /* Increased height */
            margin: 0 auto;
            padding: 30px; /* Increased padding */
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-sizing: border-box; /* Ensures padding does not affect width */
        }

        .calculator h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #222;
        }

        .calculator input {
            width: calc(100% - 20px);
            padding: 12px; /* Increased padding */
            margin: 15px 0; /* Increased margin */
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .calculator button {
            padding: 12px 25px; /* Increased padding */
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .calculator button:hover {
            background-color: rgb(154, 198, 238);
        }

        .calculator .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        .calculator .apply-loan {
            margin-top: 15px;
            font-size: 14px;
        }

        .calculator .apply-loan a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }

        .calculator .apply-loan a:hover {
            text-decoration: underline;
            color: rgb(154, 198, 238);
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            flex-shrink: 0;
        }

        footer p {
            margin: 8px 0;
            font-size: 14px;
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
                <div class="auth-links">
                    <a href="login.php">Login</a>
                    <a href="register.php">Register</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="calculator">
            <h2>Loan Calculator</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="number" name="loanAmount" placeholder="Loan Amount" required>
                <input type="number" name="interestRate" placeholder="Interest Rate (%)" required>
                <input type="number" name="loanYears" placeholder="Loan Term (Years)" required>
                <button type="submit">Calculate</button>
            </form>
            <div class="apply-loan">
                If you want to apply for a car loan, <a href="https://www.hdfcbank.com/personal/borrow/popular-loans/new-car-loan">click here</a>.
            </div>
            <div class="result">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $amount = floatval($_POST['loanAmount']);
                    $interestRate = floatval($_POST['interestRate']) / 100 / 12;
                    $years = intval($_POST['loanYears']);
                    $numberOfPayments = $years * 12;

                    $monthlyPayment = ($amount * $interestRate) / (1 - pow(1 + $interestRate, -$numberOfPayments));

                    if (!is_nan($monthlyPayment) && ($monthlyPayment !== INF)) {
                        echo 'Monthly Payment: $' . number_format($monthlyPayment, 2);
                    } else {
                        echo 'Please enter valid values';
                    }
                }
                ?>
            </div>
        </div>
         
        <div class="call-support">
    <a href="https://wa.me/917972937245">
        <img src="support.png" alt="Call Support">
    </a>
</div>

    </main>
    <footer>
        <p>&copy; 2024 ThriftTrove Car Reselling. All Rights Reserved.</p>
    </footer>
</body>

</html>
