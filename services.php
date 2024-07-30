<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
            opacity: 0.8;
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 14px;
            margin-bottom: 20px;
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

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: fill;
            z-index: -1;
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
    <video class="video-background" autoplay muted loop>
        <source src="carb3.mp4" type="video/mp4">
    </video>
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
            <div class="card">
                <h3>Buy a Car</h3>
                <p>Explore our extensive inventory of high-quality, pre-owned vehicles. Find the perfect car that fits
                    your needs and budget.</p>
                <a href="buy.php">Learn More</a>
            </div>
            <div class="card">
                <h3>Sell a Car</h3>
                <p>Get the best value for your pre-owned vehicle. Our easy and transparent process ensures a fair deal.
                </p>
                <a href="selltrade.php">Learn More</a>
            </div>
            <div class="card">
                <h3>Trade-In</h3>
                <p>Upgrade to your next car with our trade-in program. Get an instant quote and hassle-free trade-in
                    experience.</p>
                <a href="selltrade.php">Learn More</a>
            </div>
            <div class="card">
                <h3>Warranty</h3>
                <p>Enjoy peace of mind with our comprehensive warranty options. Protect your investment with coverage
                    that suits your needs.</p>
                <a href="warranty.php">Learn More</a>
            </div>
            <div class="card">
                <h3>Insurance</h3>
                <p>Protect your vehicle with our reliable insurance plans. Get coverage that gives you peace of mind on
                    the road.</p>
                <a href="insurance.php">Learn More</a>
            </div>
            <div class="card">
                <h3>Loan Calculator</h3>
                <p>Calculate your car loan payments easily with our loan calculator. Get an estimate of your monthly
                    payments.</p>
                <a href="loan_calculator.php">Calculate Now</a>
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
                        <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/app-store-badge-us-black-1.png"
                            alt="Download on the App Store">
                    </a>
                    <a href="https://play.google.com/store" target="_blank">
                        <img src="https://beta.cstatic-images.com/medium/in/v2/static/mobile-apps/google-play-badge-us-1.png"
                            alt="Get it on Google Play">
                    </a>

                </div>
                <h2>Follow Us</h2>
<address class="address-section">
    <div class="social-icons">
        <a href="https://www.facebook.com/share/qBcRgTb8UinKXaRN/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/ManjunathGavan3?t=APskPdXRccLGdoV7WE6Shg&s=08" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/manjunath_0724?igsh=Z290bXpod2V6aHVk" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/manjunath-gavandi/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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