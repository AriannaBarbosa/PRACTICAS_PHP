<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica24.php">Siguiente practica -></a> 
    <title>PRACTICA 23</title> 
</head>
<body>
    <center> 
        <section>
            <h1><mark>NUMEROS MULTIPLOS DE 3 Y 5</mark></h1> 
            
           
            <form action="" method="POST">
                <label for="num">Ingresa un numero:</label> 
                <input type="number" id="num" name="num"> 
                <button type="submit">VERIFICAR</button> 
            </form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $num = $_POST['num'];

    // Comprueba si el número es múltiplo de 3
    if ($num % 3 == 0 && $num % 5 == 0){
        echo "$num es múltiplo de 3 y 5"; // Si es múltiplo de 3 y de 5, muestra este mensaje
    } else if ($num % 3 == 0){
        echo "$num es múltiplo de 3"; // Si solo es múltiplo de 3, muestra este mensaje
    } else if ($num % 5 == 0){
        echo "$num es múltiplo de 5"; // Si solo es múltiplo de 5, muestra este mensaje
    } else {
        echo "$num NO es múltiplo de 3 ni de 5"; // Si no es múltiplo de 3 ni de 5, muestra este mensaje
    }
}
?><br><br>
        </section>
    </center>
</body>
</html>
