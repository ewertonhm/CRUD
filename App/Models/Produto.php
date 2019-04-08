<?php

namespace App\Models;

class Produto {
    public $nomeProduto, $quantidadeProduto, $valorProduto, $unidadeDeMedidaProduto;
    public $idProduto;
    static private $tabelaProduto = 'produto';
    public  $dbProduto;

    public function __construct($id = NULL) {
        $this->dbProduto = DB::get_instance();
        if($id != NULL){
            $this->lerProduto($id);
        }
    }

    public function criarProduto(){
        $Produto = [
            'nome'=>$this->getNomeProduto(),
            'unidademedida'=>$this->getUnidadeDeMedidaProduto(),
            'quantidade'=>$this->getQuantidadeProduto(),
            'valor'=>$this->getValorProduto()
        ];
        $this->dbProduto->insert($this::$tabelaProduto,$Produto);
        $this->setIdProduto($this->dbProduto->get_lastInsertID());
    }


    public function atualizarProduto(){
        $Produto = [
            'nome'=>$this->getNomeProduto(),
            'unidademedida'=>$this->getUnidadeDeMedidaProduto(),
            'quantidade'=>$this->getQuantidadeProduto(),
            'valor'=>$this->getValorProduto()
        ];
        $this->dbProduto->update($this::$tabelaProduto,$this->getIdProduto(),$Produto);
    }

    public function deletarProduto(){
        $this->dbProduto->delete($this::$tabelaProduto,$this->getIdProduto());
    }

    public function lerProduto($id){
        $this->setIdProduto($id);
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$this->getIdProduto()]
        ];
        $consulta = $this->dbProduto->findFirst($this::$tabelaProduto,$parametros);
        $this->setQuantidadeProduto($consulta->quantidade);
        $this->setUnidadeDeMedidaProduto($consulta->unidademedida);
        $this->setNomeProduto($consulta->nome);
        $this->setValorProduto($consulta->valor);


    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function getQuantidadeProduto()
    {
        return $this->quantidadeProduto;
    }

    public function setQuantidadeProduto($QuantidadeProduto)
    {
        $this->quantidadeProduto = $QuantidadeProduto;
    }

    public function getValorProduto()
    {
        return $this->valorProduto;
    }

    public function setValorProduto($ValorProduto)
    {
        $this->valorProduto = $ValorProduto;
    }

    public function getUnidadeDeMedidaProduto()
    {
        return $this->unidadeDeMedidaProduto;
    }

    public function setUnidadeDeMedidaProduto($UnidadeDeMedidaProduto)
    {
        $this->unidadeDeMedidaProduto = $UnidadeDeMedidaProduto;
    }


}
