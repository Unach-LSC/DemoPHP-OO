<?php
include_once "calculadora.php";
$objCalculadora = new Calculadora;
$objCalculadora->valor1 = $_POST['num1'];
$objCalculadora->valor2 = $_POST['num2'];
$operador = $_POST['operador'];
switch ($operador) {
    case "+":
      echo "suma";
      echo $objCalculadora->sumar($_POST['num1'],$_POST['num2']);
      break;
    case "-":
      echo "resta";
      echo $objCalculadora->restar();
      break;
    case "*":
      echo "Multiplicación";
      echo $objCalculadora->multiplicar();
      break;
    case "*":
      echo "División";
      break;
    default:
      echo "error";
  }
?>