<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica27.php">Siguiente practica -></a>
</head>
<body>
    <center>
        <header>
            <h1><mark>NUMEROS ORDEN ASCENDENTE</mark></h1> 
        </header>

        <main>
            <section>
                
                <form action="" method="POST">
                    <label for="num1">Numero 1</label>
                    <input type="number" id="num1" name="num1"><br><br>
                    <label for="num2">Numero 2</label>
                    <input type="number" id="num2" name="num2"><br><br>
                    <label for="num3">Numero 3</label>
                    <input type="number" id="num3" name="num3"><br><br>
                    <button type="submit">ENVIAR</button><br><br>
                </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura los tres números ingresados por el usuario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Encuentra el número mayor entre los tres
    if ($num1 > $num2 && $num1 > $num3){
        $mayor = $num1; // Si num1 es el mayor
    } else if ($num2 > $num1 && $num2 > $num3){
        $mayor = $num2; // Si num2 es el mayor
    } else {
        $mayor = $num3; // Si num3 es el mayor
    }
    echo "El numero mayor es: " . $mayor . "<br>"; // Muestra el número mayor

    // Encuentra el número menor entre los tres
    if ($num1 <= $num2 && $num1 <= $num3){
        $menor = $num1; // Si num1 es el menor
    } else if ($num2 <= $num1 && $num2 <= $num3){
        $menor = $num2; // Si num2 es el menor
    } else {
        $menor = $num3; // Si num3 es el menor
    }
    echo "El numero menor es: " . $menor . "<br>"; // Muestra el número menor

    // Suma los tres números
    $suma = $num1 + $num2 + $num3;
    
    // El número intermedio es el que queda después de excluir el mayor y el menor
    $intermedio = $suma - $mayor - $menor;
    echo "El numero intermedio es: " . $intermedio; // Muestra el número intermedio
}
?>

            </section>
        </main>

        <footer>
            <p>Arianna Barbosa</p> 
        </footer>
    </center>
</body>
</html>
