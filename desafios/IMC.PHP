<?php

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "seu IMC é de $imc. Você está com o IMC";

if($imc < 18){
  echo "abaixo";
} elseif ($imc < 25){
  echo " dentro";
} else {
  echo "Acima";
}

echo "do recomendado";
