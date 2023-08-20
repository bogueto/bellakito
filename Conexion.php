<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $BaseDeDatos="registro";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);

    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }

    if(isset($_POST['registrar'])){
        $DIVISA=$_POST['divisa'];
        $INVERSION=$_POST['numero'];
        $ENTRADA=$_POST['tipoinv'];
        $RETORNO=$_POST['tasa'];
        $RESULTADO=$_POST['resultado'];
        $FECHA=$_POST['fecha'];
        $ESTRATEGIA=$_POST['estrategia'];

        $insertarDatos = "INSERT INTO `datos`(`DIVISA`, `INVERSION`, `ENTRADA`, `RETORNO`, `RESULTADO`, `FECHA`, `ESTRATEGIA`)
        VALUES ('$DIVISA', '$INVERSION', '$ENTRADA', '$RETORNO', '$RESULTADO', '$FECHA', '$ESTRATEGIA')";

        $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        header("Location: Registro.html");

        if ($enlace->query($insertarDatos) === TRUE) {
            echo "Datos guardados correctamente";
        } else {
            echo "Error: " . $insertarDatos . "<br>" . $enlace->error;
        }
        
        $enlace->close();
    }
?>
