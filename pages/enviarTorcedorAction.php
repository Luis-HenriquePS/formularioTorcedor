<?php

echo"<h1>Dados Enviados </h1>";
echo "<p> Torcedor: ". $_POST['name']. "</p>";
echo"<p> CPF: ". $_POST['cpf']."</p>";
// echo"<p>Torcedor {$-POST['nome'}</p>";

echo"<p>Frequencia no estadio:".$_POST["stadium"]."</p>";

//      condição ? se a condição for verdadeira : Se a condição for falsa
$_fan = isset($_POST["fan"]) ? $_POST["fan"] : "Não";
echo "<p>É sócio torcedor: ".$_fan."</p>";

$_shirt=isset($_POST["shirt"])?$_POST["shirt"]:"Não";
echo "<p> Tem a camisa oficial: ".$_shirt."</p>";


echo"<p>Clube: ".$_POST["clubs"]."</p>";


var_dump($_POST);
var_dump($_GET);


?>

