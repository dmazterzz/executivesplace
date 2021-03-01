<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<!-- Bluma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<!-- Scripts -->
	<script>
	window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
		</script>
	</head>

    <body>
        <section class="section">
            <div class="container">
                <div class="tabs">
                    <ul>
                        <li ><a href="{{ route('get.create.users') }}">Add User</a></li>
                        <li ><a href="{{ route('show.users') }}">View All Users</a></li>
                    </ul>
                </div>
            </div>
        </section>

    @yield('content')
    </body>
</html>