<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        /*  CSS  dashboard button */
        .btn-illusion {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-illusion::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 70%);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
            border-radius: 50%;
        }

        .btn-illusion:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-illusion:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-illusion:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Currently Logged-in Admin Information</h2>

    <!-- Check if there are any deleted notices -->
    @if($deletedNotices->isEmpty())
        <div class="alert alert-info">
           Welcome to Sandhani Clinic & Diagnostic Complex's Admin INFO. Have a Great Day!😊
        </div>
    @else
        @foreach ($deletedNotices as $log)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $log->des_a }}</h5>
                <p class="card-text">{{ $log->des_b }}</p>
                <p><strong>Created By:</strong> {{ optional($log->creator)->name ?? 'Unknown' }} (ID: {{ $log->created_by }})</p>
                <p><strong>Deleted By:</strong> {{ optional($log->deleter)->name ?? 'Unknown' }} (ID: {{ $log->deleted_by }})</p>
                <p><strong>Deleted At:</strong> {{ $log->deleted_at ? $log->deleted_at->format('d M Y, h:i A') : 'N/A' }}</p>
            </div>
        </div>
        @endforeach
    @endif
</div>

<!-- Display Logged-in Admin Information -->
@if(Auth::check())
    <div class="container mt-4">
        <div class="alert alert-secondary">
            <p><strong>Admin ID:</strong> {{ Auth::id() }}</p>
            <p><strong>Admin Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Admin Email:</strong> {{ Auth::user()->email }}</p>
        </div>
    </div>
@endif

<!-- Dashboard Button -->
<div class="btn-container">
    <a href="{{ url('/dashboard') }}" class="btn btn-illusion">DASHBOARD</a>
</div>

</body>
</html>