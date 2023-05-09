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
                </tr>
            {/foreach}
        </tbody>
        </table>
    <h2>Formulario</h2>
           <form method="post" action="nuevoPago">
                <label  for ="deudor"> Nombre: </label>
                <input type = "text" name="deudor"><br>

                <label  for ="cuota"> Número de cuota: </label>
                <input type = "number" name="cuota"><br>

                <label  for ="cuota_capital"> Cuota capital: </label>
                <input type = "number" name="cuota_capital"><br>

                <label  for ="fecha_pago"> Fecha de pago: </label>
                <input type = "number" name="fecha_pago"><br>

                <input type="submit" value="Enviar"><br>
           </form>

        </section>
    </main>
    {include file="footer.tpl"}