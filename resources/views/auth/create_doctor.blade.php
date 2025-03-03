<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>
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
        <div class="col-md-8"> 

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ADD DOCTOR
                        <a href="{{ url('doctor') }}" class="btn btn-back float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-doctor') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image">Doctor Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Doctor's Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="specialty">Doctor's Speciality</label>
                            <input type="text" name="specialty" id="specialty" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="degree">Doctor's Degree</label>
                            <input type="text" name="degree" id="degree" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="symptom">Designation</label>
                            <input type="text" name="symptom" id="symptom" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="day">Visiting Days</label>
                            <input type="text" name="day" id="day" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="time">Visiting Hours</label>
                            <textarea name="time" id="time" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phone">Call for Appointment</label>
                            <textarea name="phone" id="phone" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Doctor</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
