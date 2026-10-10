<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method ="post">
        <label >Primer numero</label>
        <input type="number" step="any" name="num1" required>
        <br><br>

        <label> Operacion </label>
        <select name="operacion" id="">
            <option value="sumar">sumar +</option>
            <option value="restar">restar +</option>
            <option value="multiplicar">multiplicar +</option>
            <option value="dividir">dividir +</option>
        </select>
        <br><br>
        <label >Segundo numero</label>
        <input type="number" step="any" name="num2" required>
        <br><br>
        <button type="submit" name="calcular">
            calcular
        </button>
    </form>
    <?php
    if(isset($_POST['calcular'])){
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion){
            case 'sumar':
                $resultado = $num1 + $num2;
            break;

            case 'restar':
                $resultado = $num1 - $num2;
            break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
            break;

            case 'dividir':
                if($num2 == 0){
                    $resultado = "Error";
                }else{
                    $resultado = $num1 / $num2;
                }
                break;
        default:
        $resultado ="operacion no valida";
        }
        echo"<h3>Resultado:".
        htmlspecialchars((string)$resultado).
        "</h3>";


    }
    ?>
</body>
</html>