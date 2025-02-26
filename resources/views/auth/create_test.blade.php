<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Test</title>
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
                    <h4 class="card-title">ADD TEST
                        <a href="{{ url('test') }}" class="btn btn-back float-right">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-test') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Test Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="catagory">Category</label>
                            <input type="text" name="catagory" id="catagory" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="sample">Sample Type</label>
                            <input type="text" name="sample" id="sample" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price">Unit Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="delivery">Estimated Delivery Time</label>
                            <input type="text" name="delivery" id="delivery" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="comment">Additional Notes</label>
                            <textarea name="comment" id="comment" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Test</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
