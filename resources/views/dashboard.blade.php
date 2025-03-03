<!DOCTYPE html>
<html>

<head>
    <style>
        /* Button styles */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-right: 10px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
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

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            animation: pulse 0.5s infinite;
        }

        .btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover::before {
            transform: translate(-50%, -50%) scale(1);
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
    </style>
    <title>Dashboard</title>
</head>

<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="dashboard-container">
                    <p class="dashboard-heading">{{ __("Welcome to Your Dashboard!") }}</p>
                    <p class="dashboard-subheading">{{ __("You're logged in!") }}</p>

                    <div class="btn-container">
                        <a href="{{ url('/doctor') }}" class="btn">DOCTOR PORTAL</a>
                        <a href="{{ url('/test') }}" class="btn">TEST PORTAL</a>
                        <a href="{{ url('/package') }}" class="btn">PACKAGE PORTAL</a>
                        <a href="{{ url('/banner') }}" class="btn">BANNER PORTAL</a>
                        <a href="{{ url('/gallery') }}" class="btn">GALLERY</a>
                        <a href="{{ url('/notice') }}" class="btn">NOTICE</a>
                        <a href="{{ url('/job') }}" class="btn">CAREER PORTAL</a>
                        <a href="{{ url('/delated_notices') }}" class="btn">ADMIN INFO</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="dashboard-container">
                    <p class="dashboard-heading">{{ __("All The View Pages Are Here!") }}</p>

                    <div class="btn-container">
                        <a href="{{ url('/') }}" class="btn">LANDING PAGE</a>
                        <a href="{{ url('/show_doctor') }}" class="btn">VIEW DOCTOR</a>
                        <a href="{{ url('/show_test') }}" class="btn">VIEW TEST</a>
                        <a href="{{ url('/show_package') }}" class="btn">VIEW PACKAGE</a>
                        <a href="{{ url('/show_gallery') }}" class="btn">VIEW GALLERY</a>
                        <a href="{{ url('/show_notice') }}" class="btn">VIEW NOTICE</a>
                        <a href="{{ url('/show_job') }}" class="btn">VIEW CAREER</a>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>

</html>