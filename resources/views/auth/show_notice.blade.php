<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
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
            margin-bottom: 10px;
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
        <a class="navbar-toggler" href="#" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation" id="mobileNavToggle">
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
                    <a class="nav-link" href="{{ url('/show_job') }}">Career</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Notice -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Notice</h4>
                </div>
                <div class="card-body">
                    @if(count($notices) > 0)
                        <div class="row">
                            @foreach ($notices as $item)
                                <div class="col-md-4">
                                    <div class="image-card">
                                        <h5>{{ $item->des_a }}</h5>
                                        <p>{{ $item->des_b }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            Currently, there are no notices available.
                        </div>
                    @endif
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

                    <a class="nav-link" href="{{ url('/show_doctor') }}">Doctors</a>

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
