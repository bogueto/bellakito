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

        // $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        
        if ($enlace->query($insertarDatos) === TRUE) {
            //debes de mandar algun code o algo como tal para que tu por tu AJAX lo reconozcas
            //y puedas redireccionar
            // header("Location: Registro.html");

            //es como el return en este caso
            echo "exito";

        } else {
            echo "Error: " . $insertarDatos . "<br>" . $enlace->error;
        }
        
    }
?>
