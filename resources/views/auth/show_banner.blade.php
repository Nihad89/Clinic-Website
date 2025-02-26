
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANDHANI CLINIC & DIAGONOSTIC COMPLEX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/nav_foot.css')}}">
    <style>

    body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        .job-card {
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            transition: transform 0.2s;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .job-card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #073763;
            color: #fff;
            border-radius: 10px 10px 0 0;

        }

        .card-title {
            margin-bottom: 0;
        }

        .btn-back {
            background-color: #DC3545;
        }

        .btn-back:hover {
            background-color: #C82333;
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
            padding: 8px 16px;
            font-size: 14px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .job-title {
            font-weight: bold;
        }

        .job-description {
            margin-top: 10px;
        }

        .login-register {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .login-register a {
            background-color: #007BFF;
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-register a:hover {
            background-color: #0056b3;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .marquee-container2 {
            overflow: hidden;
            white-space: nowrap;
            animation: marquee 30s linear infinite alternate;
            font-weight: bold;
            width: 100%;
            padding: 10px;
        }

        .marquee-container2:hover {
            animation-play-state: paused;
        }


        .carousel-image {
            width: 200px;
            height: 600px;
            object-fit: cover !important;
            transform: none !important;
            transition: none !important;
        }

        .space-after-section {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .lively-card {
            background-color: #fff;
            border: none;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .rounded-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-radius 0.3s ease;
            border-radius: 10px; /* Initial border radius */
        }

        .rounded-hover:hover {
            transform: scale(1.05); /* Slightly enlarge the image */
            border-radius: 20px; /* More rounded corners */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Add a shadow effect */
        }

        .lively-card img {
            max-width: 100%;
            height: auto;
        }
        
 /* CSS for Map Section Positioning and Animation */


        .map-container {
            width: 100%;
            height: 500px; /* Adjust height as needed */
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }


 /* CSS for Notice Section Positioning and Animation */


.notice-card {
    position: relative;
    height: 600px;
    overflow: hidden;
    background-color: rgba(255, 255, 255, 0.9);
}

.notice-list {
    height: 100%;
    overflow: hidden;
}

.animated-text-container {
    animation: marqueeUp 20s linear infinite;
    display: inline-block;
}

.animated-text-container:hover {
    animation-play-state: paused;
}

.notice-item {
    padding: 10px 0;
    border-bottom: 1px solid #e0e0e0;
}

@keyframes marqueeUp {
    0% {
        transform: translateY(100%);
    }
    100% {
        transform: translateY(-100%);
    }
}

/* Custom styles for Login and বাংলা buttons */

.login-btn {
            background-color: transparent;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #007BFF;
        }


/* Doctor Cards */
#doctorCarousel {
    margin-top: 3rem;
    margin-bottom: 2rem;
}

/* Doctor Card Styling */
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Card Image Styling */
.card-img-top {
    height: 300px;
    object-fit: cover;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

/* Card Body Styling */
.card-body {
    padding: 1rem;
    font-size: 0.9rem;
    text-align: center;
}

/* Card Title Styling */
.card-title {
    font-size: 1.2rem;
    font-weight: bold;
}

/* Card Text Styling */
.card-text {
    font-size: 0.85rem;
    color: #555;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .card-img-top {
        height: 150px;
    }
    .card-body {
        font-size: 0.8rem;
    }
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


<!-- Section 2: Top Navbar -->
<div class="section-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="/">
                <img src="uploads/logo/SDC logo.png" alt="Your Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="{{ url('/b_sandhani') }}">বাংলা</a>
                    </li>
                </ul>
            </div>
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
                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="marquee-container2">
        <p><h4>WE CARE, WE DIAGNOSE & WE DELIVER!</h4></p>
    </div>


 <!-- Banner  Section -->
 <div class="container">
        <div class="row">

            <div class="col-md-9">
            <div class="card">
            <div class="card-body p-0">
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            @foreach ($banner as $key => $item)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('uploads/banners/'.$item->image) }}" alt="Image" class="w-100 img-fluid carousel-image">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


<!-- Notice Section -->
<div class="col-md-3">
    <div class="card notice-card">
        <div class="card-header">
            <h4>Notice</h4>
        </div>
        <div class="card-body">
            @if(count($notice) > 0)
                <div class="notice-list">
                    <div class="animated-text-container">
                        @foreach ($notice as $item)
                            <div class="notice-item animated-text">
                                <h5>&#8226; {{ $item->des_a }}</h5>
                                <p>{{ $item->des_b }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Currently, there are no notices available.
                </div>
            @endif
        </div>
    </div>
    <br>
</div>


<!-- Doctor Section -->
<div id="doctorCarousel" class="carousel slide mt-4" data-ride="carousel" data-interval="4950">
    <div class="carousel-inner">
        @php
            $chunks = $doctor->chunk(4);
        @endphp
        @if($chunks->isEmpty())
            <!-- Show a placeholder if there are no doctors -->
            <div class="carousel-item active">
                <div class="text-center py-5">
                    <h5>No doctors available at the moment.</h5>
                </div>
            </div>
        @else
            @foreach ($chunks as $key => $chunk)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <div class="row g-4">
                    @foreach ($chunk as $item)
                    <div class="col-md-{{ 12 / min($chunk->count(), 4) }}">
                        <div class="card h-100 shadow-sm border-0">
                            <a href="{{ route('show_doctor', $item->id) }}">
                                <img src="{{ asset('uploads/doctors/'.$item->image) }}" class="card-img-top" alt="Doctor Image">
                            </a>
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <h5 class="card-title text-primary fw-bold">{{ $item->name }}</h5>
                                <p class="card-text mb-2"><strong>Specialty:</strong> {{ $item->specialty }}</p>
                                <p class="card-text"><strong>Degree / Qualification:</strong> {{ $item->degree }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        @endif
    </div>
    @if($chunks->count() > 1)
        <a class="carousel-control-prev" href="#doctorCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#doctorCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    @endif
</div>


<!-- Location Section -->
<div class="col-md-12 space-after-section">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Our Location</h4>
            </div>
            <div class="card-body">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.9278363013693!2d89.56491211538923!3d22.811867484984007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901f960f905f%3A0x8e09db8ac02b3cf9!2sSandhani%20Clinic%20%26%20Diagnostic%20Complex!5e0!3m2!1sen!2sus!4v1632152103620!5m2!1sen!2sus"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Message Cards -->
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card job-card">
                    <div class="card-body">
                        <img src="uploads/others/image_c.png" alt="message" class="img-fluid rounded-circle mb-4" style="max-width: 300px;">
                        <h4 class="card-title text-center font-weight-bold">Managing Director</h4>
                        <br>
                        <p class="card-text">Dear Patients and Visitors,</p>
                        <p class="card-text">Welcome to the Sandhani Clinic and Diagnostic Complex. As Managing Director, I am honored to head a dedicated team committed to providing great healthcare services. Our clinic combines cutting-edge diagnostic technology with compassionate care to ensure that each patient receives accurate, quick findings.</p>
                        <p class="card-text">We priorities your well-being and seek to create a friendly workplace in which you feel respected and informed. Whether you come in for basic treatment or a more difficult issue, we are here to help you with professionalism and sensitivity. Thank you for entrusting us with your health.</p>
                        <p class="card-text">Best regards,</p>
                        <p class="card-text">Mrs. Zohra Baker</p>
                        <p class="card-text">Managing Director</p>
                        <p class="card-text">Sandhani Clinic & Diagnostic Complex.</p>
                    </div>
                </div>
            </div>

        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <img src="uploads/others/image_a.png" alt="message" class="img-fluid rounded-circle mb-4" style="max-width: 300px;">
                    <h4 class="card-title text-center font-weight-bold">Managing Director of Diagnostic Wing</h4>
                    <br>
                    <p class="card-text">Dear Patients and Visitors,</p>
                    <p class="card-text">Welcome to the Diagnostic Wing of Sandhani Clinic & Diagnostic Complex. As Director, I am committed to ensuring you receive the most accurate and timely diagnostic services available. Our state-of-the-art technology and expert team are here to support your health journey with precision, dedication, and care.</p>
                    <p class="card-text">We understand that diagnostic tests can be challenging, and our goal is to make your experience as comfortable and stress-free as possible. We strive to provide the highest standard of care and unwavering support throughout your process. Thank you for trusting us with your care.</p>
                    <p class="card-text">Sincerely,</p>
                    <p class="card-text">Dr. Nayem Baker</p>
                    <p class="card-text">Director, Diagnostic Wing</p>
                    <p class="card-text">Sandhani Clinic & Diagnostic Complex.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <img src="uploads/others/image_b.png" alt="message" class="img-fluid rounded-circle mb-4" style="max-width: 300px;">
                    <h4 class="card-title text-center font-weight-bold">Managing Director of Clinic Wing</h4>
                    <br>
                    <p class="card-text">Dear Patients and Visitors,</p>
                    <p class="card-text">Welcome to the Clinic Wing of Sandhani Clinic & Diagnostic Complex. As Director, I am honored to lead a dedicated team committed to providing you with compassionate, high-quality care. Our focus is on delivering personalized healthcare services tailored to your needs, ensuring that every visit is a positive experience.</p>
                    <p class="card-text">At Sandhani Clinic & Diagnostic Complex, your health and well-being are our top priorities. We strive to create a welcoming environment where you feel supported and understood. Thank you for trusting us with your care.</p>
                    <p class="card-text">Sincerely,</p>
                    <p class="card-text">Dr. Arman Baker</p>
                    <p class="card-text">Director, Clinic Wing</p>
                    <p class="card-text">Sandhani Clinic & Diagnostic Complex.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Our Story Card -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/others/image_d.jpg" alt="story" class="img-fluid rounded-hover ">
        </div>
        <div class="col-md-6">
            <div class="card job-card">
                <div class="card-header">
                    <h4 class="card-title font-weight-bold text-center">Our Story</h4>
                </div>
                <div class="card-body">
                <p class="card-text">Welcome to Sandhani Clinic and Diagnostic Complex. Founded in 1991, our mission is to deliver exceptional healthcare by blending cutting-edge technology with compassionate care. We strive to exceed your expectations with precise diagnostics and personalized treatment.</p>
                <p class="card-text">Our state-of-the-art facility offers a full range of services, supported by a dedicated team of professionals who prioritize your comfort and well-being. At Sandhani, we are committed to making every visit a positive experience and providing care that you can trust.</p>
                <p class="card-text">Thank you for choosing us as your healthcare partner. We are here to support you on your journey to better health.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<br>

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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>




</body>
</html>
