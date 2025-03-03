<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/nav_foot.css')}}">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .card {
            margin-bottom: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .col-md-3 {
            padding-bottom: 20px;
        }
        .card-img-top {
            width: 100%;
            height: 300px; 
            object-fit: cover; 
            transition: transform 0.3s ease-in-out; /* hover effect */
        }
        .card-img-top:hover {
            transform: scale(1.1); /* Scales the image slightly on hover */
            filter: brightness(0.9); /* Darkens the image slightly on hover */
        }
        .card-header {
            background-color: #007BFF;
            color: #fff;
        }
        .card-title {
            margin-bottom: 0;
        }
        .btn-primary {
            background-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
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
        

        .profile-actions .btn {
            width: 45%;
        }

        .add-doctor-button {
            text-align: right;
            margin-bottom: 10px;
        } 

        .navbar-brand img {
            
            max-height: 55px;
            margin-right: 15px;
        }

        .custom-navbar {
            background-color: #c3e0ff; /* color */
        
        }
        
        .navbar-toggler {
            border-color: #ffffff;
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
                    <a class="nav-link" href="{{ url('/test') }}">TEST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/package') }}">PACKAGES</a>
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



    <!-- Add Doctor Bar -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="add-doctor-button">
                <a href="{{ url('add-doctor') }}" class="btn btn-danger btn-sm">ADD DOCTOR</a>
            </h4>
        </div>
    </div>

    <!-- Search Bars -->
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nameFilter">Search by Name:</label>
                <input type="text" id="nameFilter" class="form-control" onkeyup="filterCards()">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="specialityFilter">Search by Specialty:</label>
                <select id="specialityFilter" class="form-control" onchange="filterCards()">
                    <option value="">All Specialties</option>
                    
                </select>
            </div>
        </div>
    </div>

    <!-- Doctor Cards -->
     
    <div class="row" id="doctorRow">
        @foreach ($doctor as $item)
        <div class="col-md-3 doctor-card">
            <div class="card mb-3">
                <img src="{{ asset('uploads/doctors/'.$item->image) }}" class="card-img-top" alt="Doctor Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text"><strong>Specialty:</strong> {{ $item->specialty }}</p>
                    <p class="card-text"><strong>Degree:</strong> {{ $item->degree }}</p>
                    <p class="card-text"><strong>Designation:</strong> {{ $item->symptom }}</p>
                    <p class="card-text"><strong>Visiting Days:</strong> {{ $item->day }}</p>
                    <p class="card-text"><strong>Visiting Hours:</strong> {{ $item->time }}</p>
                    <p class="card-text"><strong>Call for Appointment:</strong> {{ $item->phone }}</p>
                </div>

                <div class="profile-actions">
                    <a href="{{ url('edit-doctor/'.$item->id) }}" class="btn btn-primary">Edit</a>
                    <div class="btn-delete-container">
                        <form action="{{ url('delete-doctor/'.$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
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

<script>
    //Specialty 
    document.addEventListener('DOMContentLoaded', function () {
        var specialitySelect = document.getElementById("specialityFilter");
        var uniqueSpecialties = new Set();

        @foreach ($doctor as $item)
            uniqueSpecialties.add("{{ $item->specialty }}");
        @endforeach

        uniqueSpecialties.forEach(function(specialty) {
            var option = document.createElement("option");
            option.value = specialty;
            option.textContent = specialty;
            specialitySelect.appendChild(option);
        });
    });

    function filterCards() {
        var nameInput = document.getElementById("nameFilter").value.toUpperCase();
        var specialityInput = document.getElementById("specialityFilter").value.toUpperCase();

        var cards = document.querySelectorAll(".doctor-card");

        cards.forEach(function(card) {
            var cardTitle = card.querySelector(".card-title").textContent.toUpperCase();
            var cardText = card.querySelector(".card-body").innerText.toUpperCase();
            var specialityText = card.querySelector(".card-text").textContent.split(": ")[1].toUpperCase();

            if ((nameInput === "" || cardTitle.indexOf(nameInput) > -1) &&
                (specialityInput === "" || specialityText.indexOf(specialityInput) > -1)) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        });

        // Show all cards if all filters are cleared
        if (nameInput === "" && specialityInput === "") {
            cards.forEach(function(card) {
                card.style.display = "flex";
            });
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
