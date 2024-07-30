<?php
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
        }
    }
    $carImages = implode(",", $carImages);

    // Prepare SQL statement
    $sql = "INSERT INTO sell (carCompany, carModel, plateNumber, yearOfBuying, carImages) VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sssis", $carCompany, $carModel, $plateNumber, $yearOfBuying, $carImages);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        $messageSell = "Car details have been successfully submitted!";
        echo '<script>alert("' . $messageSell . '"); window.location.href = "selltrade.php";</script>';
        exit();
    } else {
        die("Error: " . mysqli_error($con));
    }

    // Close statement
    mysqli_stmt_close($stmt);
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
        }
    }
    $carImages = implode(",", $carImages);

    // Prepare SQL statement
    $sql = "INSERT INTO trade (yourCarCompany, yourCarModel, yourPlateNumber, carToBuyCompany, carToBuyModel, carImages) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $yourCarCompany, $yourCarModel, $yourPlateNumber, $carToBuyCompany, $carToBuyModel, $carImages);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        $messageTrade = "Trade details have been successfully submitted!";
        echo '<script>alert("' . $messageTrade . '"); window.location.href = "selltrade.php";</script>';
        exit();
    } else {
        die("Error: " . mysqli_error($con));
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Close database connection
mysqli_close($con);
?>






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
                        <label for="carToBuyCompany">Car to Buy Company:</label>
                        <input type="text" id="carToBuyCompany" name="carToBuyCompany" required>
                        <label for="carToBuyModel">Car to Buy Model:</label>
                        <input type="text" id="carToBuyModel" name="carToBuyModel" required>
                        <label for="carImagestrade">Car Images:</label>
                        <input type="file" id="carImagestrade" name="carImagestrade[]" multiple required>
                        <button type="submit" name="tradecar">Submit</button>
                    </form>




                    <!-- buy cars 0 -->
                    <div class="card">
                    <img src="tesla-model-3.jpeg" alt="Tesla Model 3">
                    <h3>Tesla Model 3</h3>
                    <p>Electric, 2020, 30,000 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5369 </p>
                    <p class="price">$35,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="greyp.png" alt="Porsche 911">
                    <h3>Porsche 911</h3>
                    <p>Petrol, 2019, 25,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$90,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="koenig.jpg" alt="Koenigsegg Agera R">
                    <h3>Koenigsegg Agera R</h3>
                    <p>Petrol, 2018, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MTN-7890</p>
                    <p class="price">$1,200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="urus.jpeg" alt="Lamborghini Urus">
                    <h3>Lamborghini Urus</h3>
                    <p>Petrol, 2021, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> NYC- 0264</p>
                    <p class="price">$200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ford.jpeg" alt="Ford Mustang Mach-E">
                    <h3>Ford Mustang Mach-E</h3>
                    <p>Electric, 2022, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BCK-4321 </p>
                    <p class="price">$50,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="bmwx7.png" alt="BMW X7">
                    <h3>BMW X7</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> SUN-9876 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jeep-grand-cherokee.jpeg" alt="Jeep Grand Cherokee">
                    <h3>Jeep Grand Cherokee</h3>
                    <p>Petrol, 2021, 15,000 miles</p>
                    <p><strong>Plate No:-</strong> DES-2468 </p>
                    <p class="price">$55,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-s-class.jpeg" alt="Mercedes-Benz S-Class">
                    <h3>Mercedes-Benz S-Class</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> ATL-5432 </p>
                    <p class="price">$110,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="audi-q8.jpeg" alt="Audi Q8">
                    <h3>Audi Q8</h3>
                    <p>Petrol, 2020, 18,000 miles</p>
                    <p><strong>Plate No:-</strong> WND-6543 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="range-rover-evoque.jpeg" alt="Range Rover Evoque">
                    <h3>Range Rover Evoque</h3>
                    <p>Diesel, 2020, 22,000 miles</p>
                    <p><strong>Plate No:-</strong> DET-8765 </p>
                    <p class="price">$60,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="cadillac-escalade.jpeg" alt="Cadillac Escalade">
                    <h3>Cadillac Escalade</h3>
                    <p>Petrol, 2021, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> CLT-7890 </p>
                    <p class="price">$95,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jaguar-f-pace.jpeg" alt="Jaguar F-PACE">
                    <h3>Jaguar F-PACE</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> PDX-3456 </p>
                    <p class="price">$70,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="gmc-yukon.jpeg" alt="GMC Yukon">
                    <h3>GMC Yukon</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MEM-6789 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="volvo-xc90.jpeg" alt="Volvo XC90">
                    <h3>Volvo XC90</h3>
                    <p>Hybrid, 2021, 9,000 miles</p>
                    <p><strong>Plate No:-</strong> SEA-2109 </p>
                    <p class="price">$65,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mclaren-720s.png" alt="McLaren 720S">
                    <h3>McLaren 720S</h3>
                    <p>Petrol, 2020, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> VEG-4321 </p>
                    <p class="price">$300,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="rolls-royce-phantom.png" alt="Rolls-Royce Phantom">
                    <h3>Rolls-Royce Phantom</h3>
                    <p>Petrol, 2021, 3,000 miles</p>
                    <p><strong>Plate No:-</strong> NOL-7654 </p>
                    <p class="price">$450,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-g-class.png" alt="Mercedes-Benz G-Class">
                    <h3>Mercedes-Benz G-Class</h3>
                    <p>Petrol, 2020, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> RIC-1234 </p>
                    <p class="price">$150,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ferrari-488.png" alt="Ferrari 488">
                    <h3>Ferrari 488</h3>
                    <p>Petrol, 2019, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BAL-5678 </p>
                    <p class="price">$250,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="audi.png" alt="Audi R8">
                    <h3>Audi R8</h3>
                    <p>Petrol, 2022, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> BOS-8765 </p>
                    <p class="price">$180,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="bmw1.png" alt="BMW M3">
                    <h3>BMW M3</h3>
                    <p>Petrol, 2021, 7,500 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5368 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="meserati.jpeg" alt="Maserati GranTurismo">
                    <h3>Maserati GranTurismo</h3>
                    <p>Petrol, 2020, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$120,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>


                <!-- extra code of buy car page car model -->
                <div class="container">
            <h2>Our Cars</h2>
            <div class="content">
                <div class="card">
                    <img src="tesla-model-3.jpeg" alt="Tesla Model 3">
                    <h3>Tesla Model 3</h3>
                    <p>Electric, 2020, 30,000 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5369 </p>
                    <p class="price">$35,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="greyp.png" alt="Porsche 911">
                    <h3>Porsche 911</h3>
                    <p>Petrol, 2019, 25,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$90,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="koenig.jpg" alt="Koenigsegg Agera R">
                    <h3>Koenigsegg Agera R</h3>
                    <p>Petrol, 2018, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MTN-7890</p>
                    <p class="price">$1,200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="urus.jpeg" alt="Lamborghini Urus">
                    <h3>Lamborghini Urus</h3>
                    <p>Petrol, 2021, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> NYC- 0264</p>
                    <p class="price">$200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ford.jpeg" alt="Ford Mustang Mach-E">
                    <h3>Ford Mustang Mach-E</h3>
                    <p>Electric, 2022, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BCK-4321 </p>
                    <p class="price">$50,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="bmwx7.png" alt="BMW X7">
                    <h3>BMW X7</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> SUN-9876 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jeep-grand-cherokee.jpeg" alt="Jeep Grand Cherokee">
                    <h3>Jeep Grand Cherokee</h3>
                    <p>Petrol, 2021, 15,000 miles</p>
                    <p><strong>Plate No:-</strong> DES-2468 </p>
                    <p class="price">$55,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-s-class.jpeg" alt="Mercedes-Benz S-Class">
                    <h3>Mercedes-Benz S-Class</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> ATL-5432 </p>
                    <p class="price">$110,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="audi-q8.jpeg" alt="Audi Q8">
                    <h3>Audi Q8</h3>
                    <p>Petrol, 2020, 18,000 miles</p>
                    <p><strong>Plate No:-</strong> WND-6543 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="range-rover-evoque.jpeg" alt="Range Rover Evoque">
                    <h3>Range Rover Evoque</h3>
                    <p>Diesel, 2020, 22,000 miles</p>
                    <p><strong>Plate No:-</strong> DET-8765 </p>
                    <p class="price">$60,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="cadillac-escalade.jpeg" alt="Cadillac Escalade">
                    <h3>Cadillac Escalade</h3>
                    <p>Petrol, 2021, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> CLT-7890 </p>
                    <p class="price">$95,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jaguar-f-pace.jpeg" alt="Jaguar F-PACE">
                    <h3>Jaguar F-PACE</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> PDX-3456 </p>
                    <p class="price">$70,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="gmc-yukon.jpeg" alt="GMC Yukon">
                    <h3>GMC Yukon</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MEM-6789 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="volvo-xc90.jpeg" alt="Volvo XC90">
                    <h3>Volvo XC90</h3>
                    <p>Hybrid, 2021, 9,000 miles</p>
                    <p><strong>Plate No:-</strong> SEA-2109 </p>
                    <p class="price">$65,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mclaren-720s.png" alt="McLaren 720S">
                    <h3>McLaren 720S</h3>
                    <p>Petrol, 2020, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> VEG-4321 </p>
                    <p class="price">$300,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="rolls-royce-phantom.png" alt="Rolls-Royce Phantom">
                    <h3>Rolls-Royce Phantom</h3>
                    <p>Petrol, 2021, 3,000 miles</p>
                    <p><strong>Plate No:-</strong> NOL-7654 </p>
                    <p class="price">$450,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-g-class.png" alt="Mercedes-Benz G-Class">
                    <h3>Mercedes-Benz G-Class</h3>
                    <p>Petrol, 2020, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> RIC-1234 </p>
                    <p class="price">$150,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ferrari-488.png" alt="Ferrari 488">
                    <h3>Ferrari 488</h3>
                    <p>Petrol, 2019, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BAL-5678 </p>
                    <p class="price">$250,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="audi.png" alt="Audi R8">
                    <h3>Audi R8</h3>
                    <p>Petrol, 2022, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> BOS-8765 </p>
                    <p class="price">$180,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="bmw1.png" alt="BMW M3">
                    <h3>BMW M3</h3>
                    <p>Petrol, 2021, 7,500 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5368 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="meserati.jpeg" alt="Maserati GranTurismo">
                    <h3>Maserati GranTurismo</h3>
                    <p>Petrol, 2020, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$120,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>



            </div>
        </div>
    </main>
    <footer>
        <div class="footer-section">
            <div>
                <h2>About Us</h2>
                <p>At ThriftTrove, we specialize in connecting buyers and sellers of high-quality, pre-owned vehicles.
                    Our mission is to provide a seamless and trustworthy car reselling experience for all our customers.
                    <br>
                    <a href="moreinfo.php" style="text-decoration: none;color :red">More Info</a>

                </p>
            </div>
            <div class="services">
                <h2>Services</h2>
                <ul>
                    <li><a href="buy.php">Buy a Car</a></li>
                    <li><a href="selltrade.php">Sell a Car</a></li>
                    <li><a href="selltrade.php">Trade-In</a></li>
                    <li><a href="financing.php">Financing</a></li>
                    <li><a href="warranty.php">Warranty</a></li>
                    <li><a href="insurance.php" target="_blank">Insurance</a></li>
                    <li><a href="loan_calculator.php">Loan Calculator</a></li>
                </ul>
            </div>
            <div>
                <h2>Contact Us</h2>
                <address class="address-section">
                    <p>HAL QUATERS<br>
                        MARATHAHALLI<br>
                        BENGALURU,560006</P>
                    <SPAN STYLE="font-weight: bold; font-size: 17px;">Mail on:-</SPAN><br><BR>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=manjunathgavandi8161@gmail.com&su=SUBJECT&body=BODY
">info@thrifttrove.com</a>


                </address>
            </div>
        </div>
    </footer>
</body>

</html>


<!-- our cars for this -->
<div class="card">
                    <img src="tesla-model-3.jpeg" alt="Tesla Model 3">
                    <h3>Tesla Model 3</h3>
                    <p>Electric, 2020, 30,000 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5369 </p>
                    <p class="price">$35,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="greyp.png" alt="Porsche 911">
                    <h3>Porsche 911</h3>
                    <p>Petrol, 2019, 25,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$90,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="koenig.jpg" alt="Koenigsegg Agera R">
                    <h3>Koenigsegg Agera R</h3>
                    <p>Petrol, 2018, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MTN-7890</p>
                    <p class="price">$1,200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="urus.jpeg" alt="Lamborghini Urus">
                    <h3>Lamborghini Urus</h3>
                    <p>Petrol, 2021, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> NYC- 0264</p>
                    <p class="price">$200,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ford.jpeg" alt="Ford Mustang Mach-E">
                    <h3>Ford Mustang Mach-E</h3>
                    <p>Electric, 2022, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BCK-4321 </p>
                    <p class="price">$50,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="bmwx7.png" alt="BMW X7">
                    <h3>BMW X7</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> SUN-9876 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jeep-grand-cherokee.jpeg" alt="Jeep Grand Cherokee">
                    <h3>Jeep Grand Cherokee</h3>
                    <p>Petrol, 2021, 15,000 miles</p>
                    <p><strong>Plate No:-</strong> DES-2468 </p>
                    <p class="price">$55,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-s-class.jpeg" alt="Mercedes-Benz S-Class">
                    <h3>Mercedes-Benz S-Class</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> ATL-5432 </p>
                    <p class="price">$110,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="audi-q8.jpeg" alt="Audi Q8">
                    <h3>Audi Q8</h3>
                    <p>Petrol, 2020, 18,000 miles</p>
                    <p><strong>Plate No:-</strong> WND-6543 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="range-rover-evoque.jpeg" alt="Range Rover Evoque">
                    <h3>Range Rover Evoque</h3>
                    <p>Diesel, 2020, 22,000 miles</p>
                    <p><strong>Plate No:-</strong> DET-8765 </p>
                    <p class="price">$60,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="cadillac-escalade.jpeg" alt="Cadillac Escalade">
                    <h3>Cadillac Escalade</h3>
                    <p>Petrol, 2021, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> CLT-7890 </p>
                    <p class="price">$95,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="jaguar-f-pace.jpeg" alt="Jaguar F-PACE">
                    <h3>Jaguar F-PACE</h3>
                    <p>Diesel, 2020, 20,000 miles</p>
                    <p><strong>Plate No:-</strong> PDX-3456 </p>
                    <p class="price">$70,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="gmc-yukon.jpeg" alt="GMC Yukon">
                    <h3>GMC Yukon</h3>
                    <p>Petrol, 2021, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> MEM-6789 </p>
                    <p class="price">$85,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="volvo-xc90.jpeg" alt="Volvo XC90">
                    <h3>Volvo XC90</h3>
                    <p>Hybrid, 2021, 9,000 miles</p>
                    <p><strong>Plate No:-</strong> SEA-2109 </p>
                    <p class="price">$65,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mclaren-720s.png" alt="McLaren 720S">
                    <h3>McLaren 720S</h3>
                    <p>Petrol, 2020, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> VEG-4321 </p>
                    <p class="price">$300,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="rolls-royce-phantom.png" alt="Rolls-Royce Phantom">
                    <h3>Rolls-Royce Phantom</h3>
                    <p>Petrol, 2021, 3,000 miles</p>
                    <p><strong>Plate No:-</strong> NOL-7654 </p>
                    <p class="price">$450,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="mercedes-benz-g-class.png" alt="Mercedes-Benz G-Class">
                    <h3>Mercedes-Benz G-Class</h3>
                    <p>Petrol, 2020, 12,000 miles</p>
                    <p><strong>Plate No:-</strong> RIC-1234 </p>
                    <p class="price">$150,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>
                <div class="card">
                    <img src="ferrari-488.png" alt="Ferrari 488">
                    <h3>Ferrari 488</h3>
                    <p>Petrol, 2019, 8,000 miles</p>
                    <p><strong>Plate No:-</strong> BAL-5678 </p>
                    <p class="price">$250,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="audi.png" alt="Audi R8">
                    <h3>Audi R8</h3>
                    <p>Petrol, 2022, 5,000 miles</p>
                    <p><strong>Plate No:-</strong> BOS-8765 </p>
                    <p class="price">$180,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="bmw1.png" alt="BMW M3">
                    <h3>BMW M3</h3>
                    <p>Petrol, 2021, 7,500 miles</p>
                    <p><strong>Plate No:-</strong> LKV-5368 </p>
                    <p class="price">$75,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>

                <div class="card">
                    <img src="meserati.jpeg" alt="Maserati GranTurismo">
                    <h3>Maserati GranTurismo</h3>
                    <p>Petrol, 2020, 10,000 miles</p>
                    <p><strong>Plate No:-</strong> YXZ-1234 </p>
                    <p class="price">$120,000</p>
                    <a href="viewdetails.php">View Details</a>
                    <a href="financing.php" class="buy-button">Shop Now</a>
                </div>



                <!-- css of login page -->
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