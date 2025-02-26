<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">EDIT Job
                        <a href="{{ url('job') }}" class="btn btn-back float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-job/' .$job->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @method('PUT')

                        <div class="form-group">
                            <label for="position">Offered Job Position</label>
                            <input type="text" name="position" value="{{$job-> position}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="location">Job Location</label>
                            <input type="text" name="location" value="{{$job-> location}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <input type="text" name="description" value="{{$job-> description}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="requirement">Job Responsibility</label>
                            <input type="text" name="requirement" value="{{$job-> requirement}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience Requirement</label>
                            <input type="text" name="experience" value="{{$job-> experience}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="hour">Office Hours</label>
                            <textarea name="hour" value="{{$job-> hour}}" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="salary">Expected Salary Range</label>
                            <textarea name="salary" value="{{$job-> salary}}" class="form-control"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="email">Email Your Resume At</label>
                            <textarea name="email" value="{{$job-> email}}" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Job Deadline</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Job</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>
