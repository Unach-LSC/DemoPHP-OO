<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calcular.php" method="post">
    <h1>Calculadora</h1>
    <hr  style=border:1pxsolid;border-color:#000>
    <fieldset>
    <table>
    <tr>
        <td><label>Valor 1:</label></td>
        <td><input type="number" name="num1" style=border:solid2px/></td>
    </tr>
    <tr>
        <td><label>Valor 2:</label></td>
        <td><input type="number" name="num2" style=border:solid2px/></td>
    </tr>
    <tr>
    <td><label> Operador :</label></td>
    <td> <select name="operador" >
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select></td>
    </li>
    </tr>

    <tr>
    <td align="right" colspan="2"><input type="reset" name="limpar" value="Limpar" style=border:solid2px/>
    <input type="submit" name="Enviar" value="Enviar" style=border:solid2px/></td>
    </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>