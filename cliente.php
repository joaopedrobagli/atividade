<?php

class Cliente{
    //atributos
    private $nome;
    private $cpf;
    private $dataNasc;
    private $endereco;
    private $email;
    private $telefone;
    //Contrutores
    function __construct($nome, $cpf, $dataNasc, $endereco, $email, $telefone){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }


    function set_cpf($cpf){
        $this->cpf =$cpf;
    }

    function get_cpf(){
        return($this->cpf);
    }

//CONTINUARRRRRRRRR
    function set_dataNasc($dataNasc){
        $this->dataNasc -> $dataNasc;
    }

    function get_dataNasc(){
        return($this->dataNasc);
    }

    function set_endereco($endereco){
        $this->endereco -> $endereco;
    }

    function get_endereco(){
        return($this->endereco);
    }

    function set_email($email){
        $this->email -> $email;
    }

    function get_email(){
        return($this->email);
    }

    function set_telefone($telefone){
        $this->telefone -> $telefone;
    }

    function get_telefon(){
        return($this->telefone);
    }

    function verificaridade($orientacao){
        if($orientacao >= 18) echo $this->nome . " é maior de idade";
        else if ($orientacao < 18) echo $this->nome . " é menor de idade";
        
    }

    function dados(){
        echo " O cliente " . $this->nome . " possui o cpf " . $this->cpf
        . " nasceu em " . $this -> dataNasc . " mora na rua " . $this->endereco . " possui o email " . $this->email . " e seu telefone é " . $this->telefone;

         
    }

    




}