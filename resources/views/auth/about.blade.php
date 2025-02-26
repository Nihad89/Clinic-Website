<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/nav_foot.css')}}">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 30px;
        }

        .card {
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #007BFF;
            color: #fff;
        }

        .card-title {
            margin-bottom: 0;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ced4da;
        }

        .form-control:focus {
            border-color: #007BFF;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007BFF;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .image-card {
            border: none;
            background-color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .image-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .image-card:hover img {
            transform: scale(1.1);
        }

        .image-card h5 {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .image-card p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }

        .about-us {
            padding: 50px 0;
            background-color: #fff;
        }

        .about-us-image {
            text-align: center;
        }

        .about-us-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        .about-us-text {
            padding: 30px;
        }

        .about-us-text h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .about-us-text p {
            font-size: 16px;
            line-height: 1.6;
            text-align: justify content;
        }

        
        .about-us-text h2,
        .about-us-text h3 {
            color: #007BFF;
            font-weight: bold;
        }

        .about-card {
            border: none;
            background-color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .about-card:hover {
            transform: scale(1.05);
        }

        @media (min-width: 768px) {
            .about-card {
                height: 100%;
            }
        }

        .section-1,
        .section-2 {
            padding: 15px;
        }


        .social-icons a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
<div class="section-1">
    <!-- Social Links Section -->
    <div class="col-md-4 section-1">
        <div class="social-icons">

            <a href="https://www.facebook.com/sandhani.clinic.khulna" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me/8801951851565" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="mailto:sandhani.clinic.khulna@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>

        </div>
    </div>

    <div class="section-1" style="text-align: right; color: #fff">
        <span class="hotline-number">Hotline: +8809611871872, +8801951851565 </span>

    </div>
</div>

    <div class="section-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="uploads/logo/SDC logo.png" alt="Your Logo">
                </a>
            </div>
        </nav>
    </div>

    <!-- Section 3: Main Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar-color">
        <div class="container">
            <a class="navbar-toggler" href="#" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar"
                aria-expanded="false" aria-label="Toggle navigation" id="mobileNavToggle">
                <i class="fas fa-bars text-white"></i>
            </a>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_test') }}">Test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_package') }}">Our Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_doctor') }}">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_notice') }}">Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_job') }}">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="about-card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>About Us</strong></h4>
                    </div>
                    <div class="card-body about-us-text">
                        <h2>Welcome to Sandhani Clinic & Diagnostic Complex!</h2>
                        <p>🌟 Your Trusted Partner in Health 🌟</p>
                        <p>At Sandhani Clinic & Diagnostic Complex, we are committed to providing top-notch diagnostic and clinical care to support your health and well-being. Our state-of-the-art facility and experienced team ensure you receive accurate, timely, and compassionate care.</p>

                        <h3>🩺 What We Offer</h3>

                        <h4>🔬 Diagnostic Services</h4>
                        
                            <P><strong>Laboratory Testing:</strong> Comprehensive blood tests, urinalysis, and more.</P>
                            <P><strong>Imaging:</strong> X-rays, ultrasounds, and CT scans to help diagnose and monitor conditions.</P>
                            <P><strong>Cardiac Tests:</strong> ECG, ECHO, and other assessments to evaluate heart health.</P>
                        

                        <h4>🏥 Clinical Services</h4>
                        
                            <P><strong>Routine Check-Ups:</strong> Regular health evaluations to keep you on track.</P>
                            <P><strong>Specialist Consultations:</strong> Access to a range of specialists for targeted care.</P>
                            <P><strong>Preventive Screenings:</strong> Early detection tests to catch issues before they become serious.`</P>
                        

                        <h3>✨ Why Choose Us?</h3>

                        <h4>Expert Team</h4>
                        <p>Our healthcare professionals are highly trained and dedicated to your care.</p>

                        <h4>Cutting-Edge Technology</h4>
                        <p>We use the latest diagnostic tools for accurate results.</p>

                        <h4>Patient-Centered Approach</h4>
                        <p>Your comfort and health are our top priorities.</p>

                        <h3>📅 Ready to Schedule?</h3>
                        <p>Book your appointment easily by calling <strong>Contact No: 09611871872</strong>. For any questions, feel free to send your queries or message us directly in the form in <strong><a href="/contact">Contact Us Page</a>.</strong></p>

                        <p>Stay proactive about your health with Sandhani Clinic & Diagnostic Complex—where your well-being is our mission. 💙</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MISSION & VISION -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="about-card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Our Mission</strong></h4>
                    </div>
                    <div class="card-body">
                        <p>At Sandhani Clinic and Diagnostic Complex, our mission is to provide outstanding healthcare by integrating advanced diagnostic technology with compassionate care. We are committed to delivering precise, timely results and personalized treatment in a supportive environment. Our goal is to guide you through your health journey with excellence and integrity.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex">
                <div class="about-card">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Our Vision</strong></h4>
                    </div>
                    <div class="card-body">
                        <p>At Sandhani Clinic and Diagnostic Complex, our vision is to be a leading healthcare provider renowned for innovative diagnostics and exemplary patient care. We aim to set new standards in healthcare by continually advancing our technology and practices, fostering a culture of compassion and excellence, and empowering our community to achieve optimal health and well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
    <div class="container">
        <div class="row">
        <div class="col-md-4 footer-section">
                <h5 style="color: #fff; font-size: 24px; ">Essential Links</h5>
                <div class="contact-details">

                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
  
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>

                    <a class="nav-link" href="{{ url('/show_job') }}">Career</a>

                </div>
            </div>

            <!-- Contact Details Section -->
            <div class="col-md-4 footer-section">
                <h5>Contact Informations</h5>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt" style="color: #5ab5fa;" ></i> Location: 58, Babu Khan Road, Khulna, Bangladesh.</p>
                    <p><i class="fas fa-phone" style="color: #5ab5fa;" ></i> +8809611871872</p>
                    <p><i class="fas fa-envelope" style="color: #5ab5fa;" ></i> sandhani.clinic.khulna@gmail.com</p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="col-md-4 footer-section"style="text-align: right;">
                <div class="copyright">
                    &copy; 2023 Sandhani Clinic & Diagnostic Complex
                </div>

            </div>
        </div>
    </div>

</footer>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
