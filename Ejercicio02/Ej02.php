<?php
$unidades = [
    "Metros" => [
        "Pulgadas" => 39.37,
        "Yardas" => 1.094,
        "Pies" => 3.281
    ],
    "Pulgadas" => [
        "Metros" => 0.0254,
        "Yardas" => 0.0278,
        "Pies" => 0.0833
    ],
    "Yardas" => [
        "Metros" => 0.9141,
        "Pulgadas" => 36,
        "Pies" => 3
    ],
    "Pies" => [
        "Metros" => 0.3048,
        "Pulgadas" => 12,
        "Yardas" => 0.3333
    ]
];

$unidadSeleccionada = $_GET["unidad"] ?? "Metros";
$cantidad = $_GET["cantidad"] ?? 0;
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
                        foreach ($unidades[$unidadSeleccionada] as $unidad => $factor) {
                            echo "<tr>";
                            echo "<td>$unidad</td>";
                            echo "<td>" . round($cantidad * $factor, 4) . "</td>";
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