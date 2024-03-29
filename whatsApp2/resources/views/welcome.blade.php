<!doctype html>
<html lang="en">

<head>
    <title>whatsApp2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="{{ asset('images/icono.webp') }}" type="image/x-icon">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-white">Bienvenidos sean a whatsApp2</h1>
            <div class="mt-5">
                <a href="{{ route('home') }}"> <button type="button"
                        class="btn btn-success  btn-block">Home</button></a>
            </div>
        </div>
        </div>
        
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->

</body>

</html>
