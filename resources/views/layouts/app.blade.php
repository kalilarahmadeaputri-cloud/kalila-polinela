<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel') - Polinela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Polinela</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Beranda</a>
                <a class="nav-link" href="/halo">Halo</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/kontak">Kontak</a>
            </div>
        </div>
    </nav>

    <main class="container flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-light text-center py-3 mt-5 border-top">
        <div class="container">
            <small class="text-muted">© 2026 – Latihan oleh Khalila Rahmadea Putri</small>
        </div>
    </footer>
</body>
</html>