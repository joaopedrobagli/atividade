<?php

class professor{
    //atributos
    private $nome;
    private $profissao;
    private $idade;
    private $email;
    //Contrutores
    function __construct($nome, $profissao, $idade, $email){
        $this->nome = $nome;
        $this->profissao = $profissao;
        $this->idade = $idade;
        $this->email = $email;
    }


    //getters and setters
    function set_nome($nome){
        $this->nome =$nome;
    }

    function get_nome(){
        return($this->nome);
    }


    function set_profissao($profissao){
        $this->profissao =$profissao;
    }

    function get_profissao(){
        return($this->profissao);
    }


    function set_idade($idade){
        $this->idade =$idade;
    }

    function get_idade(){
        return($this->idade);
    }


    function set_email($email){
        $this->email =$email;
    }

    function get_email(){
        return($this->email);
    }



   

    function dados(){
        echo " " . $this->nome . " possui a profissao " . $this->profissao
        . " nasceu em " . $this -> idade . " e seu email é " . $this->email;

   

}
}
?>