<?php

namespace App\Models;
use \PDO;

class Cliente extends DB {
    private $nomeCliente, $cpfCliente, $telefoneCliente, $dataNascimentoCliente;
    protected $idCliente;
    static private $tabelaCliente = 'cliente';
    
    public function __construct($id = NULL) {
        if($id != NULL){
            $this->lerCliente($id);
        }
        try{
            $this->_pdo = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=empresa','postgres','postgres');
            //$this->_pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $this::get_instance();
    }
    
    public function criarCliente(){
        $cliente = [
            'nome'=>$this->getNomeCliente(),
            'data_nasc'=>$this->getDataNascimentoCliente(),
            'cpf'=>$this->getcpfCliente(),
            'telefone'=>$this->getTelefoneCliente()
        ];
        $this->insert($this::$tabelaCliente,$cliente);
        $this->setIdCliente($this->get_lastInsertID());
    }


    public function atualizarCliente(){
        $cliente = [
            'nome'=>$this->getNomeCliente(),
            'data_nasc'=>$this->getDataNascimentoCliente(),
            'cpf'=>$this->getCpfCliente(),
            'telefone'=>$this->getTelefoneCliente()
        ];
        $this->update($this::$tabelaCliente,$this->getIdCliente(),$cliente);
    }
    
    public function deletarCliente(){
        $this->delete($this::$tabelaCliente,$this->getIdCliente());
    }
    
    public function lerCliente($id){
        $this->setIdCliente($id);
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$this->getidCliente()],
            'order' => ['id']
        ];
        $consulta = $this->findFirst($this::$tabelaCliente,$parametros);
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
