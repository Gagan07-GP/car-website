<?php
// Start the session
session_start();

// Database configuration
$servername = "localhost"; // Change this if your database is on a different server
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "financing";     // Your database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Store the intended URL in a session variable
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    // If not logged in, use JavaScript to show an alert and redirect
    echo "<script>alert('Please log in to continue.');
          window.location.href = 'login.php';</script>";
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $carName = $_POST['car-name'];
    $plateNumber = $_POST['plate-number'];
    $price = $_POST['price'];
    $paymentMethod = $_POST['payment-method'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO financing_application (car_name, plate_number, price, payment_method) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssis", $carName, $plateNumber, $price, $paymentMethod);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Application submitted successfully.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<script>alert('Error preparing statement: " . $conn->error . "');</script>";
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financing - ThriftTrove</title>
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
            background: url("moneycar.jpg") no-repeat center center/cover;
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

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .form-container input,
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .payment-method:hover {
            cursor: pointer;
        }

        .payment-methods {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .payment-method {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .payment-method input[type="radio"] {
            margin-right: 10px;
        }

        .payment-method label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .payment-method img {
            margin-left: 10px;
            height: 24px;
            cursor: pointer;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
        }

        footer h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        footer p,
        footer ul,
        footer address {
            margin: 8px 0;
            font-size: 14px;
        }

        .footer-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            display: flex;
            justify-content: space-between;
            text-align: left;
            flex-wrap: wrap;
        }

        .footer-section>div {
            flex: 1;
            margin: 8px;
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
        <div class="form-container">
            <h2>Financing Application</h2>
            <form action="financing.php" method="post">
                <label for="car-name">Car Name:</label>
                <select id="car-name" name="car-name" required>
                    <option value=""></option>
                    <option value="Tesla Model 3" data-price="35000" data-plate="LKV-5369">Tesla Model 3</option>
                    <option value="Porsche 911" data-price="90000" data-plate="YXZ-1234">Porsche 911</option>
                    <option value="Koenigsegg Agera R" data-price="1200000" data-plate="MTN-7890">Koenigsegg Agera R
                    </option>
                    <option value="Lamborghini Urus" data-price="200000" data-plate="NYC-0264">Lamborghini Urus</option>
                    <option value="Ford Mustang Mach-E" data-price="50000" data-plate="BCK-4321">Ford Mustang Mach-E
                    </option>
                    <option value="BMW X7" data-price="75000" data-plate="SUN-9876">BMW X7</option>
                    <option value="Jeep Grand Cherokee" data-price="55000" data-plate="DES-2468">Jeep Grand Cherokee
                    </option>
                    <option value="Mercedes-Benz S-Class" data-price="110000" data-plate="ATL-5432">Mercedes-Benz
                        S-Class</option>
                    <option value="Audi Q8" data-price="85000" data-plate="WND-6543">Audi Q8</option>
                    <option value="Range Rover Evoque" data-price="60000" data-plate="DET-8765">Range Rover Evoque
                    </option>
                    <option value="Cadillac Escalade" data-price="95000" data-plate="CLT-7890">Cadillac Escalade
                    </option>
                    <option value="Jaguar F-PACE" data-price="70000" data-plate="PDX-3456">Jaguar F-PACE</option>
                    <option value="GMC Yukon" data-price="85000" data-plate="MEM-6789">GMC Yukon</option>
                    <option value="Volvo XC90" data-price="65000" data-plate="SEA-2109">Volvo XC90</option>
                    <option value="McLaren 720S" data-price="300000" data-plate="VEG-4321">McLaren 720S</option>
                    <option value="Rolls-Royce Phantom" data-price="450000" data-plate="NOL-7654">Rolls-Royce Phantom
                    </option>
                    <option value="Mercedes-Benz G-Class" data-price="150000" data-plate="RIC-1234">Mercedes-Benz
                        G-Class</option>
                    <option value="Ferrari 488" data-price="250000" data-plate="BAL-5678">Ferrari 488</option>
                    <option value="Audi R8" data-price="180000" data-plate="BOS-8765">Audi R8</option>
                    <option value="BMW M3" data-price="75000" data-plate="LKV-5368">BMW M3</option>
                    <option value="Maserati GranTurismo" data-price="120000" data-plate="YXZ-1234">Maserati GranTurismo
                    </option>

                </select>
                <label for="plate-number">Plate Number:</label>
                <input type="text" id="plate-number" name="plate-number" readonly required>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" readonly required>

                <h2>Payment Method</h2>
                <div class="payment-methods">
                    <div class="payment-method">
                        <input type="radio" id="paypal" name="payment-method" value="paypal" required>
                        <label for="paypal">
                            Paypal
                            <img src="paypal.png" alt="Paypal">
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="Skrill" name="payment-method" value="Skrill" required>
                        <label for="Skrill">
                            Skrill
                            <img src="money-booker.png" alt="Skrill">
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="netbanking" name="payment-method" value="NetBanking" required>
                        <label for="netbanking">
                            NetBanking
                            <img src="netbankinglogo.png" alt="NetBanking">
                        </label>
                    </div>
                    <div class="payment-method">
                        <input type="radio" id="cod" name="payment-method" value="CashOnDelivery" required>
                        <label for="cod">
                            Cash
                            <img src="cashondeliverylogo.png" alt="Cash On Delivery">
                        </label>
                    </div>
                </div>

                <button type="submit" name="submit">Submit Application</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('car-name').addEventListener('change', function () {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            var plateNumber = selectedOption.getAttribute('data-plate');

            if (price && plateNumber) {
                document.getElementById('price').value = price;
                document.getElementById('plate-number').value = plateNumber;
            } else {
                document.getElementById('price').value = '';
                document.getElementById('plate-number').value = '';
            }
        });
    </script>
</body>

</html>