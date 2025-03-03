<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
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
            padding: 15px;
            text-align: center;
            position: relative;
        }
        .card-header h4 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .majestic-animation {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #007BFF);
            animation: majestic 2s infinite;
        }
        @keyframes majestic {
            0% {
                width: 0;
            }
            50% {
                width: 100%;
            }
            100% {
                width: 0;
            }
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

        .job-title {
            font-weight: bold;
        }
        .job-description {
            margin-top: 10px;
        }
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-footer a {
            text-decoration: none;
            color: #007BFF;
        }
        .card-footer a:hover {
            text-decoration: underline;
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
                    <a class="nav-link" href="{{ url('/show_notice') }}">Notice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/show_gallery') }}">Gallery</a>
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="card-header">
                    <h4>CURRENTLY OFFERED JOBS</h4>
                    <div class="majestic-animation"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="positionFilter">Search by Position:</label>
                <input type="text" id="positionFilter" class="form-control" onkeyup="filterByPosition()">
            </div>
        </div>
    </div>

    <div class="row" id="jobList">
        @if(count($job) > 0)
            @foreach ($job as $item)
            <div class="col-md-12 job-card" data-deadline="{{ \Carbon\Carbon::parse($item->date)->format('Y-m-d') }}">
                    <div class="card-body">
                        <h5 class="job-title">{{ $item->position }}</h5>
                        <p class="job-description"><strong>Job Deadline:</strong> 
                            {{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}
                        </p>

                        <div class="additional-fields" style="display: none;">
                            <p class="job-description"><strong>Location:</strong> {{ $item->location }}</p>
                            <p class="job-description"><strong>Job Description:</strong> {{ $item->description }}</p>
                            <p class="job-description"><strong>Job Responsibility:</strong> {{ $item->requirement }}</p>
                            <p class="job-description"><strong>Experience Requirement:</strong> {{ $item->experience }}</p>
                            <p class="job-description"><strong>Office Hours:</strong> {{ $item->hour }}</p>
                            <p class="job-description"><strong>Salary:</strong> {{ $item->salary }}</p>
                            <p class="job-description"><strong>Send Your Resume:</strong> {{ $item->email }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="mb-0"><a href="mailto:{{ $item->email }}?subject= Application for the Position of '{{ $item->position }}'&body=Dear Hiring Manager, I am interested in the '{{ $item->position }}' position.">Apply Now</a></p>
                        <button class="btn btn-primary show-details-btn" onclick="toggleDetails(this)">Show Details</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>Sorry, Currently, We are not hiring!</p>
                </div>
            </div>
        @endif
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Use full version -->
<script>
    $(document).ready(function () {
        // Get today's date and reset the time to compare only the date part
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        // Loop through each job card and hide expired jobs
        document.querySelectorAll('.job-card').forEach(function(card) {
            const deadlineString = card.getAttribute('data-deadline'); // 'Y-m-d' format
            const deadline = new Date(deadlineString); // Parse the date

            // If the job's deadline has passed, hide the job card
            if (deadline < today) {
                card.style.display = 'none';
            }
        });
    });

    function filterByPosition() {
        var input, filter, jobCards, jobCard, jobTitle, i, txtValue;
        input = document.getElementById("positionFilter");
        filter = input.value.toUpperCase();
        jobCards = document.querySelectorAll(".job-card");

        jobCards.forEach(function(jobCard) {
            jobTitle = jobCard.querySelector(".job-title");
            txtValue = jobTitle.textContent || jobTitle.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                jobCard.style.display = "";
            } else {
                jobCard.style.display = "none";
            }
        });
    }

    function toggleDetails(button) {
        var card = button.closest('.job-card');
        var details = card.querySelector('.additional-fields');
        if (details.style.display === 'none' || details.style.display === '') {
            details.style.display = 'block';
        } else {
            details.style.display = 'none';
        }
    }
</script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
