@extends('layouts.default')

@section('content')
@if ($__env->yieldContent('code') === '404')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fc;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            max-width: 600px;
        }
        .headline {
            font-size: 100px;
            font-weight: bold;
            color: #f4b400;
            margin-bottom: 10px;
        }
        .error-content h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .error-content p {
            font-size: 16px;
            color: #444;
            margin-bottom: 20px;
        }
        .error-content a {
            color: #007bff;
            text-decoration: none;
        }
        .search-form {
            display: flex;
            justify-content: center;
        }
        .search-form .form-control {
            max-width: 300px;
            border-radius: 4px 0 0 4px;
            padding: 10px;
            border: 1px solid #ddd;
            outline: none;
        }
        .search-form .btn {
            background-color: #f4b400;
            border-radius: 0 4px 4px 0;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <section class="content">
        <div class="error-page text-center">
            <h2 class="headline">404</h2>

            <div class="error-content">
                <h3>
                    <i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.
                </h3>

                <p>
                    We could not find the page you were looking for. Meanwhile, you may
                    <a href="../../index.html">return to dashboard</a>
                    or try using the search form.
                </p>

                <form class="search-form">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button type="submit" class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>

@elseif ($__env->yieldContent('code') === '500')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Internal Server Error</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fc;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .content {
            max-width: 600px;
        }
        .headline {
            font-size: 100px;
            font-weight: bold;
            color: #d9534f;
            margin-bottom: 10px;
        }
        .error-content h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .error-content p {
            font-size: 16px;
            color: #444;
            margin-bottom: 20px;
        }
        .error-content a {
            color: #007bff;
            text-decoration: none;
        }
        .search-form {
            display: flex;
            justify-content: center;
        }
        .search-form .form-control {
            max-width: 300px;
            border-radius: 4px 0 0 4px;
            padding: 10px;
            border: 1px solid #ddd;
            outline: none;
        }
        .search-form .btn {
            background-color: #d9534f;
            border-radius: 0 4px 4px 0;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <section class="content">
        <div class="error-page text-center">
            <h2 class="headline">500</h2>
            <div class="error-content">
                <h3>
                    <i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.
                </h3>
                <p>
                    We will work on fixing that right away. Meanwhile, you may
                    <a href="../../index.html">return to dashboard</a>
                    or try using the search form.
                </p>
                <form class="search-form">
                    <input type="text" name="search" class="form-control" placeholder="Search">
                    <button type="submit" class="btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

@endif
@yield('code')
@yield('message')

@endsection
