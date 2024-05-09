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
            width: 200px;
			height: 70px;
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
		h2 {
            text-align: left;
            margin-top: 0; 
            
        }
		
    </style>
</head>
<body>
    <div class="header">
        <img src="https://rc.dinalpartes.com/images/logo/logo-dinalpartes.png" alt="Logo-Dinalpartes" class="logo">
        <h1>Recibo de Caja</h1>
		<h2>No. {{ $datos->numero_rc }}</h2>
    </div>
    <div class="content">
        <table>
			<tr>
                <th>Fecha</th>
                <td>{{ $datos->date_cobro }}</td>
            </tr>
			<tr>
                <th>NIT</th>
                <td>{{ $datos->nit }}</td>
            </tr>
			<tr>
                <th>Cliente</th>
                <td>{{ $datos->nombre_cliente }}</td>
            </tr>
			<tr>
                <th>No Factura</th>
                <td>{{ $datos->num_factura }}</td>
            </tr>
			<tr>
                <th>Valor Recibido</th>
                <td>${{ $datos->cobro_abono }}</td>
            </tr>
			<tr>
                <th>Método de pago</th>
                <td>{{ ucfirst(trim($datos->metodo_pago, ',')) }}</td>
            </tr>
            <tr>
                <th>Abono</th>
                <td>@if($datos->abono == '')
					N/A
					@else
					{{ $datos->abono }}
					@endif
</td>
            </tr>
			<tr>
                <th>Retención</th>
                <td>${{ $datos->retencion ? $datos->retencion : '0.00' }}</td>
            </tr>
			<tr>
                <th>Devolución</th>
                <td>${{ $datos->devolucion ? $datos->devolucion : '0.00' }}</td>
            </tr>
			<tr>
                <th>Descuentos</th>
                <td>${{ $datos->descuento ? $datos->descuento : '0.00' }}</td>
            </tr>
			<tr>
                <th>Observaciones</th>
                <td>{{ $datos->informacion }}</td>
            </tr>
			<tr>
                <th>Cobrado por</th>
                <td>{{ $datos->cobrado_por }}</td>
            </tr>
        </table>
    </div>
    <div class="footer">
				<p><ul>
					<li>Exige siempre tu recibo de caja por cada pago que realices en efectivo por tus facturas a crédito.</li>
					<li>Este recibo de caja es el único comprobante valido de tus pagos en Efectivo y/o por Nequi.</li>
					</ul>
				</p>
		<h4>Este recibo de caja es generado una vez realices el pago en efectivo de una factura de venta a crédito.</h4>
        <p>Gracias por preferirnos, visítanos en <a href="https://www.dinalpartes.com">www.dinalpartes.com</a></p>
    </div>
</body>
</html>
