<?php

class Pessoa{

    private $txtNome;
    private $endereco;
    private $bairro;
    private $cep;

    public function setNome($txtNome){
        $this->txtNome = $txtNome;
    }

    public function getNome(){
        return $this->txtNome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }
}
?>