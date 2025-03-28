<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica26.php">Siguiente practica -></a> 
    <title>PRACTICA 25</title>
</head>
<body>
    <center> 
        <header>
            <h1><mark>DOBLE Y TRIPLE</mark></h1> 
        </header>
        
        <main>
            <section>
               
                <form action="" method="POST">
                    <label for="num">Ingresa un numero</label> 
                    <input type="number" name="num" id="num"> 
                    <button type="submit">Cacular</button> 
                </form>
                
                <footer>
                    <p>Arianna Barbosa</p> 
                </footer>  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Obtiene el número ingresado por el usuario
    $numero = $_POST['num'];

    // Verifica si el número es impar (si no es divisible por 2)
    if ($numero % 2 != 0){
        // Si es impar, calcula y muestra el doble del número
        $mensaje = "El doble del numero " . $numero . " es " . ($numero * 2);
    } else {
        // Si es par, calcula y muestra el triple del número
        $mensaje = "El triple del numero " . $numero . " es " . ($numero * 3);
    }

    // Muestra el mensaje con el resultado
    echo $mensaje;
}
?><br><br>

            </section>
        </main>
    </center>
</body>
</html>
