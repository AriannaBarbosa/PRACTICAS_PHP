<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <a href="practica22.php">Siguiente Practica-></a> 
    <title>EJERCICIO 21</title> 
</head>
<body>
<center> 
    <header>  
        <h1><mark>NUMERO MAYOR DE 3 NUMEROS</mark></h1> 
    </header>
    <main> 
        <section> 
            
            <form action="" method="POST"> 
                <label for="num1"> Num1</label> 
                <input type="number" id="num1" name="num1"><br><br> 
                <label for="num2"> Num2</label> 
                <input type="number" id="num2" name="num2"><br><br> 
                <label for="num3"> Num3</label> 
                <input type="number" id="num3" name="num3"><br><br> 
                <button type="submit">CALCULAR</button><br><br> 
            </form> 
        </section> 
    </main>
    <footer> 
        <p>Arianna Barbosa</p> 
    </footer>  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Obtiene los valores de los tres números ingresados en el formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Compara los tres números para encontrar el mayor
    if ($num1 > $num2 && $num1 > $num3){
        $mayor = $num1; // Si el primer número es mayor, se asigna a $mayor
    } else if ($num2 > $num1 && $num2 > $num3){
        $mayor = $num2; // Si el segundo número es mayor, se asigna a $mayor
    } else {
        $mayor = $num3; // Si el tercer número es mayor, se asigna a $mayor
    }

    // Muestra el número mayor
    echo "El numero mayor es $mayor";
}
?>
</center>
</body>
</html>
