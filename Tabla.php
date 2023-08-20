<?php
    include("Conexion.php");
    
    $campo = isset($_POST['campo']) ? $enlace->real_escape_string($_POST['campo']) : null;
    
    $where = '';

    if ($campo != null) {
        $where = "WHERE (";
        $columns = ["DIVISA", "INVERSION", "ENTRADA", "RETORNO", "RESULTADO", "FECHA", "ESTRATEGIA"];

        $cont = count($columns);
        for($i = 0; $i < $cont; $i++) {
            $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where .= ")";
    }

        // Calcula el número de página actual
    $pagina_actual = isset($_GET['page']) ? intval($_GET['page']) : 1;

    // Establece el número de registros a mostrar por página
    $registros_por_pagina = 10;

    // Calcula la fila de inicio para la página actual
    $inicio_desde = ($pagina_actual - 1) * $registros_por_pagina;

    // Construye la consulta modificada con paginación
    $info = "SELECT * FROM datos $where LIMIT $inicio_desde, $registros_por_pagina";

    // Recupera el número total de registros
    $total_registros_query = "SELECT COUNT(*) as total FROM datos $where";
    $resultado_total_registros = mysqli_query($enlace, $total_registros_query);
    $fila_total_registros = mysqli_fetch_assoc($resultado_total_registros);
    $total_registros = $fila_total_registros['total'];

    // Calcula el número total de páginas
    $total_paginas = ceil($total_registros / $registros_por_pagina);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TABLA</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="esttabla.css">
    <style>
        .center-content {
            text-align: center;
            margin-top: 20px;
        }
        .center-content input[type="text"] {
            width: 15%;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <form action="Tabla.php?page=<?php echo $pagina_actual; ?>" method="POST">
            <label for="campo">Buscar: </label>
            <input type="text" name="campo" id="campo">
            <input type="submit" value="Buscar">
        </form>
    </div>

    <button onclick="redirectToOtroArchivo()" class="botons">Regresar al formulario</button>
         <script>
            function redirectToOtroArchivo() {
                window.location.href = "Registro.html";
            }
        </script>

        <div class="container-table">
            <div class="table__title">DATOS</div>
            <div class="table__header">DIVISA</div>
            <div class="table__header">INVERSION</div>
            <div class="table__header">TIPO DE ENTRADA</div>
            <div class="table__header">TASA DE RETORNO</div>
            <div class="table__header">RESULTADO</div>
            <div class="table__header">FECHA</div>
            <div class="table__header">ESTRATEGIA</div>
            <?php
            $resultado = mysqli_query($enlace, $info);
            while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                <div class="table__item"><?php echo $row["DIVISA"];?></div>
                <div class="table__item"><?php echo $row["INVERSION"];?></div>
                <div class="table__item"><?php echo $row["ENTRADA"];?></div>
                <div class="table__item"><?php echo $row["RETORNO"];?></div>
                <div class="table__item"><?php echo $row["RESULTADO"];?></div>
                <div class="table__item"><?php echo $row["FECHA"];?></div>
                <div class="table__item"><?php echo $row["ESTRATEGIA"];?></div>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
        </div>

        <div class="pagination">
            <?php
            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($i === $pagina_actual) {
                    echo "<span class='page-link current-page'>$i</span>";
                } else {
                    echo "<a class='page-link' href='Tabla.php?page=$i'>$i</a>";
                }
            }
            ?>
        </div>

    </body>
</html>
