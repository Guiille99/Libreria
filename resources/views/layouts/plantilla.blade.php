<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <div class="logo__container">
                <figure>
                    <img src="uploads/logo.png" alt="LOGO">
                </figure>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>