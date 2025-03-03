<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সন্ধানী ক্লিনিক এন্ড ডায়াগনস্টিক কমপ্লেক্স</title>
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
                        <a class="nav-link login-btn" href="{{ url('/login') }}">লগ-ইন</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="{{ url('/') }}">ইংরেজী</a>
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
                    <a class="nav-link" href="{{ url('/show_test') }}">ইনভেস্টিগেশন</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_package') }}">আমাদের প্যাকেজ সমূহ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_doctor') }}">ডাক্তার</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_gallery') }}">গ্যালারি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_notice') }}">নোটিশ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_job') }}">ক্যারিয়ার</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">আমাদের সম্পর্কে</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">যোগাযোগ করুন</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <div class="marquee-container2">
        <p><h4>WE CARE, WE DIAGNOSE & WE DELIVER!</h4></p>
    </div>


 <!-- Banner and Notice Sections -->
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
            <h4>নোটিশ</h4>
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
                <h4>আমাদের অবস্থান</h4>
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
                    <h4 class="card-title text-center font-weight-bold">চেয়ারম্যান ও স্বত্বাধিকারী</h4>
                    <br>
                    <p class="card-text">প্রিয় রোগী ও সেবাগ্রহীতা,</p>
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্সে আপনাকে স্বাগতম। আমাদের লক্ষ্য সঠিক এবং নির্ভুল স্বাস্থ্যসেবা প্রদান করা। অত্যাধুনিক ডায়াগনস্টিক সুবিধা এবং দক্ষ চিকিৎসক দলের মাধ্যমে আমরা নিশ্চিত করি যেন প্রতিটি রোগী নির্ভুল ও সময়োপযোগী সেবা পায়।</p>
                    <p class="card-text">আমরা সবসময় রোগীর সুস্থতা, আরাম ও মানসিক শান্তিকে সর্বাধিক গুরুত্ব দিয়ে থাকি। প্রতিটি রোগীকে আমরা শ্রদ্ধা, যত্ন এবং পেশাদারিত্বের সঙ্গে সেবা প্রদান করি। আপনাদের আস্থা এবং সহযোগিতার জন্য ধন্যবাদ।</p>
                    <p class="card-text">শুভেচ্ছান্তে,</p>
                    <p class="card-text">মিসেস জোহরা বাকের</p>
                    <p class="card-text">চেয়ারম্যান ও স্বত্বাধিকারী</p>
                    <p class="card-text">সন্ধ্যানি ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্স।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <img src="uploads/others/image_a.png" alt="message" class="img-fluid rounded-circle mb-4" style="max-width: 300px;">
                    <h4 class="card-title text-center font-weight-bold">ব্যবস্থাপনা পরিচালক</h4>
                    <br>
                    <p class="card-text">প্রিয় রোগী ও সেবাগ্রহীতা,</p>
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্সে আপনাকে স্বাগত জানাই। আমাদের ডায়াগনস্টিক শাখায় আমরা সর্বাধুনিক প্রযুক্তির যন্ত্রপাতি এবং অভিজ্ঞ টিমের মাধ্যমে সঠিক ও নির্ভুল পরীক্ষা-নিরীক্ষা সেবা প্রদান করি। রোগ নির্ণয় হলো সঠিক চিকিৎসার প্রথম ধাপ, আর আমরা সেই দায়িত্ব অত্যন্ত যত্ন সহকারে পালন করি।</p>
                    <p class="card-text">আমাদের লক্ষ্য হলো প্রতিটি রোগীকে দ্রুত ও নির্ভুল ফলাফল প্রদান করা, যেন চিকিৎসার প্রতিটি ধাপ সহজ ও কার্যকর হয়। আপনাদের আস্থা আমাদের প্রেরণা। ধন্যবাদ।</p>
                    <p class="card-text">শুভেচ্ছান্তে,</p>
                    <p class="card-text">ডা. নাইম  বাকের </p>
                    <p class="card-text">ব্যবস্থাপনা পরিচালক</p>
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্স।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card job-card">
                <div class="card-body">
                    <img src="uploads/others/image_b.png" alt="message" class="img-fluid rounded-circle mb-4" style="max-width: 300px;">
                    <h4 class="card-title text-center font-weight-bold">সিইও</h4>
                    <br>
                    <p class="card-text">প্রিয় রোগী ও সেবাগ্রহীতা,</p>
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্সে আপনাকে স্বাগত জানাই। আমাদের ক্লিনিকে, রোগীর সুস্থতা ও যত্নকে সর্বোচ্চ গুরুত্ব দেওয়া হয়। আমরা অত্যাধুনিক প্রযুক্তি ও অভিজ্ঞ চিকিৎসক দলের মাধ্যমে সেবা প্রদান করি, যাতে প্রতিটি রোগী নির্ভুল চিকিৎসা এবং আরামদায়ক সেবা পান।</p>
                    <p class="card-text">আমাদের উদ্দেশ্য হলো সঠিক সময়ে সঠিক সেবা নিশ্চিত করা এবং প্রতিটি রোগীর প্রয়োজন মেটানো। আপনাদের আস্থা আমাদের প্রেরণা। আপনাদের পাশে থেকে সর্বোচ্চ মানের স্বাস্থ্যসেবা প্রদানে আমরা প্রতিশ্রুতিবদ্ধ।</p>
                    <p class="card-text">শুভেচ্ছান্তে,</p>
                    <p class="card-text">ডা. আরমান বাকের</p>
                    <p class="card-text">সিইও</p>
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্স।</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Our Story Card -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads/others/sandhani_front.jpg" alt="story" class="img-fluid rounded-hover ">
        </div>
        <div class="col-md-6">
            <div class="card job-card">
                <div class="card-header">
                    <h4 class="card-title font-weight-bold text-center">আমাদের ইতিহাস</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">সন্ধানী ক্লিনিক ও ডায়াগনস্টিক কমপ্লেক্সে আপনাকে স্বাগত। ১৯৯১ সালে প্রতিষ্ঠিত, আমাদের লক্ষ্য অত্যাধুনিক প্রযুক্তি এবং সহানুভূতিশীল যত্নের সমন্বয়ে অনন্য স্বাস্থ্যসেবা প্রদান করা। আমরা সঠিক ডায়াগনস্টিক ও ব্যক্তিগত চিকিৎসার মাধ্যমে আপনার প্রত্যাশা পূরণের জন্য সর্বদা সচেষ্ট।
                    </p>
                    <p class="card-text">আমাদের অত্যাধুনিক সুবিধাসমূহ ও সেবাগুলো দক্ষ পেশাদার দলের দ্বারা পরিচালিত, যারা সব সময় আপনার আরাম ও সুস্থতাকে অগ্রাধিকার দেন। সন্ধানীতে, আমরা প্রতিটি ভিজিটকে ইতিবাচক অভিজ্ঞতা হিসেবে গড়ে তোলার জন্য এবং নির্ভরযোগ্য সেবা প্রদানে প্রতিশ্রুতিবদ্ধ।
                    </p>
                    <p class="card-text">আপনাকে আমাদের স্বাস্থ্যসেবা সহযোগী হিসেবে বেছে নেওয়ার জন্য ধন্যবাদ। আমরা আপনার সুস্থতার যাত্রায় সব সময় পাশে আছি।</p>
                    
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
                <h5 style="color: #fff; font-size: 24px; margin-bottom: 20px;">প্রয়োজনীয় লিংকস</h5>
                <div class="contact-details">

                    <a class="nav-link" href="{{ url('/about') }}">আমাদের সম্পর্কে</a>
  
                    <a class="nav-link" href="{{ url('/contact') }}">যোগাযোগ করুন</a>

                    <a class="nav-link" href="{{ url('/show_job') }}">ক্যারিয়ার</a>

                </div>
            </div>

            <!-- Contact Details Section -->
            <div class="col-md-4 footer-section">
                <h5 style="color: #fff; font-size: 24px; margin-bottom: 20px; ">যোগাযোগের ঠিকানা</h5>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt" style="color: #5ab5fa;" ></i> Location: 58, Babu Khan Road, Khulna, Bangladesh.</p>
                    <p><i class="fas fa-phone" style="color: #5ab5fa;" ></i> +8809611871872</p>
                    <p><i class="fas fa-envelope" style="color: #5ab5fa;" ></i> sandhani.clinic.khulna@gmail.com</p>
                </div>
            </div>

                <!-- Copyright Section -->
                <div class="col-md-4 footer-section"style="text-align: right;">
                <div class="copyright">
                    &copy; ২০২৩ সন্ধানী ক্লিনিক এন্ড ডায়াগনস্টিক কমপ্লেক্স
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
