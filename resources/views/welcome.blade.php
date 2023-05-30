<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

	</head>
	<body class="antialiased">
		<div>
          <h1 class="bg-primary p-1 text-center">
            Welcome to my laravel product!
          </h1>
          <a href="member">
            <h3 class="bg-secondary">
              Please jump to CRUD!
            </h3>
          </a>
		</div>
	</body>
</html>
