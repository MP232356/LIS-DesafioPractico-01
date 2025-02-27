<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Conversiones de Monedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet"> 
</head>
<body>
    <div >

        <center>
        <img src='./ima/calculadora.jpg' style='width: 50rem; heigth:20rem;'>
        </center>
            <div class="contenedor">
		    	<form method="POST" action=" ">
           	 <div class="selectbox">
                <label for="amount" class="form-label"></label>
                <input type="number" name="amount" id="amount1"  class="select1" required>
				<br></br>
            	</div>
				<div class="selectbox">
				<div class="select" id="select">
					<div class="contenido-select">
						<h1 class="titulo"></h1>
					</div>
				</div>
				<div class="opciones" id="opciones">
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/usa.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Dólar Estadounidense</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/japon.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Yen Japonés</h1>
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/gbp.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Libra Esterlina</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/eur.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Euro</h1>
							</div>
						</div>
					</a>
				</div>
				</div>
				<input type="hidden" name="pais" id="inputSelect" value="" >
				<div class="selectbox">
				<div class="select" id="select2">
					<div class="contenido-select">
						<h1 class="titulo"></h1>
					</div>
				</div>
				<div class="opciones" id="opciones2">
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/usa.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Dólar Estadounidense</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/japon.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Yen Japonés</h1>
								
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/gbp.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Libra Esterlina</h1>
							</div>
						</div>
					</a>
					<a href="#" class="opcion">
						<div class="contenido-opcion">
							<img src="ima/eur.jpg" alt="">
							<div class="textos">
								<h1 class="titulo">Euro</h1>
							</div>
						</div>
					</a>
				</div>
				</div>
				<input type="hidden" name="pais2" id="inputSelect2"  value="" >
            	</div>

            <button type="submit" class="btn btn-primary w-100 ">Convertir</button>
           	 </div>

           	 
        </form>

        <script src="js/main.js"></script>

        <?php if($_SERVER['REQUEST_METHOD'] ==='POST'):?>
            <div class="">
            <?php
            $amount = (float)$_POST['amount'];
            $currency = $_POST['pais'];
            $currency2 = $_POST['pais2'];
            $conversion = 0;
			$ver;
            
			if (empty($currency2) or empty($currency))
			{
				
					echo '<script>alert("No existen valores para calcular")</script>';
					$ver = false;
			}
			else{
				$ver= true;
				if($currency=="Euro")
			{
				if($currency2=="Libra Esterlina")
				{
					$conversion = $amount * 0.83; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Yen Japonés")
				{
					$conversion = $amount * 156.41; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Dólar Estadounidense")
				{
					$conversion = $amount * 1.05; //valore de euro a libra esterlina el 26/02/2025
				}
				else{
					echo '<script>alert("No se puede realizar una conversión con las mismas monedas")</script>';
					$ver = false;
				}
				
			} elseif($currency=="Libra Esterlina")
			{
				if($currency2=="Euro")
				{
					$conversion = $amount * 1.21; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Yen Japonés")
				{
					$conversion = $amount * 189.16; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Dólar Estadounidense")
				{
					$conversion = $amount * 1.27; //valore de euro a libra esterlina el 26/02/2025
				}
				else{
					echo '<script>alert("No se puede realizar una conversión con las mismas monedas")</script>';
					$ver = false;
				}
			}
			elseif($currency=="Yen Japonés")
			{
				if($currency2=="Euro")
				{
					$conversion = $amount * 0.0064; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Libra Esterlina")
				{
					$conversion = $amount * 0.0053; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Dólar Estadounidense")
				{
					$conversion = $amount * 0.0067; //valore de euro a libra esterlina el 26/02/2025
				}
				else{
					echo '<script>alert("No se puede realizar una conversión con las mismas monedas")</script>';
					$ver = false;
				}
			}
			elseif($currency=="Dólar Estadounidense")
			{
				if($currency2=="Euro")
				{
					$conversion = $amount * 0.95; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Libra Esterlina")
				{
					$conversion = $amount * 0.79; //valore de euro a libra esterlina el 26/02/2025
				}
				elseif($currency2=="Yen Japonés")
				{
					$conversion = $amount * 149.05; //valore de euro a libra esterlina el 26/02/2025
				}
				else{
					echo '<script>alert("No se puede realizar una conversión con las mismas monedas")</script>';
					$ver = false;
				}
			}
			}
			?>
			</div>
			<div class="respuesta">
				<?php
				if($ver ==true){
					echo"<div align=center '>$amount $currency</div>";
            	echo"<div align=center>=</div>";
           		echo"<div align=center> $conversion $currency2 </div>";
				}
            ?>
			</div>;
            <?php endif; ?>
            
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>