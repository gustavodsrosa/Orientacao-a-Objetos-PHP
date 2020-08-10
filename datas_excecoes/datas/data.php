<?php

// Utilziação do método date()

echo date('d/m/Y'); // Dia, mês e ano

// Date-time 

$data = new DateTime();
echo '<br>';
var_dump($data);

// Formatação de datas

$data = new DateTime();
$data -> format('d/m/Y');

// Intervalo

$intervalo = new DateInterval('PT5M');
$data->add($intervalo);

var_dump($data);

