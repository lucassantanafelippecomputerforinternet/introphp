<?php

class Produto{
    private $nome;
    private $preco;

    public function __construct($valor1,$valor2){
        $this->nome = $valor1;
        $this->preco = $valor2;
    }

    public function getDetalhes(){
        return "<br>Valor do produto {$this->nome} custa {$this->preco} reais. <br>";
    }

    public function setNome($valor){
        $this->nome = $valor;
    }
    public function setPreco($valor){
        $this->preco = $valor;
    }
    public function getNome(){
        return $this->nome = $valor;
    }
    public function getPreco(){
        return $this->preco = $valor;
    }
}

$item1 = new Produto('Produto 001',30);
$item2 = new Produto('Produto 002',43);
//$item1->setNome('Produto 001',30);
//$item1->setPreco('30,00');
echo '<br>';
echo $item1->getDetalhes().'<br>'.$item2->getDetalhes();

class Livro{
    private $titulo;
    private $preco;

    public function getDetalhes(){
        return "<br>Valor do livro {$this->titulo} custa {$this->preco} reais. <br>";
    }

    public function setTitulo($valor){
        $this->titulo = $valor;
    }
    public function setPreco($valor){
        $this->preco = $valor;
    }
    public function getTitulo(){
        return $this->titulo = $valor;
    }
    public function getPreco(){
        return $this->preco = $valor;
    }
}

$item1 = new Livro;
$item1->setTitulo('Livro 001');
$item1->setPreco('30,00');
echo '<br>';
echo $item1->getDetalhes();

?>