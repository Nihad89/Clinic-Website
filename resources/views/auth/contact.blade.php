
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
    
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

        .contact-card {
            border: none;
            background-color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact-card i {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .contact-card h5 {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .contact-card p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #555;
        }

        .map-container {
            height: 890px;
        }

        .google-form-container {
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
        }

        .google-form {
            width: 100%;
            height: 600px;
        }



        .container .row {
    display: flex;
    align-items: stretch;
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
                        <a class="nav-link" href="{{ url('/show_test') }}">Investigations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_package') }}">Our Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/show_doctor') }}">Doctors</a>
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
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-md-4 d-flex">
            <div class="card">
                <div class="card-header">
                    <h4>Contact Us</h4>
                </div>
                <div class="card-body">

                        <div class="contact-card mb-4">
                            <i class="fa-solid fa-hospital-user"></i>
                            <h5>Information and Patient Care</h5>
                            <p><strong>Executive</strong> <strong>09611871872</strong></p>
                            <p><strong>Sk. Tanjir Alam</strong> Supevisor <strong>01329649122</strong></p>
                        </div>


                        <div class="contact-card mb-4">
                            <i class="fa-solid fa-microscope"></i>
                            <h5>Pathology Reception</h5>
                            <p><strong>Sandhani Reception</strong><strong> 01329649114</strong></p>
                            <p><strong>Sk. Mohidul Islam</strong> Manager <strong>01329649106</strong></p>
                        </div>

                        <div class="contact-card mb-4">
                            <i class="fas fa-headset"></i>
                            <h5>Clinic Reception</h5>
                            <p><strong>Md. Zakir Hossain</strong> Admin Manager (Clinic) <strong>+8801329649138</strong> </p>
                            <p><strong>Sohel Akond</strong> Receptionist <strong>+8801329649115</strong></p>
                        </div>

                        <div class="contact-card mb-4">
                            <i class="fa-solid fa-fire-flame-simple"></i>
                            <h5>Sample Collection</h5>
                            <p><strong>Sandhani Reception</strong><strong> 01329649114</strong></p>
                            <p><strong>Abdul Aziz</strong> Marketing Executive <strong>01951851565</strong></p>
                        </div>

                        <div class="contact-card mb-4">
                            <i class="fa-solid fa-truck-medical"></i>
                            <h5>Ambulance Service</h5>
                            <p><strong>Sandhani Reception</strong><strong> 01329649114</strong></p>
                            <p><strong>Ambulance Driver</strong><strong> 01329649132</strong></p>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 d-flex">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Our Location</h4>
                </div>
                <div class="card-body">
                    <div class="map-container">
                        <iframe
                            width="700"
                            height="1100"
                            frameborder="0"
                            style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.9278363013693!2d89.56491211538923!3d22.811867484984007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901f960f905f%3A0x8e09db8ac02b3cf9!2sSandhani%20Clinic%20%26%20Diagnostic%20Complex!5e0!3m2!1sen!2sus!4v1632152103620!5m2!1sen!2sus"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<br>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" style="text-align: center;">
                    <div class="card-header">
                        <h4>For Your Valuable Queries and Suggestions</h4>
                    </div>
                    <div class="card-body">
                       
                        <div class="google-form-container d-flex justify-content-center align-items-center">
                            <iframe class="google-form"
                                src="https://docs.google.com/forms/d/e/1FAIpQLSdtv87Mt3XgilbgT5PrP15b7pPFAG9rc2LueXEOFIu4v1DOpg/viewform?embedded=true"
                                width="640" height="956" frameborder="0" marginheight="0" marginwidth="0">Loading…
                            </iframe>
                        </div>
                    </div>
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
