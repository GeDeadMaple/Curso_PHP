<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <?php
        
        $con = mysqli_connect("localhost","root","","DatosPersonales") or die("error");
        
        ?>
    <title>CrudDelete</title>
        <style>
            table, th, td {
            border: 2px solid;
            background-color:#f9f9f9;
            color: black;
            }
            tr {
                text-align: center;
            }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>GENERO</th>
            <th>FECHA_NACIMIENTO</th>
            <th>NACIONALIDAD</th>
            <th>BORRAR</th>
        </tr>
        <?php
            $consulta = "SELECT * FROM datos";
            $ejecutar = mysqli_query($con, $consulta);

            $i = 0;

            while ($fila = mysqli_fetch_array($ejecutar)){
                $id_datos = $fila['id_datos'];
                $nombre = $fila['nombre'];
                $genero = $fila['genero'];
                $fecha = $fila['fecha_nac'];
                $nacionalidad = $fila['nacionalidad'];
                $i++; 
        ?>
        <tr>
            <td><?php echo $id_datos; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $genero; ?></td>
            <td><?php echo $fecha; ?></td>
            <td><?php echo $nacionalidad; ?></td>
            <td><a href="indexDelete.php?borrar=<?php echo $id_datos; ?>">Borrar</a></td>
        </tr>
            <?php }?>
        </table>
    
</body>
</html>