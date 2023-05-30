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
          <div class="container mt-3">
            <h3>NewMember</h3>
            <form
                class="row g-3 needs-validation"
                novalidate
                method="POST"
                action="{{route('member')}}"
                >
                @csrf
                <div class="col-md-1 text-center">
                  <label for="validationCustom01" class="form-label">Name</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="memname" value="" required>
                </div>
                <div class="col-md-1 text-center">
                  <label for="validationCustom02" class="form-label">Hobby</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="hobby" value="" required>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>
          </div>
		</div>
	</body>
</html>
