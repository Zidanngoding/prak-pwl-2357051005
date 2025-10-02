<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet">

    <!-- Google Font & Custom Style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffe1f0, #ffc2d1, #ffb3c6);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .card {
            border-radius: 20px;
        }

        footer {
            background: #ffb6c1;
            color: white;
            font-weight: 600;
            box-shadow: 0 -4px 15px rgba(0,0,0,0.1);
        }

        nav.navbar {
            background: linear-gradient(90deg, #ff7aa2, #ff9eb3);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background-color: #ff6f91;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ff4f7a;
        }
    </style>
</head>
<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
