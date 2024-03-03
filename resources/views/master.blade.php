<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/tailwind.css'])
    
</head>
<body class="bg-stone-200 p-2">
    <div class="container">
        @yield('content')
    </div>
</body>
</html> 