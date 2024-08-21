<?php

//Criamos uma classe, com o nome "Funcionário".
class Funcionario {

    // são criadas variáveis com valores nulos
    public $nome= null;
    public $telefone= null;
    public $numFilhos=null;

    //criada uma função que seta o valor dentro da variável
    function setNome($nome) {
        $this->nome = $nome;
    }

    //criamos uma função que pega o valor do nome
    function getNome() {
        return $this->nome;
    }

    function getNumFilhos() {
        return $this->numFilhos;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getTelefone ($telefone) {
        return $this->telefone = $telefone;
    }

    //funções e métodos, para pegar as variáveis
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    //criamos uma função para modificar a quantidade de filhos e setamos ela.
    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}

//chamamos todos os sets e gets na nossa página, para a página final
$y= new Funcionario();
$y->setNome('Japa');
$y->setNumFilhos(0);
echo $y->resumirCardFunc() . '<br />';
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos';

?>