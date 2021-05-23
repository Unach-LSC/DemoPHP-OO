<?php
include_once "calculadora.php";
$objCalculadora = new Calculadora(0,0);
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
    case "/":
      echo "División";
      $objCalculadora2 = new Calculadora(10,2);
      echo $objCalculadora2->dividir();
      break;
    default:
      echo "error";
  }
?>