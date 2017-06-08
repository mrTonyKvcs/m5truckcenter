<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>M5TruckCenter - Árajánlat</title>
</head>
<body>
	<strong>Név: </strong>{{ $data->name }}<br><br>
	<strong>Telefonszam: </strong><a href="tel:{{ $data->phone }}">{{ $data->phone }}</a><br><br>
	<strong>Email: </strong><a href="mailto:{{ $data->email }}"></a>{{ $data->email }}<br><br>
	<strong>Gépjármű típusa: </strong>{{ $data->vehicle_type }}<br><br>
	<strong>Alvázszám: </strong>{{ $data->chassis_number }}<br><br>
	<strong>Keresett alkatrész(ek): </strong>{{ $data->part }}<br><br>
	<hr>
	<strong>Üzenet: </strong>
	<p>{{ $data->message }}</p>
</body>
</html>