<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <h1>Formulario de contacto</h1>
    <form action="/submit-contact" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>