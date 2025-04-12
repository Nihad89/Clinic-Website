

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/nav_foot.css')}}">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial';
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        .card-header {
            background-color: #7bb2eb;
            color: #fff;
            border-radius: 10px 10px 0 0;
            text-transform: uppercase;
            
        }
        .card-title {
            font-weight: bold;
            margin-bottom: 0;
            font-size: 24px;
        }
        .btn-back {
            background-color: #ff5555;
        }
        .btn-back:hover {
            background-color: #cc0000;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #7bb2eb;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .table thead th {
            background-color: #7bb2eb;
            color: #fff;
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


    <!-- TEST -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title"> Investigations</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="testNameFilter">Search by Investigations Name:</label>
                                <input type="text" id="testNameFilter" class="form-control" onkeyup="filterTable('testNameFilter', 'name')">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="categoryFilter">Search by Category:</label>                             
                                <select id="categoryFilter" class="form-control">
                                <option value="">All Categories</option>
                                </select>

                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                    <th>Investigation Name</th>
                                    <th>Investigation Category</th>
                                    <th>Sample Type</th>
                                    <th>Price Per Unit</th>
                                    <th>Estimated Delivery</th>
                                    <th>Additional Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($test as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->catagory }}</td>
                                    <td>{{ $item->sample }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->delivery }}</td>
                                    <td>{{ $item->comment }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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


    <script>
// Populate category options dynamically
function populateCategoryOptions() {
    var select = document.getElementById('categoryFilter');
    var categories = getUniqueCategories();

    categories.forEach(function(category) {
        var option = document.createElement('option');
        option.value = category;
        option.textContent = category;
        select.appendChild(option);
    });
}

// Replace this function with a server request to get unique categories
function getUniqueCategories() {
    var uniqueCategories = [];
    var table = document.querySelector("table");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
        var category = rows[i].getElementsByTagName("td")[1].textContent;
        if (!uniqueCategories.includes(category)) {
            uniqueCategories.push(category);
        }
    }

    return uniqueCategories;
}

// Call the function to populate category options when the page loads
window.addEventListener('load', function() {
    populateCategoryOptions();
});

// Function to filter the table based on input
function filterTable() {
    var nameInput = document.getElementById('testNameFilter').value.toUpperCase();
    var categoryInput = document.getElementById('categoryFilter').value;
    var table = document.querySelector("table");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
        var nameTd = tr[i].getElementsByTagName("td")[0];
        var categoryTd = tr[i].getElementsByTagName("td")[1];
        var nameTxtValue = nameTd.textContent || nameTd.innerText;
        var categoryTxtValue = categoryTd.textContent || categoryTd.innerText;

        // Check if the row should be displayed
        if ((nameInput === '' || nameTxtValue.toUpperCase().indexOf(nameInput) > -1) &&
            (categoryInput === '' || categoryInput === 'All Categories' || categoryTxtValue === categoryInput)) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

// Event listeners for input changes
document.getElementById('testNameFilter').addEventListener('keyup', filterTable);
document.getElementById('categoryFilter').addEventListener('change', filterTable);


        
    </script>



    
</body>
</html>
