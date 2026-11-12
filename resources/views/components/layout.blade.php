<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>

    <nav class="navbar navbar-translucent md:navbar-expand" data-bs-theme="dark">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">All Posts</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container">
        {{ $slot }}
    </main>

    <footer>
        <p class="text-center">Aulab project: Laravel DB</p>
    </footer>

    @vite('resources/js/app.js')
</body>

</html>
