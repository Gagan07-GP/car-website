
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy a Car - ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            /* Fallback color */
            background-image: url('https://i.pinimg.com/564x/9e/1d/ba/9e1dba4c72773d1456b0f525b055f38b.jpg');
            background-size: cover;
            /* Ensures the image covers the whole area */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents tiling of the image */
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
            padding: 20px 0;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 15px;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: rgba(255, 255, 255, 0.8);
            /* Semi-transparent white */
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .card .price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card a {
            display: inline-block;
            background-color: #222;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
        }

        .card a:hover {
            background-color: rgb(154, 198, 238);
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

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        #search-box {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #222;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 0 4px 4px 0;
            font-size: 16px;
        }

        .search-container button:hover {
            background-color: rgb(154, 198, 238);
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
        .app-buttons {
            display: flex;
            justify-content: start;
            gap: 10px;
        }

        .app-buttons a img {
            width: auto;
            /* Adjust the width as needed */
            height: 40px;
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

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: rgb(154, 198, 238);
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
        <div class="container">
            <h2>Our Cars</h2>
            <div class="search-container">
                <input type="text" id="search-box" placeholder="Search for cars..." onkeyup="searchCars()">
                <button onclick="searchCars()">Search</button>
            </div>
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

        <div class="call-support">
    <a href="https://wa.me/917972937245">
        <img src="support.png" alt="Call Support">
    </a>
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
                    <li><a href="insurance.php">Insurance</a></li>
                    <li><a href="loan_calculator.php">Loan Calculator</a></li>
                    <li><a href="faqs.php">FAQ's</a></li>
                    <li><a href="reviewsandnews.php">Reviews & News</a></li>
                    
 
                </ul>
            </div>
            <div>
                
                    <h2>Our Mobile App</h2>
                    <div class="app-buttons">
                        <a href="https://www.apple.com/app-store/" target="_blank">
                            <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/app-store-badge-us-black-1.png" alt="Download on the App Store">
                        </a>
                        <a href="https://play.google.com/store" target="_blank">
                            <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/google-play-badge-us-1.png" alt="Get it on Google Play">
                        </a>
                    
                </div>
                <h2>Follow Us</h2>
                <address class="address-section">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/qBcRgTb8UinKXaRN/?mibextid=qi2Omg" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/ManjunathGavan3?t=APskPdXRccLGdoV7WE6Shg&s=08" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/manjunath_0724?igsh=Z290bXpod2V6aHVk" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/manjunath-gavandi/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@fang982" target="_blank"><i class="fab fa-youtube"></i></a>
                        <br>
                        <br>
                    </div>

                </address>
                <h2>Address :</h2>
                <p>HAL QUATERS<br>
                    MARATHAHALLI<br>
                    BENGALURU,560006</p>
            </div>
        </div>
    </footer>

</body>

</html>