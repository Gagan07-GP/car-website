<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    echo '<script>
            alert("You need to log in to access this page.");
            window.location.href = "login.php";
          </script>';
    exit();
}

// Database connection
$con = mysqli_connect("localhost", "root", "", "selltrade");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sell Car Form Submission
if (isset($_POST['sellcar'])) {
    $carCompany = $_POST['carCompany'];
    $carModel = $_POST['carModel'];
    $plateNumber = $_POST['plateNumber'];
    $yearOfBuying = $_POST['yearOfBuying'];

    // Handle file upload
    $carImages = [];
    foreach ($_FILES['carImagessell']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['carImagessell']['name'][$key];
        $file_tmp = $_FILES['carImagessell']['tmp_name'][$key];
        $file_store = "uploadssell/" . $file_name;

        if (move_uploaded_file($file_tmp, $file_store)) {
            $carImages[] = $file_store;
        } else {
            die("Failed to upload file: " . $_FILES['carImagessell']['error'][$key]);
        }
    }
    $carImages = implode(",", $carImages);

    // Prepare SQL statement
    $sql = "INSERT INTO sell (carCompany, carModel, plateNumber, yearOfBuying, carImages) VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssiss", $carCompany, $carModel, $plateNumber, $yearOfBuying, $carImages);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $messageSell = "Thank you!Car details have been successfully submitted .We will contact you soon";
            echo '<script>alert("' . $messageSell . '"); window.location.href = "selltrade.php";</script>';
            exit();
        } else {
            die("Error: " . mysqli_stmt_error($stmt));
        }
    } else {
        die("Error preparing statement: " . mysqli_error($con));
    }
}

// Trade Car Form Submission
if (isset($_POST['tradecar'])) {
    $yourCarCompany = $_POST['yourCarCompany'];
    $yourCarModel = $_POST['yourCarModel'];
    $yourPlateNumber = $_POST['yourPlateNumber'];
    $carToBuyCompany = $_POST['carToBuyCompany'];
    $carToBuyModel = $_POST['carToBuyModel'];

    // Handle file upload
    $carImages = [];
    foreach ($_FILES['carImagestrade']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['carImagestrade']['name'][$key];
        $file_tmp = $_FILES['carImagestrade']['tmp_name'][$key];
        $file_store = "uploadstrade/" . $file_name;

        if (move_uploaded_file($file_tmp, $file_store)) {
            $carImages[] = $file_store;
        } else {
            die("Failed to upload file: " . $_FILES['carImagestrade']['error'][$key]);
        }
    }
    $carImages = implode(",", $carImages);

    // Prepare SQL statement
    $sql = "INSERT INTO trade (yourCarCompany, yourCarModel, yourPlateNumber, carToBuyCompany, carToBuyModel, carImages) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssss", $yourCarCompany, $yourCarModel, $yourPlateNumber, $carToBuyCompany, $carToBuyModel, $carImages);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $messageTrade = "Thank you for your support!Trade details have been successfully submitted.We will contact you soon ";
            echo '<script>alert("' . $messageTrade . '"); window.location.href = "selltrade.php";</script>';
            exit();
        } else {
            die("Error: " . mysqli_stmt_error($stmt));
        }
    } else {
        die("Error preparing statement: " . mysqli_error($con));
    }
}

// Close database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell/Trade</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
        h1,
        h2,
        h3 {
            font-family: 'Alegreya', serif;
        }

        body {

            background: url('selltradeimg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            background-color: #fafdff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
            /* background: url('https://s1.paultan.org/image/2014/12/Paultan.org_writers_own_cars_-006.jp'); */
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
            padding: 20px 0;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8);
            /* White background with opacity */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin: 15px;
            padding: 20px;
            text-align: left;
        }


        .form-container h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            font-size: 14px;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            padding: 10px;
            font-size: 14px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #222;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: rgb(154, 198, 238);
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 15px 0;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 10px;
            padding: 20px;
            text-align: left;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .card ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .card ul li {
            margin-bottom: 10px;
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

        .services ul {
            list-style: none;
            padding: 0;
        }

        .services li {
            margin: 8px 0;
            font-size: 14px;
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
        <div class="content">
            <div class="form-container">
                <h2>Sell Your Car</h2>
                <form method="post" enctype="multipart/form-data">
                    <label for="carCompany">Car Company:</label>
                    <input type="text" id="carCompany" name="carCompany" required>
                    <label for="carModel">Car Model:</label>
                    <input type="text" id="carModel" name="carModel" required>
                    <label for="plateNumber">Plate Number:</label>
                    <input type="text" id="plateNumber" name="plateNumber" required>
                    <label for="yearOfBuying">Year of Buying:</label>
                    <input type="number" id="yearOfBuying" name="yearOfBuying" required>
                    <label for="carImagessell">Car Images:</label>
                    <input type="file" id="carImagessell" name="carImagessell[]" multiple required>
                    <button type="submit" name="sellcar">Submit</button>
                </form>
            </div>
            <div class="form-container">
                <h2>Trade Your Car</h2>
                <form method="post" enctype="multipart/form-data">
                    <label for="yourCarCompany">Your Car Company:</label>
                    <input type="text" id="yourCarCompany" name="yourCarCompany" required>
                    <label for="yourCarModel">Your Car Model:</label>
                    <input type="text" id="yourCarModel" name="yourCarModel" required>
                    <label for="yourPlateNumber">Your Plate Number:</label>
                    <input type="text" id="yourPlateNumber" name="yourPlateNumber" required>
                    <label for="yourPlateNumber">Your Car Images</label>
                    <input type="file" id="carImagestrade" name="carImagestrade[]" multiple required>
                    <label for="carToBuyCompany">Car to Buy Company:</label>
                    <input type="text" id="carToBuyCompany" name="carToBuyCompany" required>
                    <label for="carToBuyModel">Car to Buy Model:</label>
                    <input type="text" id="carToBuyModel" name="carToBuyModel" required>
                  
                    <button type="submit" name="tradecar">Submit</button>
                </form>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <h3>Steps to Sell Your Car</h3>
                <ul>
                    <li>Ensure your car is in good condition: Check the engine, tires, and overall maintenance.</li>
                    <li>Gather all necessary documents: Registration, insurance, and service records.</li>
                    <li>Take high-quality photos: Capture the exterior, interior, and any unique features.</li>
                    <li>Set a competitive price: Research similar cars to determine a fair market value.</li>
                    <li>List your car: Use our platform to create a detailed listing with all the gathered information.
                    </li>
                </ul>
            </div>
            <div class="card">
                <h3>Steps to Trade Your Car</h3>
                <ul>
                    <li>Evaluate your current car: Note its condition, mileage, and market value.</li>
                    <li>Research desired car: Find a car that fits your needs and budget.</li>
                    <li>Prepare your car for trade: Clean and fix minor issues to increase its trade-in value.</li>
                    <li>Get a trade-in estimate: Use our tool or visit a dealership to get an estimate for your car.
                    </li>
                    <li>Finalize the trade: Complete the trade process and enjoy your new car.</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
    </footer>
</body>

</html>
