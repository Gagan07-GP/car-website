<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="icon" href="racing.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap">
    <style>
        h1,
        h2,
        h3 {
            font-family: 'Alegreya', serif;
        }

        body {
            background: url('https://www.searchenginejournal.com/wp-content/uploads/2022/07/faq-632c0874710c1-sej.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Alegreya', serif;
            margin: 0;
            padding: 0;
            color: #0a0303;
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
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .faq-container {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 800px;
            margin: 15px;
            padding: 20px;
            text-align: left;
        }

        .faq-container h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-item h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .faq-item p {
            font-size: 16px;
        }

        .hidden {
            display: none;
        }

        .view-more-btn {
            background-color: #222;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }

        .view-more-btn:hover {
            background-color: #555;
        }

        footer {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            flex-shrink: 0;
        }

        footer p {
            margin: 0;
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

        .faq-item a {
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }

        .faq-item a:hover {
            color: red;

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
    <script>
        function showMoreFAQs() {
            var moreFAQs = document.getElementById("more-faqs");
            var viewMoreBtn = document.getElementById("view-more-btn");

            if (moreFAQs.style.display === "none" || moreFAQs.style.display === "") {
                moreFAQs.style.display = "block";
                viewMoreBtn.innerText = "View Less";
            } else {
                moreFAQs.style.display = "none";
                viewMoreBtn.innerText = "View More";
            }
        }
    </script>
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
            <div class="faq-container">
                <h2>Frequently Asked Questions</h2>

                <div class="faq-item">
                    <h3>1. How do I sell my car on ThriftTrove?</h3>
                    <p>You can sell your car by filling out the form on our <a href="selltrade.php">Sell/Trade</a> page.
                        Make sure to provide all the required details and upload high-quality images of your car.</p>
                </div>

                <div class="faq-item">
                    <h3>2. What documents do I need to sell my car?</h3>
                    <p>You will need your car's registration, insurance, and service records. Make sure to have these
                        documents ready before listing your car for sale.</p>
                </div>

                <div class="faq-item">
                    <h3>3. How does the trade-in process work?</h3>
                    <p>The trade-in process involves evaluating your current car, researching the car you want to trade
                        for, and completing the trade-in form on our <a href="selltrade.php">Sell/Trade</a> page. Our
                        team will guide you through the rest of the process.</p>
                </div>

                <div class="faq-item">
                    <h3>4. How do I finance a car purchase through ThriftTrove?</h3>
                    <p>You can apply for financing on our <a href="financing.php">Financing</a> page. Fill out the
                        application form, and our team will review your application and get back to you with the
                        available options.</p>
                </div>

                <div class="faq-item">
                    <h3>5. How do I contact ThriftTrove for support?</h3>
                    <p>You can contact us through our <a href="contact.php">Contact Us</a> page. We are available via
                        phone, email, or our online contact form. We aim to respond to all inquiries within 24 hours.
                    </p>
                </div>

                <div id="more-faqs" class="hidden">
                    <div class="faq-item">
                        <h3>6. What are the payment options available?</h3>
                        <p>We accept various payment methods including credit cards, debit cards, bank transfers, and
                            financing options. For more details, visit our <a href="financing.php">Financing</a> page.
                        </p>
                    </div>

                    <div class="faq-item">
                        <h3>7. How do I schedule a test drive?</h3>
                        <p>To schedule a test drive, please contact us through our <a href="contact.php">Contact Us</a>
                            page or call our customer service. We will arrange a convenient time for your test drive.
                        </p>
                    </div>

                    <div class="faq-item">
                        <h3>8. Are there any additional fees when purchasing a car?</h3>
                        <p>There may be additional fees such as taxes, registration fees, and processing fees. These
                            will be detailed during the purchase process. Contact us for more information.</p>
                    </div>

                    <div class="faq-item">
                        <h3>9. Can I return a car after purchasing?</h3>
                        <p>Returns are subject to our return policy. Please review our return policy or contact our
                            support team for details. We strive to ensure customer satisfaction with every purchase.</p>
                    </div>

                    <div class="faq-item">
                        <h3>10. Do you offer warranties on the cars sold?</h3>
                        <p>Yes, we offer warranties on many of the cars sold. The specifics of the warranty will be
                            provided during the purchase process. Contact us for more details on warranty coverage.</p>
                    </div>
                </div>

                <button id="view-more-btn" class="view-more-btn" onclick="showMoreFAQs()">View More</button>
            </div>
        </div>
        <div class="call-support">
    <a href="https://wa.me/917972937245">
        <img src="support.png" alt="Call Support">
    </a>
</div>

    </main>
    <footer>
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
    </footer>
</body>

</html>
