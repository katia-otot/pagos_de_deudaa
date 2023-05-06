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
    <main>
        <?php
            require 'db_pagos_de_deudas.php';

            $pagos = getPagos();
        ?>
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
                <?php foreach($pagos as $pago){
                    echo "<tr>";

                    echo "<td>". $pago->deudor ."</td>";
                    echo "<td>". $pago->cuota ."</td>";
                    echo "<td>". $pago->cuota_capital ."</td>";
                    echo "<td>". $pago->fecha_pago ."</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
           </table>
            
           <h2> Formulario</h2>
           <form method="post" action="db_pagos_de_deudas.php">
                <label  for ="deudor"> Nombre: </label>
                <input type = "text" name="deudor">

                <label  for ="cuota"> Numero de cuota: </label>
                <input type = "number" name="cuota">

                <label  for ="cuota_capital"> Cuota capital: </label>
                <input type = "number" name="cuota_capital">

                <label  for ="fecha_pago"> Fecha de pago: </label>
                <input type = "number" name="fecha_pago">

                <input type="submit" value="Enviar">
           </form>

        </section>
    </main>

</body>
</html>




    
