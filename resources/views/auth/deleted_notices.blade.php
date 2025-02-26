<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Notices</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Deleted Notices</h2>

    <!-- Check if there are any deleted notices -->
    @if($deletedNotices->isEmpty())
        <div class="alert alert-info">
            No deleted notices found.
        </div>
    @else
        @foreach ($deletedNotices as $log)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $log->des_a }}</h5>
                    <p class="card-text">{{ $log->des_b }}</p>
                    <p><strong>Deleted By:</strong> {{ $log->admin ? $log->admin->name : 'Unknown' }}</p>
                    <p><strong>Deleted At:</strong> {{ $log->deleted_at ? $log->deleted_at->format('d M Y, h:i A') : 'N/A' }}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>

<!-- Display Admin Information -->
@if(Auth::check())
    <div class="container mt-4">
        <p><strong>Logged-in Admin ID:</strong> {{ Auth::id() }}</p>

    </div>
@endif

</body>
</html>
