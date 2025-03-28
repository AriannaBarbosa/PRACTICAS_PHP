<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica29.php">Siguiente practica -></a> 
    <title>PRACTICA 28</title> 
</head>
<body>
    <center> 
        <header>
            <h1><mark>¿YA ERES MAYOR DE EDAD?</mark></h1> 
        </header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="edad">Ingresa tu edad:</label>
                    <input type="number" id="edad" name="edad"><br><br> 
                    <button type="submit">VERIFICAR</button><br><br>
                </form>
            </section>
        </main>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura el valor de la edad desde el formulario
    $edad = $_POST['edad'];

    // Verifica si la edad es menor o igual a 18
    if ($edad <= 18){
        echo "Eres menor de edad"; // Muestra el mensaje si la edad es 18 o menos
    } else {
        echo "Eres mayor de edad"; // Muestra el mensaje si la edad es mayor a 18
    }
}
?>
        <br><br>
        <footer>Arianna Barbosa</footer> 
        <br><br>
    </center> 
</body>
</html>
