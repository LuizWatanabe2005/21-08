<?php

//Criamos uma classe, com o nome "Correr".
class Correr {

    //cria uma propriedade com valor nulo
    public $nome = null;
    
    //Inicia automaticamente quando cria um objeto da classe
    function __construct($nome) {
        echo 'Japa';
        $this->nome = $nome;
    }
    
    //função para destruir o objeto
    function __destruct() {
        echo 'Objeto Removido';
    }
    
    //acessa o valor da propriedade '$atributo'
    function __get($atributo) {
        return $this->$atributo;
    }
}

//cria o objeto 'correr', imprime o valor do '$nome', e por final o objeto é destruído.
$correr = new Correr(' está correndo');
echo  $correr->__get('nome');

unset($corrida);
 
?>

