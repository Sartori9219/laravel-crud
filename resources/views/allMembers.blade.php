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
            <h3>MemberList</h3>
            <table class="table table-dark table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NAME</th>
                  <th>HOBBY</th>
                </tr>
              </thead>
              <tbody>
                  @php $i = 1;  @endphp
                  @foreach ($members as $member)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $member['memname'] }}</td>
                    <td>{{ $member['hobby'] }}</td>
                  </tr>
                  @php $i = $i + 1;  @endphp
                @endforeach
              </tbody>
            </table>
            <div class="d-grid gap-2 justify-content-md-end">
              <a
                class="btn btn-danger"
                type="button"
                href="newmember"
                >
                Create Member
            </a>
            </div>
          </div>
		</div>
	</body>
</html>
