<!DOCTYPE html>
<html>
    <head>
        <title>CrudInsert</title>
        <meta charset="utf-8">
        <?php
        
        $con=mysqli_connect("localhost","root","","DatosPersonales") or die("error");
        
        ?>
    </head>
    <body>
        <form method="post" action="indexInsert.php">
            <p>
            <label>Nombre</label>
            <input type="varchar" name="nombre" placeholder="Escribre tu nombre"><br/>
            </p>
            <p>
            <label>Genero</label>
            <input type="varchar" name="genero" placeholder="Genero"><br/>
            </p>
            <p>
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nac" placeholder=""><br/>
            </p>
            <p>
            <label>Nacionalidad</label>
            <input type="varchar" name="nacionalidad" placeholder=""><br/>
            </p>
            <input type="submit" name="insert" value="INSERTAR DATOS">
        </form>
        
        <?php
            if (isset($_POST['insert'])){
                $nombre = $_POST['nombre'];
                $genero = $_POST['genero'];
                $fecha = $_POST['fecha_nac'];
                $nacionalidad = $_POST['nacionalidad'];
                
                $insertar ="INSERT INTO datos (nombre,genero,fecha_nac,nacionalidad) values('$nombre','$genero','$fecha','$nacionalidad')";
                $ejecutar = mysqli_query($con,$insertar);
                if ($ejecutar){
                    echo "<h3>Se ingreso correctamente</h3>";
                }
            }
        ?>
    </body>
</html>