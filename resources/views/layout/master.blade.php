<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book System - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-3">
    <div class="container">
        <a href="{{ route('books.index') }}" class="navbar-brand">Book System</a>

        <div>
            <a href="{{ route('books.index') }}" class="btn btn-light btn-sm">Book List</a>
            <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">Category List</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
    
</body>
</html>