<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
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
            background-image: url('https://i.pinimg.com/736x/96/10/ed/9610ed80978107ec96308f51add0e018.jpg');
            background-size: cover;
            /* Ensures the image covers the whole area */
            background-position: center;
            /* Centers the image */
            background-repeat: no-repeat;
            /* Prevents tiling of the image */
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

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .details {
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
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .details img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .details h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .details p {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .details .price {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .car-specs p {
            text-align: left;
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

        .services ul {
            list-style: none;
            padding: 0;
        }

        .services li {
            margin: 8px 0;
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


        <div class="cards-container">
            <div class="cards-container">
                <div class="details" id="tesla_model_3">
                    <img src="tesla-model-3.jpeg" alt="Tesla Model 3">
                    <h3>Tesla Model 3</h3>
                    <p>Electric, 2023, 30,000 miles</p>
                    <p class="price">$35,000</p>
                    <div class="car-specs">

                        <p><strong>Plate No:-</strong> LKV-5369 </p>
                        <p><strong>Battery:</strong> Lithium-ion</p>
                        <p><strong>Motor:</strong> Dual electric motors</p>
                        <p><strong>Range:</strong> 300 miles</p>
                        <p><strong>0-60 mph:</strong> 4.2 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Charging:</strong> Supercharger network, home charging</p>
                        <p><strong>Key Features:</strong> Autopilot, Full Self-Driving Capability, Premium Connectivity,
                            15-inch Touchscreen Display</p>
                    </div>
                </div>
                <div class="details" id="porsche_911">
                    <img src="greyp.png" alt="Porsche 911">
                    <h3>Porsche 911</h3>
                    <p>Petrol, 2023, 25,000 miles</p>
                    <p class="price">$90,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> YXZ-1234 </p>
                        <p><strong>Engine:</strong> 3.0L Twin-Turbocharged</p>
                        <p><strong>Horsepower:</strong> 443 hp</p>
                        <p><strong>0-60 mph:</strong> 3.5 seconds</p>
                        <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed PDK</p>
                        <p><strong>Key Features:</strong> Porsche Communication Management, Sport Chrono Package, BOSE
                            Surround Sound System</p>
                    </div>
                </div>
                <div class="details" id="koenigsegg_agera_r">
                    <img src="koenig.jpg" alt="Koenigsegg Agera R">
                    <h3>Koenigsegg Agera R</h3>
                    <p>Petrol, 2023, 10,000 miles</p>
                    <p class="price">$1,200,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> MTN-7890 </p>
                        <p><strong>Engine:</strong> 5.0L V8 Twin-Turbocharged</p>
                        <p><strong>Horsepower:</strong> 1,140 hp</p>
                        <p><strong>0-60 mph:</strong> 2.8 seconds</p>
                        <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 7-speed dual-clutch</p>
                        <p><strong>Key Features:</strong> Carbon Fiber Monocoque, Triplex Suspension, Advanced
                            Aerodynamics</p>
                    </div>
                </div>
                <div class="details" id="lamborghini_urus">
                    <img src="urus.jpeg" alt="Lamborghini Urus">
                    <h3>Lamborghini Urus</h3>
                    <p>Petrol, 2023, 5,000 miles</p>
                    <p class="price">$200,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> NYC-0264 </p>
                        <p><strong>Engine:</strong> 4.0L V8 Twin-Turbocharged</p>
                        <p><strong>Horsepower:</strong> 641 hp</p>
                        <p><strong>0-60 mph:</strong> 3.6 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Adaptive Air Suspension, Infotainment System, Driver
                            Assistance Systems</p>
                    </div>
                </div>
                <div class="details" id="ford_mustang_mach_e">
                    <img src="ford.jpeg" alt="Ford Mustang Mach-E">
                    <h3>Ford Mustang Mach-E</h3>
                    <p>Electric, 2023, 8,000 miles</p>
                    <p class="price">$50,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> BCK-4321 </p>
                        <p><strong>Battery:</strong> Lithium-ion</p>
                        <p><strong>Motor:</strong> Dual electric motors</p>
                        <p><strong>Range:</strong> 270 miles</p>
                        <p><strong>0-60 mph:</strong> 3.5 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Charging:</strong> DC Fast Charging, home charging</p>
                        <p><strong>Key Features:</strong> SYNC 4A, B&O Sound System, Panoramic Sunroof</p>
                    </div>
                </div>
                <div class="details" id="bmw_x7">
                    <img src="bmwx7.png" alt="BMW X7">
                    <h3>BMW X7</h3>
                    <p>Petrol, 2023, 20,000 miles</p>
                    <p class="price">$75,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> SUN-9876 </p>
                        <p><strong>Engine:</strong> 3.0L I6 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 335 hp</p>
                        <p><strong>0-60 mph:</strong> 5.8 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Live Cockpit Professional, Harman Kardon Surround Sound,
                            Panoramic Sunroof</p>
                    </div>
                </div>
                <div class="details" id="jeep_grand_cherokee">
                    <img src="jeep-grand-cherokee.jpeg" alt="Jeep Grand Cherokee">
                    <h3>Jeep Grand Cherokee</h3>
                    <p>Petrol, 2023, 15,000 miles</p>
                    <p class="price">$55,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> DES-2468 </p>
                        <p><strong>Engine:</strong> 3.6L V6</p>
                        <p><strong>Horsepower:</strong> 295 hp</p>
                        <p><strong>0-60 mph:</strong> 7.0 seconds</p>
                        <p><strong>Drivetrain:</strong> Four-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Uconnect 5, Quadra-Lift Air Suspension, Selec-Terrain System
                        </p>
                    </div>
                </div>
                <div class="details" id="mercedes_benz_s_class">
                    <img src="mercedes-benz-s-class.jpeg" alt="Mercedes-Benz S-Class">
                    <h3>Mercedes-Benz S-Class</h3>
                    <p>Petrol, 2023, 10,000 miles</p>
                    <p class="price">$110,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> ATL-5432 </p>
                        <p><strong>Engine:</strong> 3.0L I6 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 429 hp</p>
                        <p><strong>0-60 mph:</strong> 4.8 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 9-speed automatic</p>
                        <p><strong>Key Features:</strong> MBUX, Burmester 3D Sound, E-Active Body Control</p>
                    </div>
                </div>
                <div class="details" id="audi_q8">
                    <img src="audi-q8.jpeg" alt="Audi Q8">
                    <h3>Audi Q8</h3>
                    <p>Petrol, 2023, 18,000 miles</p>
                    <p class="price">$85,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> WND-6543 </p>
                        <p><strong>Engine:</strong> 3.0L V6 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 335 hp</p>
                        <p><strong>0-60 mph:</strong> 5.6 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> MMI Touch Response, Bang & Olufsen Sound System, Adaptive Air
                            Suspension</p>
                    </div>
                </div>
                <div class="details" id="range_rover_evoque">
                    <img src="range-rover-evoque.jpeg" alt="Range Rover Evoque">
                    <h3>Range Rover Evoque</h3>
                    <p>Petrol, 2023, 22,000 miles</p>
                    <p class="price">$60,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> DET-8765 </p>
                        <p><strong>Engine:</strong> 2.0L I4 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 246 hp</p>
                        <p><strong>0-60 mph:</strong> 7.0 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 9-speed automatic</p>
                        <p><strong>Key Features:</strong> Touch Pro Duo, Meridian Sound System, Terrain Response 2</p>
                    </div>
                </div>
                <div class="details" id="cadillac_escalade">
                    <img src="cadillac-escalade.jpeg" alt="Cadillac Escalade">
                    <h3>Cadillac Escalade</h3>
                    <p>Petrol, 2023, 12,000 miles</p>
                    <p class="price">$95,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> CLT-7890 </p>
                        <p><strong>Engine:</strong> 6.2L V8</p>
                        <p><strong>Horsepower:</strong> 420 hp</p>
                        <p><strong>0-60 mph:</strong> 5.9 seconds</p>
                        <p><strong>Drivetrain:</strong> Four-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 10-speed automatic</p>
                        <p><strong>Key Features:</strong> OLED Display, AKG Studio Reference Sound, Super Cruise</p>
                    </div>
                </div>
                <div class="details" id="jaguar_f_pace">
                    <img src="jaguar-f-pace.jpeg" alt="Jaguar F-PACE">
                    <h3>Jaguar F-PACE</h3>
                    <p>Petrol, 2023, 20,000 miles</p>
                    <p class="price">$70,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> PDX-3456 </p>
                        <p><strong>Engine:</strong> 2.0L I4 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 246 hp</p>
                        <p><strong>0-60 mph:</strong> 6.9 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Pivi Pro, Meridian Sound System, Adaptive Dynamics</p>
                    </div>
                </div>
                <div class="details" id="gmc_yukon">
                    <img src="gmc-yukon.jpeg" alt="GMC Yukon">
                    <h3>GMC Yukon</h3>
                    <p>Petrol, 2023, 10,000 miles</p>
                    <p class="price">$85,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> MEM-6789 </p>
                        <p><strong>Engine:</strong> 5.3L V8</p>
                        <p><strong>Horsepower:</strong> 355 hp</p>
                        <p><strong>0-60 mph:</strong> 7.1 seconds</p>
                        <p><strong>Drivetrain:</strong> Four-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 10-speed automatic</p>
                        <p><strong>Key Features:</strong> GMC Infotainment System, Bose Premium Sound, Magnetic Ride
                            Control</p>
                    </div>
                </div>
                <div class="details" id="volvo_xc90">
                    <img src="volvo-xc90.jpeg" alt="Volvo XC90">
                    <h3>Volvo XC90</h3>
                    <p>Petrol, 2023, 9,000 miles</p>
                    <p class="price">$65,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> SEA-2109 </p>
                        <p><strong>Engine:</strong> 2.0L I4 Turbocharged</p>
                        <p><strong>Horsepower:</strong> 316 hp</p>
                        <p><strong>0-60 mph:</strong> 6.1 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Sensus Connect, Bowers & Wilkins Sound System, Pilot Assist
                        </p>
                    </div>
                </div>
                <div class="details" id="mclaren_720s">
                    <img src="mclaren-720s.png" alt="McLaren 720S">
                    <h3>McLaren 720S</h3>
                    <p>Petrol, 2023, 5,000 miles</p>
                    <p class="price">$300,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> VEG-4321 </p>

                        <p><strong>Engine:</strong> 4.0L V8 Twin-Turbocharged</p>
                        <p><strong>Horsepower:</strong> 710 hp</p>
                        <p><strong>0-60 mph:</strong> 2.9 seconds</p>
                        <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 7-speed dual-clutch</p>
                        <p><strong>Key Features:</strong> Proactive Chassis Control II, Carbon Fiber Monocage II,
                            Lightweight Design</p>
                    </div>
                </div>
                <div class="details" id="rolls_royce_phantom">
                    <img src="rolls-royce-phantom.png" alt="Rolls-Royce Phantom">
                    <h3>Rolls-Royce Phantom</h3>
                    <p>Petrol, 2023, 3,000 miles</p>
                    <p class="price">$450,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> NOL-7654 </p>
                        <p><strong>Engine:</strong> 6.75L V12</p>
                        <p><strong>Horsepower:</strong> 563 hp</p>
                        <p><strong>0-60 mph:</strong> 5.1 seconds</p>
                        <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 8-speed automatic</p>
                        <p><strong>Key Features:</strong> Starlight Headliner, Bespoke Audio, Adaptive Cruise Control
                        </p>
                    </div>
                </div>

                <div class="details" id="mercedes_benz_g_class">
                    <img src="mercedes-benz-g-class.png" alt="Mercedes-Benz G-Class">
                    <h3>Mercedes-Benz G-Class</h3>
                    <p>Petrol, 2023, 12,000 miles</p>
                    <p class="price">$150,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> RIC-1234 </p>
                        <p><strong>Engine:</strong> 4.0L V8 Biturbo</p>
                        <p><strong>Horsepower:</strong> 416 hp</p>
                        <p><strong>0-60 mph:</strong> 5.6 seconds</p>
                        <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 9-speed automatic</p>
                        <p><strong>Key Features:</strong> G-Mode, Three Locking Differentials, COMAND Infotainment
                            System</p>
                    </div>
                </div>
                <div class="details" id="ferrari_488">
                    <img src="ferrari-488.png" alt="Ferrari 488">
                    <h3>Ferrari 488</h3>
                    <p>Petrol, 2023, 8,000 miles</p>
                    <p class="price">$250,000</p>
                    <div class="car-specs">
                        <p><strong>Plate No:-</strong> BAL-5678 </p>
                        <p><strong>Engine:</strong> 3.9L V8 Twin-Turbocharged</p>
                        <p><strong>Horsepower:</strong> 661 hp</p>
                        <p><strong>0-60 mph:</strong> 3.0 seconds</p>
                        <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                        <p><strong>Transmission:</strong> 7-speed dual-clutch</p>
                        <p><strong>Key Features:</strong> Side Slip Control 2, Carbon Ceramic Brakes, Aerodynamic
                            Efficiency</p>
                    </div>
                </div>


                <div class="cards-container">
                    <div class="details" id="bmw_m3">
                        <img src="bmw1.png" alt="BMW M3">
                        <h3>BMW M3</h3>
                        <p>Petrol, 2023, 7,500 miles</p>
                        <p class="price">$75,000</p>
                        <div class="car-specs">
                            <p><strong>Plate No:-</strong> LKV-5368 </p>
                            <p><strong>Engine:</strong> 3.0L I6 Twin-Turbocharged</p>
                            <p><strong>Horsepower:</strong> 473 hp</p>
                            <p><strong>0-60 mph:</strong> 4.1 seconds</p>
                            <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                            <p><strong>Transmission:</strong> 6-speed manual</p>
                            <p><strong>Key Features:</strong> M-specific displays, M Adaptive Suspension, M Carbon
                                Bucket
                                Seats</p>
                        </div>
                    </div>
                    <div class="details" id="maserati_granturismo">
                        <img src="meserati.jpeg" alt="Maserati GranTurismo">
                        <h3>Maserati GranTurismo</h3>
                        <p>Petrol, 2023, 10,000 miles</p>
                        <p class="price">$120,000</p>
                        <div class="car-specs">
                            <p><strong>Plate No:-</strong> YXZ-1234 </p>
                            <p><strong>Engine:</strong> 4.7L V8</p>
                            <p><strong>Horsepower:</strong> 454 hp</p>
                            <p><strong>0-60 mph:</strong> 4.7 seconds</p>
                            <p><strong>Drivetrain:</strong> Rear-Wheel Drive</p>
                            <p><strong>Transmission:</strong> 6-speed automatic</p>
                            <p><strong>Key Features:</strong> Maserati Touch Control Plus, Harman Kardon Premium Sound
                                System, GranSport Package</p>
                        </div>
                    </div>
                    <div class="details" id="audi_r8">
                        <img src="audi.png" alt="Audi R8">
                        <h3>Audi R8</h3>
                        <p>Petrol, 2023, 5,000 miles</p>
                        <p class="price">$180,000</p>
                        <div class="car-specs">
                            <p><strong>Plate No:-</strong> BOS-8765 </p>
                            <p><strong>Engine:</strong> 5.2L V10</p>
                            <p><strong>Horsepower:</strong> 562 hp</p>
                            <p><strong>0-60 mph:</strong> 3.2 seconds</p>
                            <p><strong>Drivetrain:</strong> All-Wheel Drive</p>
                            <p><strong>Transmission:</strong> 7-speed dual-clutch</p>
                            <p><strong>Key Features:</strong> Audi Virtual Cockpit, Bang & Olufsen Sound System, Audi
                                Magnetic Ride</p>
                        </div>
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
        <p>&copy; 2024 ThriftTrove. All rights reserved.</p>
    </footer>
</body>

</html>