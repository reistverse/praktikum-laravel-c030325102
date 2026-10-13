<!DOCTYPE html>
<html>
<head>
    <title>@yield('judul', 'Aplikasi Akademik')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav { background: #333; padding: 10px; margin-bottom: 20px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        footer { text-align: center; color: gray; margin-top: 40px; font-size: 0.9em; }
    </style>
</head>
<body>
    <!-- Navbar (Header navigasi konsisten) -->
    @include('partials.navbar')

    <hr>

    <!-- Konten dinamis dari setiap halaman akan tampil di sini -->
    @yield('konten')

    <hr>
    
    <!-- Footer konsisten di paling bawah -->
    <footer>
        <p>&copy; 2026 - Sistem Informasi Akademik | D3 Teknik Informatika</p>
    </footer>
</body>
</html>