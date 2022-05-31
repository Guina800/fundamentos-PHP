<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
}

function depositar($conta, $valoradepositar){
    if ($valoradepositar > 0 ){
        $conta['saldo'] += $valoradepositar;
    } else {
        exibemensagem (mensagem: "Depositos precisam ser positivos");
    }
   
    return $conta;
}