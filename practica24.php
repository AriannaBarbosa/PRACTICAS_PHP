<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica25.php">Siguiente practica -></a> 
    <title>PRACTICA 24</title>
</head>
<body>
    <center>
        <header> 
            <section>
                <h1><mark>ES PAR O IMPAR</mark></h1> 
            </section>
        </header>

        <main> 
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label> 
                <input type="number" id="num" name="num"> 
                <button type="submit">Enviar</button> 
                <br><br>
            </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $numero = $_POST['num'];

    // Verifica si el número es par
    if ($numero % 2 == 0){
        // Si es par, asigna el mensaje siguiente
        $mensaje = "El numero " . $numero . " es par ";
    } else {
        // Si es impar, asigna el mensaje siguiente
        $mensaje = "El numero " . $numero . " es impar ";
    }
    // Muestra el mensaje generado según si el número es par o impar
    echo $mensaje;
}
?>

        </main>
        <footer> 
            <p>Arianna Barbosa</p> 
        </footer>
    </center>
</body>
</html>
