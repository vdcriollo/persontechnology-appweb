<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gracias por tu mensaje</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f6f7fb;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        .email-container {
            max-width: 620px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.07);
        }
        .header {
            background: linear-gradient(135deg, #1f1f24, #32323a);
            padding: 30px;
            text-align: center;
        }
        .header img {
            height: 60px;
            margin-bottom: 10px;
        }
        .header h1 {
            color: #a8ff53;
            font-size: 22px;
            margin: 0;
        }
        .body {
            padding: 40px 30px;
            color: #333333;
        }
        .body h2 {
            margin-top: 0;
            font-size: 20px;
            color: #1f1f24;
        }
        .body p {
            line-height: 1.6;
            font-size: 15px;
            color: #555555;
        }
        .summary {
            margin: 30px 0;
            background-color: #f2f4f8;
            border-radius: 8px;
            padding: 20px;
        }
        .summary h3 {
            margin-top: 0;
            font-size: 16px;
            color: #1f1f24;
        }
        .summary ul {
            padding-left: 20px;
            color: #333;
            margin: 0;
        }
        .footer {
            padding: 25px 30px;
            background-color: #1f1f24;
            color: #cccccc;
            font-size: 13px;
            text-align: center;
        }
        .footer a {
            color: #a8ff53;
            text-decoration: none;
        }
        @media screen and (max-width: 600px) {
            .body, .footer {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ $message->embed(public_path('logo.png')) }}" alt="Person Technology">
            <h1>Person Technology</h1>
        </div>
        <div class="body">
            <h2>¡Gracias por contactarnos, {{ $contacto->nombre_completo }}!</h2>
            <p>
                Tu mensaje ha sido recibido exitosamente. Nuestro equipo lo revisará y nos pondremos en contacto contigo muy pronto.
            </p>

            <div class="summary">
                <h3>📄 Resumen de tu mensaje:</h3>
                <ul>
                    <li><strong>Asunto:</strong> {{ $contacto->asunto }}</li>
                    <li><strong>Interés:</strong> {{ ucfirst($contacto->interes) }}</li>
                    <li><strong>Mensaje:</strong> {{ $contacto->mensaje }}</li>
                </ul>
            </div>

            <p>
                Mientras tanto, puedes explorar más sobre nuestros servicios y soluciones en nuestra página web.
            </p>
        </div>
        <div class="footer">
            <p><strong>Person Technology</strong> – Desarrollamos el futuro, hoy</p>
            <p>
                Tel: <a href="tel:+593998808775">+593 998 808 775</a> | 
                Email: <a href="mailto:info@persontechnology.net">info@persontechnology.net</a><br>
                Dirección: Av. 9 de Octubre y 24 de Mayo, frente a CACPECO, Salcedo‑Cotopaxi, Ecuador<br>
                Web: <a href="https://www.persontechnology.net">www.persontechnology.net</a>
            </p>
        </div>
    </div>
</body>
</html>
