<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica23.php">Siguiente Practica-></a> 
    <title>PRACTICA 22</title> 
</head>
<body>   
    <center>    
    <section>
        <h1><mark>¿ES VOCAL O NO ES VOCAL?</mark></h1>
        
       
        <form action="" method="POST">
            <label for="letra">Ingresa un caracter:</label>
            <input type="text" id="letra" name="letra"><br><br> 
            <button type="submit">VERIFICAR</button><br><br> 
        </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Obtiene el valor del carácter ingresado por el usuario
    $letra = $_POST['letra'];

    // Compara el carácter ingresado con las vocales (tanto mayúsculas como minúsculas)
    if ($letra == 'a' || $letra == 'A'){
        echo "La letra $letra ingresada es vocal"; // Si es 'a' o 'A', es una vocal
    } else if ($letra == 'e' || $letra == 'E'){
        echo "La letra $letra ingresada es vocal"; // Si es 'e' o 'E', es una vocal
    } else if ($letra == 'i' || $letra == 'I'){
        echo "La letra $letra ingresada es vocal"; // Si es 'i' o 'I', es una vocal
    } else if ($letra == 'o' || $letra == 'O'){
        echo "La letra $letra ingresada es vocal"; // Si es 'o' o 'O', es una vocal
    } else if ($letra == 'u' || $letra == 'U'){
        echo "La letra $letra ingresada es vocal"; // Si es 'u' o 'U', es una vocal
    } else {
        echo "La letra $letra ingresada no es vocal"; // Si no es ninguna vocal, muestra que no es vocal
    }   
}
?>
</section>
    </center>
</body>
</html>
