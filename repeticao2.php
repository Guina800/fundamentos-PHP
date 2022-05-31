<?php

$contador += 1;
for ($contador = 1; $contador <= 15; $contador = $contador + 1){
  if ($contador == 13){
    break;
  }

echo "#$contador" . PHP_EOL;

}