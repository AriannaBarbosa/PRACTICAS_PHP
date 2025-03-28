<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica28.php">Siguiente practica -></a> 
    <title>PRACTICA 27</title> 
</head>
<body>
    <center> 
        <header>
            <h1><mark>ECUACIONES PRIMER GRADO</mark></h1> 
        </header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="a">Ingrese valor A</label>
                    <input type="number" id="a" name="a"><br><br> 
                    <label for="b">Ingrese valor B</label>
                    <input type="number" id="b" name="b"><br><br> 
                    <button type="submit">CALCULAR</button><br><br> 
                </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura los valores de A y B desde el formulario
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Verifica si A es 0, lo que significa que no es una ecuación de primer grado
    if ($a == 0) {
        echo "No es una ecuación de primer grado."; // Muestra el mensaje si A es 0
    } else {
        // Resuelve la ecuación de primer grado: Ax + B = 0 => x = -B / A
        $x = -$b / $a; 
        echo "El valor de x es: " . $x; // Muestra el resultado de x
    }
}
?>
            </section>
        </main>
        <footer>
            Arianna Barbosa 
        </footer>
    </center>
</body>
</html>
