<?php

namespace App\Models;
use \PDO;
use \PDOException;

class Cliente {
    public $nomeCliente, $cpfCliente, $telefoneCliente, $dataNascimentoCliente;
    public $idCliente;
    static private $tabelaCliente = 'cliente';
    public  $dbCliente;
    
    public function __construct($id = NULL) {
        $this->dbCliente = DB::get_instance();
        if($id != NULL){
            $this->lerCliente($id);
        }
    }
    
    public function criarCliente(){
        $cliente = [
            'nome'=>$this->getNomeCliente(),
            'data_nasc'=>$this->getDataNascimentoCliente(),
            'cpf'=>$this->getcpfCliente(),
            'telefone'=>$this->getTelefoneCliente()
        ];
        $this->dbCliente->insert($this::$tabelaCliente,$cliente);
        $this->setIdCliente($this->dbCliente->get_lastInsertID());
    }


    public function atualizarCliente(){
        $cliente = [
            'nome'=>$this->getNomeCliente(),
            'data_nasc'=>$this->getDataNascimentoCliente(),
            'cpf'=>$this->getCpfCliente(),
            'telefone'=>$this->getTelefoneCliente()
        ];
        $this->dbCliente->update($this::$tabelaCliente,$this->getIdCliente(),$cliente);
    }
    
    public function deletarCliente(){
        $this->dbCliente->delete($this::$tabelaCliente,$this->getIdCliente());
    }
    
    public function lerCliente($id){
        $this->setIdCliente($id);
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$this->getIdCliente()]
        ];
        $consulta = $this->dbCliente->findFirst($this::$tabelaCliente,$parametros);
        $this->setCpfCliente($consulta->cpf);
        $this->setDataNascimentoCliente($consulta->data_nasc);
        $this->setNomeCliente($consulta->nome);
        $this->setTelefoneCliente($consulta->telefone);


    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    }

    public function getDataNascimentoCliente()
    {
        return $this->dataNascimentoCliente;
    }

    public function setDataNascimentoCliente($dataNascimentoCliente)
    {
        $this->dataNascimentoCliente = $dataNascimentoCliente;
    }

    
}
