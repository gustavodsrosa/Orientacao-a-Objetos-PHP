<?php

/* Crie uma data com a classe DateTime com a data e 
hora atuais. Em seguida, subtraia 5 dias, 10 horas e 
50 minutos.
*/

$data = new DateTime();

$intervalo = new DateInterval(P5DT10H50M);
$data -> sub($intervalo);

var_dump($data);