<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- VITE CONFIG -->
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="bg-gray-200">
    <header class="header" id="header">
        @yield('header')
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">

    </footer>
</body>
</html>
