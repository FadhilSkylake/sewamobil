
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="{{ asset('image/apple-touch-icon.png') }}" sizes="180x180">
<link rel="icon" href="{{ asset('image/favicon-32x32.png') }}" sizes="32x32" type="image/png">
<link rel="icon" href="{{ asset('image/favicon-16x16.png') }}" sizes="16x16" type="image/png">
<link rel="manifest" href="{{ asset('image/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('image/safari-pinned-tab.svg') }}" color="#712cf9">
<link rel="icon" href="{{ asset('image/favicon.ico') }}">
<meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sign-in.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" name="username" required class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="text-start my-3">
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </div>
    </form>
<button class="btn btn-danger w-100 py-2" type="submit">Registrasi</button>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
