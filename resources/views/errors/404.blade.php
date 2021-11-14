<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Custom Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
<div class="container mt-5 pt-5">
    <div class="alert alert-info text-center">
        <h2 class="display-3">404</h2>
        <p class="display-5">Ibra pracuje nad tą stroną!.</p>
        <img src="{{ asset('storage/ibra.png') }}">
    </div>
</div>
</body>

</html>