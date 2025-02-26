<!DOCTYPE html>
<html>

<head>
    <style>
        /* Button styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Dashboard container styles */
        .dashboard-container {
            background-color: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        /* Heading styles */
        .dashboard-heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        /* Subheading styles */
        .dashboard-subheading {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        /* Button container styles */
        .btn-container {
            margin-top: 20px;
        }

        /* Interactive button animations */
        .btn-illusion:hover {
            animation: pulse 0.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <x-app-layout>
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dashboard-container">
                    <p class="dashboard-heading">{{ __("Welcome to Your Dashboard!") }}</p>
                    <p class="dashboard-subheading">{{ __("You're logged in!") }}</p>

                    <div class="btn-container">
                        <a href="{{ url('/doctor') }}" class="btn btn-illusion">DOCTOR PORTAL</a>
                        <a href="{{ url('/test') }}" class="btn btn-illusion">TEST PORTAL</a>
                        <a href="{{ url('/package') }}" class="btn btn-illusion">PACKAGE PORTAL</a>
                        <a href="{{ url('/banner') }}" class="btn btn-illusion">BANNER PORTAL</a>
                        <a href="{{ url('/gallery') }}" class="btn btn-illusion">GALLERY</a>
                        <a href="{{ url('/notice') }}" class="btn btn-illusion">NOTICE</a>
                        <a href="{{ url('/job') }}" class="btn btn-illusion">CAREER PORTAL</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="dashboard-container">
                    <p class="dashboard-heading">{{ __("All The View Pages Are Here!") }}</p>
                    

                    <div class="btn-container">
                    <a href="{{ url('/') }}" class="btn btn-illusion">LANDING PAGE</a>
                        <a href="{{ url('/show_doctor') }}" class="btn btn-illusion">VIEW DOCTOR</a>
                        <a href="{{ url('/show_test') }}" class="btn btn-illusion">VIEW TEST </a>
                        <a href="{{ url('/show_package') }}" class="btn btn-illusion">VIEW PACKAGE </a>
                        <a href="{{ url('/show_gallery') }}" class="btn btn-illusion">VIEW GALLERY</a>
                        <a href="{{ url('/show_notice') }}" class="btn btn-illusion">VIEW NOTICE</a>
                        <a href="{{ url('/show_job') }}" class="btn btn-illusion">VIEW CAREER </a>
                    </div>
                </div>
            </div>
        </div>


    </x-app-layout>
</body>

</html>
