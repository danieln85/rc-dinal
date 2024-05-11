<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recibo de Caja</title>
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            margin: 20px;
            font-size: 16px;
            color: #060000;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 200px;
            height: auto;
        }

        h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        h2 {
            font-size: 20px;
            margin: 5px 0;
            color: #9c070a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            width: 25%; /* 4 espacios de columna */
        }

        td {
            width: 75%; /* 8 espacios de columna */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }

        .note {
            font-size: 12px;
            color: #777;
            margin-top: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .mb-2 {
            margin-bottom: 5px;
        }

        .mt-2{
            margin-top: 20px;
        }

        .text-start {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="https://rc.dinalpartes.com/images/logo/logo-dinalpartes.png" alt="Logo-Dinalpartes" class="logo">
            <h1>Recibo de Caja</h1>
            <h2 class="text-start">No. {{ $datos->numero_rc }}</h2>
        </div>
        <table>
            <tr>
                <th colspan="4">Fecha</th>
                <td>{{ $datos->date_cobro }}</td>
            </tr>
            <tr>
                <th colspan="4">NIT</th>
                <td>{{ $datos->nit }}</td>
            </tr>
            <tr>
                <th colspan="4">Cliente</th>
                <td>{{ $datos->nombre_cliente }}</td>
            </tr>
            <tr>
                <th colspan="4">Email</th>
                <td>{{ $datos->email_cliente }}</td>
            </tr>
            <tr>
                <th colspan="4">No Factura</th>
                <td>{{ $datos->num_factura }}</td>
            </tr>
            <tr>
                <th colspan="4">Valor Recibido</th>
                <td>${{ $datos->cobro_abono }}</td>
            </tr>
            <tr>
                <th colspan="4">Método de pago</th>
                <td>{{ ucfirst(trim($datos->metodo_pago, ',')) }}</td>
            </tr>
            <tr>
                <th colspan="4">Abono</th>
                <td>@if($datos->abono == '') N/A @else {{ $datos->abono }} @endif</td>
            </tr>
            <tr>
                <th colspan="4">Retención</th>
                <td>${{ $datos->retencion ? $datos->retencion : '0.00' }}</td>
            </tr>
            <tr>
                <th colspan="4">Devolución</th>
                <td>${{ $datos->devolucion ? $datos->devolucion : '0.00' }}</td>
            </tr>
            <tr>
                <th colspan="4">Descuentos</th>
                <td>${{ $datos->descuento ? $datos->descuento : '0.00' }}</td>
            </tr>
            <tr>
                <th colspan="4">Observaciones</th>
                <td>{{ $datos->informacion }}</td>
            </tr>
            <tr>
                <th colspan="4">Cobrado por</th>
                <td>{{ $datos->cobrado_por }}</td>
            </tr>
        </table>
        <div class="footer">
            <p class="note">Nota: Este recibo de caja es generado una vez realices el pago en efectivo de una factura de venta a crédito.
            </p>
            <p>
                <h4 class="text-start">Recomendaciones:</h4>
                <ul class="text-start">
                    <li class="mb-2">Exige tu recibo de caja por los pagos que realices en efectivo de tus facturas a crédito.</li>
                    <li>Este recibo de caja es el único comprobante válido por pagos en efectivo.</li>
                </ul>
            </p>

            <h3  class="mt-2">¡Gracias por preferirnos! Visítanos en <a href="https://www.dinalpartes.com">www.dinalpartes.com</a>
            </h3>
        </div>
    </div>
</body>

</html>
