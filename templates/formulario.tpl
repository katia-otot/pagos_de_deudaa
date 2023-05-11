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
    <h2>Formulario</h2>
   
    <form method="post" action="../nuevoPago">
        <input type = "hidden" name="id" value="{$pago->id}"><br>

        <label  for ="deudor"> Nombre: </label>
        <input type = "text" name="deudor" value="{$pago->deudor}"><br>

        <label  for ="cuota"> Número de cuota: </label>
        <input type = "number" name="cuota" value="{$pago->cuota}"><br>

        <label  for ="cuota_capital"> Cuota capital: </label>
        <input type = "number" name="cuota_capital" value="{$pago->cuota_capital}"><br>

        <label  for ="fecha_pago"> Fecha de pago: </label>
        <input type = "number" name="fecha_pago" value="{$pago->fecha_pago}" placeholder="aaaa-mm-dd"><br>

        <input type="submit" value="Enviar"><br>
    </form>
    {include file="footer.tpl"}
</body>
</html>