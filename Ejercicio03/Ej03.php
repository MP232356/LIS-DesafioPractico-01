<?php
// Array asociativo para guardar valor de eficiencia por vehículo y nombre.
$listaVehículos = [
    "default" => [-1, "ERR: Vehículo no encontrado"],
    "Camion5T" => [12, "Camión de 5 toneladas"],
    "Camion3T" => [16, "Camión de 3 toneladas"],
    "PickUp" => [22, "Pick-Up"],
    "Panel" => [28, "Panel"],
    "Moto" => [42, "Motocicleta"]
];

// En caso que no se haya seleccionado un vehículo, utilizar default.
$vehículo = $_GET["vehículo"] ?? "default";
$distancia = $_GET["distancia"] ?? 0; // Obteniendo por método GET la distancia.


// Calculando el consumo de combustible.
$consumo = round((float)($distancia / $listaVehículos[$vehículo][0]), 2);
$nombreVehículo = $listaVehículos[$vehículo][1];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-5 col-md-8 col-lg-6">
                <h3 class="card-header">Consumo de combustible</h3>
                <div class="card-body">
                    <h4 class="card-title">Vehículo: <?= $nombreVehículo ?></h1>
                        <p class="card-text">En <?= $nombreVehículo ?>, se recorrerán <?= $distancia ?> Km de distancia, consumiendo un total de <?= $consumo ?> galones.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-2">
            <a href="Ejercicio03.html" class="btn btn-secondary col-md-8 col-lg-6">Regresar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>