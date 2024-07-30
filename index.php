<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThriftTrove</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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


        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .hero,
        .partners-section {
            position: relative;
            z-index: 1;
        }

        .hero {
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 1px 0;
            position: relative;
            z-index: 1;
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

        .hero h1 {
            margin: 0;
            font-size: 40px;
            color: whitesmoke;
            font-weight: 500px;
            filter: drop-shadow(1px 14px 10px rgb(173, 207, 20));
        }

        .hero p {
            font-size: 18px;
            color: whitesmoke;
            font-weight: bolder;
            filter: drop-shadow(1px 14px 10px rgb(173, 207, 20));
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
            position: relative;
            z-index: 1;
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
            footer ul,
            footer address {
                font-size: 12px;
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
            footer ul,
            footer address {
                font-size: 8px;
            }

            .footer-section {
                flex-direction: column;
            }

            .footer-section>div {
                margin: 8px 0;
            }
        }

        .popular-categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px 0;
        }

        .category-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .category-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            opacity: 0.9;
        }

        .category-card img {
            width: 100%;
            height: 150px;
            object-fit: fill;
        }

        .category-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .category-card a {
            display: block;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            margin: 10px 0;
        }

        .category-card a:hover {
            text-decoration: underline;
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

        .container h2 {
            color: black;
        }

        .partners-section {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px 0;
            text-align: center;
            color: #fff;
        }

        .partners-section h2 {
            margin-bottom: 20px;
            color: white;
        }

        .partners-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            flex-wrap: nowrap;
            /* Prevent wrapping */
            overflow: hidden;
            /* Hide overflow */
            width: 100%;
            /* Full width */
            animation: scroll 20s linear infinite;
            /* Add animation */
        }

        .partners-logos img {
            height: 80px;
            width: 120px;
            /* Ensures all logos have the same width */
            object-fit: contain;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
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

        .maintenance-guides {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px 0;
        }

        .guide-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            opacity: 0.9;
            transition: transform 0.3s ease-in-out;
        }

        .guide-card:hover {
            transform: scale(1.05);
        }

        .guide-card iframe {
            width: 100%;
            height: 200px;
        }

        .guide-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .guide-card p {
            font-size: 14px;
            padding: 0 10px 10px;
        }

        @media (max-width: 768px) {
            .guide-card iframe {
                height: 150px;
            }

            .guide-card h3 {
                font-size: 16px;
            }

            .guide-card p {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .guide-card {
                width: 100%;
            }

            .guide-card iframe {
                height: 120px;
            }

            .guide-card h3 {
                font-size: 14px;
            }

            .guide-card p {
                font-size: 10px;
            }
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
    </style>
</head>

<body>
    <video class="video-background" autoplay muted loop>
        <source src="fixback.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <header>
        <div class="container">
            <nav>
                <h1>
                    <img src="racing.png" alt="Car Logo">
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
        <div class="hero" id="home">
            <div class="container">
                <h1>Welcome to Car Reselling Website</h1>
                <p>Your trusted partner for buying and selling cars.</p>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <h2 style="margin-left: 135px; color:white; filter: drop-shadow(1px 14px 10px rgb(173, 207, 20));">
                    Popular Categories</h2>
                <div class="popular-categories">
                    <div class="category-card">
                        <img src="tesla-model-3.jpeg" alt="Tesla Model 3">
                        <h3>Tesla Model 3</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="greyp.png" alt="Porsche 911">
                        <h3>Porsche 911</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="koenig.jpg" alt="Koenigsegg Agera R">
                        <h3>Koenigsegg Agera R</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="urus.jpeg" alt="Lamborghini Urus">
                        <h3>Lamborghini Urus</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="ford.jpeg" alt="Ford Mustang Mach-E">
                        <h3>Ford Mustang Mach-E</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="meserati.jpeg" alt="Maserati GranTurismo">
                        <h3>Maserati GranTurismo</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="bmw1.png" alt="BMW M3">
                        <h3>BMW M3</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                    <div class="category-card">
                        <img src="audi.png" alt="Audi R8">
                        <h3>Audi R8</h3>
                        <a href="buy.php">Shop now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <h2 style="margin-left: 135px; color:white; filter: drop-shadow(1px 14px 10px rgb(173, 207, 20)">
                    Maintenance and Guides
                </h2>
                <div class="maintenance-guides">
                    <div class="guide-card">
                        <iframe width="300" height="200"
                            src="https://www.youtube.com/embed/5ZV_88_C9Rc?si=LlRV-33-ytvQBiYy"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <h3>Basic Car Maintenance Tips</h3>
                        <p>Learn essential tips and tricks for maintaining your car in top condition.</p>
                    </div>
                    <div class="guide-card">
                        <iframe width="300" height="200"
                            src="https://www.youtube.com/embed/BjX79GsALd8?si=7tRD0HIKvRf3mkNY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <h3>DIY Car Repair Guide</h3>
                        <p>A comprehensive guide on how to perform basic car repairs yourself.</p>
                    </div>
                    <div class="guide-card">
                        <iframe width="300" height="200"
                            src="https://www.youtube.com/embed/Noo0YfdbxaM?si=2_c4CzIY0RcYvUnU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <h3>Car Maintenance Basics</h3>
                        <p>An introduction to car maintenance for beginners, covering essential practices to keep your
                            vehicle running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="call-support">
            <a href="https://wa.me/917972937245">
                <img src="support.png" alt="Call Support">
            </a>
        </div>



        <div class="partners-section">
            <div class="container">
                <h2>Our Partners</h2>
                <div class="partners-logos">
                    <a href="https://www.acko.com/">
                        <img src="Acko Insurance.png" alt="Acko Insurance">
                    </a>
                    <a href="https://www.excellusbcbs.com/">
                        <img src="Excellus.png" alt="Excellus">
                    </a>
                    <a href="https://www.cars.com/">
                        <img src="https://spark-v1.cars.com/resources/logos/cars-logo_optimized.png" alt="Cars.com">
                    </a>
                    <a href="https://www.cars24.com/">
                        <img src="https://fastly-production.24c.in/cars24/seo/static/1_20230830_1693395013.png"
                            alt="Cars24">
                    </a>
                    <a href="https://droom.in/">
                        <img src="droom.png" alt="Droom">
                    </a>
                    <a href="https://www.marutisuzukitruevalue.com/">
                        <img src="https://marutisuzukitruevaluecdn2.azureedge.net/-/media/feature/truevalue/header/true-value-logo.webp?modified=20230612084508&la=en&hash=FD1870505A798050535414A018CE301A"
                            alt="True Value">
                    </a>
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