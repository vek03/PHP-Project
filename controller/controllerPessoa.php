
<?php
require_once("../model/pessoa.class.php");


$pessoa = new Pessoa();

$pessoa->setNome($_POST['txtNome']);
echo $pessoa->getNome() . "<br>";

$pessoa->setEndereco($_POST['txtEndereco']);
echo $pessoa->getEndereco() . "<br>";

$pessoa->setBairro($_POST['txtBairro']);
echo $pessoa->getBairro() . "<br>";

$pessoa->setCep($_POST['txtCep']);
echo $pessoa->getCep() . "<br>";

?>