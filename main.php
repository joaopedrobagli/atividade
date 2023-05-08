<?php

require "produto.php";

//Instaciando objeto produto 1

$produto1 = new Produto ("celular", "iphone", "preto",200);




$produto1->atualizar(10);

$produto1->nome();





require "cliente.php";
//Instaciando objeto carro 1 
$cliente1 = new cliente ("João Pedro", "123445", "15/06/2005", "avenida brasil", "joao bagli", "3213");

$cliente1->verificaridade(17);
$cliente1->dados();

?>