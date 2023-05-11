<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    {include file="header.tpl"}
    <main>
    <section>
        <table class="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cuota</th>
                <th>Cuota capital</th>
                <th>Fecha de Pago</th>
            </tr>
        </thead>
        <tbody>
            {foreach from = $pagos item = $pago}
                <tr>
                    <td>{$pago->deudor}</td>
                    <td>{$pago->cuota}</td>
                    <td>{$pago->cuota_capital}</td>
                    <td>{$pago->fecha_pago}</td>
                    <td><input type="submit" value="Editar" onclick="window.location='formulario/' + {$pago->id} ;" /> </td>
                </tr>
            {/foreach}
        </tbody>
        </table>
        
        <input type="submit" value="Agregar" onclick="window.location='formulario/0';" /> 

        </section>
    </main>
    {include file="footer.tpl"}
</body>
</html>