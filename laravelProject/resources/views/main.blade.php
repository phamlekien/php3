<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>Trang Tin Tức</h1>
        <nav>
            <a href="{{ url('/') }}">Trang chủ</a>
            <a href="{{ url('/tin-tuc') }}">Tin tức</a>
            <a href="{{ url('/lien-he') }}">Liên hệ</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 - Trang tin tức Laravel</p>
    </footer>
</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
