<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThriftTrove - Reviews and News</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
        /* Inherited styles from previous code */

        h1, h2, h3 {
            font-family: 'Alegreya', serif;
        }

        body {
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
            background-image: url('https://th.bing.com/th/id/OIP._2Gdic5wddQUiQQwZMNLsgHaFj?rs=1&pid=ImgDetMain');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
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
        }

        .content {
            flex: 1;
            padding: 20px 0;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        footer p, footer ul, footer address {
            margin: 8px 0;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            nav a {
                margin: 8px 4px;
                font-size: 10px;
            }

            footer h2 {
                font-size: 22px;
            }

            footer p, footer ul, footer address {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            nav a {
                margin: 4px;
                font-size: 6px;
            }

            footer h2 {
                font-size: 16px;
            }

            footer p, footer ul, footer address {
                font-size: 8px;
            }
        }

        .reviews-section, .news-section {
            padding: 40px 0;
            text-align: center;
        }

        .reviews-section h2, .news-section h2 {
            margin-bottom: 20px;
            color: black;
        }

        .review-card, .news-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            text-align: left;
            opacity: 0.9;
            transition: transform 0.3s ease-in-out;
        }

        .review-card:hover, .news-card:hover {
            transform: scale(1.05);
        }

        .review-card h3, .news-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .review-card p, .news-card p {
            font-size: 14px;
            margin: 10px 0;
        }

        .rating {
            color: #ffd700;
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
        <div class="content">
            <div class="container reviews-section">
                <h2>User Reviews and Ratings</h2>
                <div class="review-card">
                    <h3>John Doe</h3>
                    <p class="rating">★★★★★</p>
                    <p>"Amazing service! I bought my car through ThriftTrove and the process was seamless."</p>
                </div>
                <div class="review-card">
                    <h3>Jane Smith</h3>
                    <p class="rating">★★★★☆</p>
                    <p>"Great selection of cars and excellent customer support. Highly recommend!"</p>
                </div>
                <div class="review-card">
                    <h3>Emily Johnson</h3>
                    <p class="rating">★★★★★</p>
                    <p>"I sold my car on ThriftTrove and got a great deal. The website is very user-friendly."</p>
                </div>
                <div class="review-card">
                    <h3>Michael Brown</h3>
                    <p class="rating">★★★★☆</p>
                    <p>"ThriftTrove helped me find the perfect car. The financing options were very helpful."</p>
                </div>
            </div>
            <div class="container news-section">
                <h2>Latest News</h2>
                <div class="news-card">
                    <h3>New Models Arriving This Summer</h3>
                    <p>Get ready for the latest models arriving this summer. Stay tuned for more updates and reviews.</p>
                </div>
                <div class="news-card">
                    <h3>ThriftTrove Partners with Major Insurance Providers</h3>
                    <p>We are excited to announce our new partnerships with major insurance providers to offer you the best deals.</p>
                </div>
                <div class="news-card">
                    <h3>Financing Options Expanded</h3>
                    <p>We have expanded our financing options to make it easier for you to own your dream car. Check out our financing page for more information.</p>
                </div>
                <div class="news-card">
                    <h3>Customer Success Stories</h3>
                    <p>Read about our customers' success stories and how ThriftTrove helped them find the perfect car.</p>
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
        <div class="container">
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
