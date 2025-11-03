<?php

$name = $_POST["name"];
$cpf = $_POST["cpf"];
$estadium_freq = $_POST["estadium"];
$fan = isset($_POST["fan"]) ? $_POST["fan"] : "Não";
$shirt = isset($_POST["shirt"]) ? $_POST["shirt"] : "Não";
$club = $_POST["clubs"];

echo "<strong>Nome: </strong>$name<br>";
echo "<strong>CPF: </strong>$cpf<br>";
echo "<strong>Vai ao estádio?: </strong>$estadium_freq<br>";
echo "<strong>É sócio torcedor?: </strong>$fan<br>";
echo "<strong>Tem a camisa oficial?: </strong>$shirt<br>";
echo "<strong>Clube: </strong>$club<br>";