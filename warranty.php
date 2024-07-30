<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
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
            color: #333;
            background-image: url('standard-quality-control-collage.jpg');
            /* Add your background image here */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            align-items: center;
            padding: 20px 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            /* Adjust alpha value for opacity */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        ul {
            font-size: 16px;
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 8px;
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
                <h1>
                    <img src="racing.png" alt="ThriftTrove Logo">
                    ThriftTrove
                </h1>
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
            <h1>Warranty Information</h1>
            <p>
                At ThriftTrove, we understand the importance of providing peace of mind when purchasing a pre-owned
                vehicle. That's why we offer comprehensive warranty options tailored to your needs. Our warranties cover
                a wide range of components and provide various levels of protection to ensure your satisfaction and
                protect your investment.
            </p>
            <h2>Types of Warranties</h2>
            <ul>
                <li><strong>Powertrain Warranty:</strong> Covers major components such as the engine, transmission, and
                    drivetrain.</li>
                <li><strong>Bumper-to-Bumper Warranty:</strong> Provides coverage for most vehicle components, excluding
                    wear and tear items.</li>
                <li><strong>Extended Warranty:</strong> Extends coverage beyond the manufacturer's warranty period,
                    offering additional protection.</li>
                <li><strong>Component-Specific Warranty:</strong> Covers specific vehicle components such as
                    electronics, air conditioning, and more.</li>
            </ul>
            <h2>Benefits of Our Warranties</h2>
            <ul>
                <li>Peace of mind with comprehensive coverage.</li>
                <li>24/7 roadside assistance for emergencies.</li>
                <li>Flexible coverage options to suit your needs.</li>
                <li>Hassle-free claims process.</li>
                <li>Nationwide service network for repairs.</li>
            </ul>
            <p>
                Whether you're purchasing a luxury sedan or a sports car, our warranty options ensure that you can enjoy
                your vehicle with confidence. Contact us today to learn more about our warranty programs and find the
                coverage that's right for you.
            </p>
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