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
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
            margin-bottom: 20px;
            background-color: #fff;
            position: relative;
        }
        .card:hover {
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
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .add-job-button {
            text-align: right;
            margin-bottom: 10px;
        }
        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar {
            background-color: #c3e0ff; /* Color for Navigation Background */
        }

        .navbar-brand img {
            max-height: 55px;
            margin-right: 15px;
        }

        .custom-navbar {
            background-color: #c3e0ff; /* Replace with your desired color */
        
        }
        
        .navbar-toggler {
            border-color: #ffffff; /* Adjust if needed */
        }

        .navbar-nav .nav-item {
            padding: 10px;
        }

        .navbar-nav .nav-item a {
            color: #7e7f81;   /* Color for Navigation Links */
            text-decoration: none;
            font-weight: bold; 
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-item a:hover {
            color: #0332f8 !important;
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
                    <a class="nav-link" href="{{ url('/doctor') }}">DOCTOR</a>
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

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h4 class="add-job-button">
        <a href="{{ url('add-job') }}" class="btn btn-danger btn-sm">ADD JOB</a>
    </h4>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="positionFilter">Search by Position:</label>
                <input type="text" id="positionFilter" class="form-control" onkeyup="filterByPosition()">
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($job as $item)
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->position }}</h5>
                    <h5></h5>
                    <p class="card-text"><strong>Location:</strong> {{ $item->location }}</p>
                    <p class="card-text"><strong>Job Description:</strong> {{ $item->description }}</p>
                    <p class="card-text"><strong>Job Responsibilities:</strong> {{ $item->requirement }}</p>
                    <p class="card-text"><strong>Experience:</strong> {{ $item->experience }}</p>
                    <p class="card-text"><strong>Office Hours:</strong> {{ $item->hour }}</p>
                    <p class="card-text"><strong>Salary:</strong> {{ $item->salary }}</p>
                    <p class="card-text"><strong>Email Your Resume:</strong> {{ $item->email }}</p>
                    <p class="card-text"><strong>Job Deadline:</strong> {{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('edit-job/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ url('delete-job/'.$item->id) }}" method="POST">
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

<script>
    $(document).ready(function () {
        // Initialize the datepicker
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    });

    $(document).ready(function () {
    // Initialize DataTable with custom sorting for the Date column
    $('#salesTable').DataTable({
        columnDefs: [
            {
                targets: [0], // Apply custom sorting to the first column (Date)
                render: function (data, type, row) {
                    if (type === 'sort') {
                        // Extract the day part from the date
                        var parts = row[0].split('/');
                        return parts[0]; // Return the day part for sorting
                    }
                    return data; // Display the original date for display
                },
            }
        ],
        order: [[0, 'desc']], // Sort by the first column (Date) in descending order
    });
});
</script>
<script>
    function filterByPosition() {
        var input, filter, cards, card, cardTitle, i, txtValue;
        input = document.getElementById("positionFilter");
        filter = input.value.toUpperCase();
        cards = document.querySelectorAll(".card");

        cards.forEach(function(card) {
            cardTitle = card.querySelector(".card-title");
            txtValue = cardTitle.textContent || cardTitle.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                card.style.display = "";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>
</body>
</html>
