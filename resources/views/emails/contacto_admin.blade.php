<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo mensaje desde Person Technology</title>
</head>
<body>
    
    <h2>Nuevo mensaje de contacto</h2>

    <p><strong>Nombre:</strong> {{ $contacto->nombre_completo }}</p>
    <p><strong>Teléfono:</strong> {{ $contacto->telefono_whatsapp }}</p>
    <p><strong>Correo:</strong> {{ $contacto->correo_electronico }}</p>
    <p><strong>Asunto:</strong> {{ $contacto->asunto }}</p>
    <p><strong>Interés:</strong> {{ ucfirst($contacto->interes) }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $contacto->mensaje }}</p>


</body>
</html>