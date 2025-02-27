<?php

$unidadSeleccionada = $_GET["unidad"] ?? "Metros";
$cantidad = $_GET["cantidad"] ?? 0;

$cantidadMetros = 0;
$conversionMetros = [
    "Pulgadas" => 39.37,
    "Yardas" => 1.094,
    "Pies" => 3.281
];

switch ($unidadSeleccionada) {
    case "Metros":
        $cantidadMetros = (float)$cantidad;
        break;
    case "Pulgadas":
        $cantidadMetros = (float)($cantidad / 39.37);
        break;
    case "Yardas":
        $cantidadMetros = (float)($cantidad / 1.094);
        break;
    case "Pies":
        $cantidadMetros = (float)($cantidad / 3.281);
        break;
    default:
        break;
}

$resultados = [];
foreach ($conversionMetros as $unidad => $factor) {
    $resultados[$unidad] = round($cantidadMetros * $factor, 2);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5 col-md-8 col-lg-6">
                <h3 class="card-header"><?= "$unidadSeleccionada : $cantidad " ?></h3>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Unidad</th>
                            <th>Cantidad</th>
                        </tr>
                        <?php
                        foreach ($resultados as $unidad => $valor) {
                            echo "<tr>";
                            echo "<td>$unidad</td>";
                            echo "<td>$valor</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-2">
            <a href="Ejercicio02.html" class="btn btn-secondary col-md-8 col-lg-6">Regresar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>