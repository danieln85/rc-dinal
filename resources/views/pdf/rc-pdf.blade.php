<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recibo de Caja</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 40px;
            font-size: 14px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            width: 100px;
        }
        .content {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://rc.dinalpartes.com/logo/logo-dinalpartes.png" alt="Logo" class="logo">
        <h1>Recibo de Caja</h1>
    </div>
    <div class="content">
        <table>
            <tr>
                <th>Descripción</th>
                <td>Abono de servicio</td>
            </tr>
            <tr>
                <th>{{ $datos->informacion }}</th>
                <td>${{$datos->cobro_abono}}
</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>{{$datos->date_cobro}}</td>
            </tr>
            <tr>
                <th>Recibido por</th>
                <td>{{$datos->cobrado_por}}
</td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <p>Gracias por su pago</p>
    </div>
</body>
</html>
