<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            font-family: 'Arial', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            animation: fadeIn 1s ease-in-out;
        }
        .form-container h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ff758c;
        }
        .form-container .form-control {
            border-radius: 10px;
            border: 1px solid #ff758c;
        }
        .form-container .form-control:focus {
            border-color: #ff7eb3;
            box-shadow: 0 0 5px #ff7eb3;
        }
        .form-container button {
            background: linear-gradient(45deg, #ff7eb3, #ff758c);
            border: none;
            border-radius: 30px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            transition: all 0.3s;
            width: 100%;
        }
        .form-container button:hover {
            background: linear-gradient(45deg, #ff758c, #ff7eb3);
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>


    <!-- Scripts -->

</head>

{{--@include('layouts.header')--}}

@yield('content')



<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
