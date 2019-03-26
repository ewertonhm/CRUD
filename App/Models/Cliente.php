<?php

namespace App\Models;
use \PDO;
use \PDOException;

class Cliente {
    private $nomeCliente, $cpfCliente, $telefoneCliente, $dataNascimentoCliente;
    protected $idCliente;
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
            'bind' => [$this->getIdCliente()],
            'order' => ['id']
        ];
        $consulta = $this->dbCliente->findFirst($this::$tabelaCliente,$parametros);
        $this->setCpfCliente($consulta->cpf);
        $this->setDataNascimentoCliente($consulta->data_nasc);
        $this->setNomeCliente($consulta->nome);
        $this->setTelefoneCliente($consulta->telefone);


    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * @param mixed $nomeCliente
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return mixed
     */
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    /**
     * @param mixed $cpfCliente
     */
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    /**
     * @return mixed
     */
    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    /**
     * @param mixed $telefoneCliente
     */
    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    }

    /**
     * @return mixed
     */
    public function getDataNascimentoCliente()
    {
        return $this->dataNascimentoCliente;
    }

    /**
     * @param mixed $dataNascimentoCliente
     */
    public function setDataNascimentoCliente($dataNascimentoCliente)
    {
        $this->dataNascimentoCliente = $dataNascimentoCliente;
    }

    
}
