<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica30.php">Siguiente practica -></a>
    <title>PRACTICA 29</title> 
</head>
<body>
    <center> 
        <h1><mark>VERIFICAR NUMERO ENTERO</mark></h1> 
        <form action="" METHOD="POST">
            <label for="numero">Ingrese un numero entero:</label>
            <input type="number" id="numero" name="numero" required><br><br> 
            <button type="submit">ENVIAR</button> 
        </form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura el valor del número ingresado por el usuario
    $numero = $_POST['numero'];

    // Si el número es mayor que 0, se multiplica por 2
    if($numero > 0){
        echo "El doble del numero es: " . ($numero * 2) . "<br>"; // Muestra el doble del número

    // Si el número es menor que 0, se multiplica por 3
    } else if ($numero < 0){
        echo "El triple del numero es: " . ($numero * 3) . "<br>"; // Muestra el triple del número

    // Si el número es 0, se muestra un mensaje especial
    } else {
        echo "El numero es neutro, por lo que el resultado es: 0 <br>"; // Muestra que el número es neutro
    }
}
?>
        <br><br>
        <footer>Arianna Barbosa</footer>
        <br><br>
    </center>
</body>
</html>
