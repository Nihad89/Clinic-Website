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
        justify-content: space-between; /* Align content vertically */
        border: none;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        flex-grow: 1; /* Allow the card body to grow and fill the remaining space */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Align content vertically */
    }

    .col-md-3 {
        padding-bottom: 20px; /* Adds space between rows */
    }

    .card-img-top {
        width: 100%; 
        height: 300px; /* Fixed Height  */
        object-fit: cover; 
        transition: transform 0.3s ease-in-out; 
    }

    .card-img-top:hover {
        transform: scale(1.1); 
        filter: brightness(0.9); /* darkens the image slightly on hover */
    }

    .card-header {
        background-color: #007BFF;
        color: #fff;
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
    }

    .btn-primary:hover {
        background-color: #0056b3;
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



  <!--Search Bars For Doctors -->



<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nameFilter">Search by Name:</label>
                    <input type="text" id="nameFilter" class="form-control" onkeyup="filterByName()">
                </div>
            </div>

            <div class="col-md-6 mx-auto">
            <div class="form-group">
                <label for="specialityFilter">Search by Specialty:</label>
                <select id="specialityFilter" class="form-control" onchange="filterBySpeciality()">
                    <option value="">All Specialties</option>
                </select>
            </div>
        </div>

        </div>


    <!-- Show Doctor -->



<div class="row" id="doctorResults">
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

        </div>
    </div>
    @endforeach
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


<script>

// Function to filter cards by name
function filterByName() {
    applyFilters();
}

// Function to filter cards by symptom


// Function to filter cards by specialty
function filterBySpeciality() {
    applyFilters(); 
}

// Master function to apply all filters together
function applyFilters() {
    var nameFilter = document.getElementById("nameFilter").value.toUpperCase();
    var specialityFilter = document.getElementById("specialityFilter").value.toUpperCase();
    var cards = document.querySelectorAll(".doctor-card");

    cards.forEach(function(card) {
        var cardName = card.querySelector(".card-title").textContent.toUpperCase();
        var cardSpeciality = card.querySelector(".card-text:nth-child(2)").textContent.split(": ")[1].toUpperCase();

        var matchesName = cardName.indexOf(nameFilter) > -1;
        var matchesSpeciality = specialityFilter === "" || cardSpeciality.indexOf(specialityFilter) > -1;

        if (matchesName && matchesSpeciality) {
            card.style.display = "flex";
        } else {
            card.style.display = "none";
        }
    });
}

// Function of specialty 
function populateSpecialityDropdown() {
    var select = document.getElementById("specialityFilter");
    var specialties = getUniqueSpecialties();

    specialties.forEach(function(specialty) {
        var option = document.createElement("option");
        option.value = specialty;
        option.textContent = specialty;
        select.appendChild(option);
    });
}

// Helper function to extract unique specialties from the cards
function getUniqueSpecialties() {
    var uniqueSpecialties = new Set();
    var cards = document.querySelectorAll(".doctor-card");

    cards.forEach(function(card) {
        var cardSpeciality = card.querySelector(".card-text:nth-child(2)").textContent.split(": ")[1];
        uniqueSpecialties.add(cardSpeciality);
    });

    return Array.from(uniqueSpecialties);
}

// Function to reset the filters and show all cards
function refreshPage() {
    document.getElementById("nameFilter").value = "";
    document.getElementById("specialityFilter").value = "";
    applyFilters(); // Reapply the filters with empty inputs
}

// Event listeners to call the appropriate filter functions
window.addEventListener("load", function() {
    document.getElementById("nameFilter").addEventListener("keyup", filterByName);
    document.getElementById("specialityFilter").addEventListener("change", filterBySpeciality);
    populateSpecialityDropdown();
});


</script>


</body>
</html>
