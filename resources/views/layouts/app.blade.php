<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
        .table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table th, .table td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 4px; }
        .alert-bahaya { background-color: #f8d7da; color: #721c24; }
        .alert-sukses { background-color: #d4edda; color: #155724; }
        .alert-info { background-color: #d1ecf1; color: #0c5460; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('mahasiswa.profil') }}">Profil</a>
        <a href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
    </nav>
    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>