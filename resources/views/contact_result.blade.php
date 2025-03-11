<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>
</head>

<body>
    <h1>Información Suministrada</h1>
    <ul>
        <li><strong>Nombre:</strong> {{ $data['name'] }}</li>
        <li><strong>Teléfono:</strong> {{ $data['phone'] }}</li>
        <li><strong>Dirección:</strong> {{ $data['address'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
    </ul>
</body>

</html>