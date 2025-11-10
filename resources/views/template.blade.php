<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon site Laravel')</title>
    <style>
        body { font-family: sans-serif; max-width: 900px; margin: 24px auto; }
        header, footer { padding: 12px 0; }
        nav a { margin-right: 12px; text-decoration: none; color: #2c3e50; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>Mon site Laravel</h1>
        <nav>
            <a href="/">Accueil</a>
            <a href="/services">Services</a>
            <a href="/contact">Contact</a>
        </nav>
        <hr>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} – Formation Laravel B2B</p>
    </footer>
</body>
</html>
