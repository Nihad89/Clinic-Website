
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
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
            background-color: #007BFF;
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

        .custom-navbar {
            background-color: #c3e0ff; /* Replace with your desired color */
        
        }
        
        .navbar-toggler {
            border-color: #ffffff; /* Adjust if needed */
        }

        .navbar-brand img {
            
            max-height: 55px;
            margin-right: 15px;
        }

        .navbar-nav .nav-item a {
            color: #7e7f81;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            
        }

        .navbar-nav .nav-item a:hover {
            color: #0332f8 !important;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .navbar-nav .nav-item {
            padding: 10px;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .carousel-image {
            width: 200px;
            height: 400px;
            object-fit: cover;
        }

     
    </style>
</head>
<body>

   <!-- Nav Bar -->
   <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">
            <img src="uploads/logo/SDC logo.png" alt="Your Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="{{ url('/doctor') }}">DOCTOR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/test') }}">TEST</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/gallery') }}">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/banner') }}">BANNER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/notice') }}">NOTICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/job') }}">CAREER</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Package Card -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="add-image-button">
                <a href="{{ url('add-package') }}" class="btn btn-danger btn-sm">ADD PACKAGE</a>
            </h4>
            <div class="custom-card">
                <div class="card-body">
                    <div class="row">
                        @foreach ($package as $item)
                            <div class="col-md-4 mb-4">
                                <div class="card custom-card">
                                    <img src="{{ asset('uploads/packages/'.$item->image) }}" class="card-img-top" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->des_a }}</h5>
                                    </div>
                                    <div class="card-footer">

                                        <form action="{{ url('delete-package/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer style="background-color: #5a5555; padding: 50px 0; margin-top: 30px;">
    <div class="container">
        <div class="row">
        <div class="col-md-4 footer-section">
                <h5 style="color: #fff; font-size: 24px; margin-bottom: 20px;">Essential Links</h5>
                <div class="contact-details">

                    <a class="nav-link" href="{{ url('/about') }}">About Us</a>
  
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>

                    <a class="nav-link" href="{{ url('/show_job') }}">Career</a>

                </div>
            </div>

            <!-- Contact Details Section -->
            <div class="col-md-4 footer-section">
                <h5 style="color: #fff; font-size: 24px; margin-bottom: 20px;">Contact Details</h5>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt" style="color: #5ab5fa;" ></i> 123 Main St, City</p>
                    <p><i class="fas fa-phone" style="color: #5ab5fa;" ></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope" style="color: #5ab5fa;" ></i> example@example.com</p>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="col-md-4 footer-section"style="text-align: right;">
                <div class="copyright">
                    &copy; 2023 Your Company Name
                </div>
                <div class="footer-text" style="color: white; margin-top: 15px; font-size: 14px;">
                    <p>Developed by Abu Saleh Akash.</p>
                    
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
