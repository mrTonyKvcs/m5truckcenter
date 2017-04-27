<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
<head>
	<meta charset="UTF-8">
	<title>M5 TRUCK CENTER</title>
</head>
<body>

	@yield('content')

	<scriptc src="{{ mix('/js/app.js') }}"></script>
</body>
</html>