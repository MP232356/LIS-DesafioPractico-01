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
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="card-title">Ejercicio 3</h1>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
<?php

// Array asociativo para guardar valor de eficiencia por vehiculo.
$eficiencia = array("Camion5T" => 12, "Camion3T" => 16, "PickUp" => 22, "Panel" => 28, "Moto" => 42);

$vehiculo = $_GET["vehiculo"];
