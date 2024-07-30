<?php
$con = mysqli_connect("localhost", "root", "", "financing");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if (isset($_POST['Submit application'])) {
    $plateNumber = $_POST['plate-number'];
    $price = $_POST['price'];
    $carName = $_POST['car-name'];
    $paymentMethod = $_POST['payment-method'];

    $sql = "INSERT INTO financing_applications (plate_number, price, car_name, payment_method) VALUES ('$plateNumber', '$price', '$carName', '$paymentMethod')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        $message = "Your financing application has been submitted successfully!";
        echo '<script>alert("' . $message . '"); window.location.href = "financing.php";</script>';
        exit();
    } else {
        die(mysqli_error($con));
    }
}
?>
