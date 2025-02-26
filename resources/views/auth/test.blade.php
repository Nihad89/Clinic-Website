<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
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
        .add-test-button {
            text-align: right;
            margin-bottom: 10px;
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

        .navbar-nav {
            margin: 0 auto;
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
                    <a class="nav-link" href="{{ url('/test') }}">DOCTOR</a>
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

<div class="container">
    <h4 class="add-test-button">
        <a href="{{ url('add-test') }}" class="btn btn-danger btn-sm">ADD TEST</a>
    </h4>
    <div class="row">
        <div class="col-md-12">

            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="testNameFilter">Search by Test Name:</label>
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
                            <th>Test Name</th>
                            <th>Test Category</th>
                            <th>Sample Type</th>
                            <th>Price Per Unit</th>
                            <th>Estimated Delivery Time</th>
                            <th>Additional Comment</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <td>
                                    <a href="{{ url('edit-test/'.$item->id) }}"
                                       class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ url('delete-test/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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


<script>
// Category options dynamically
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

// server request to get unique categories
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
