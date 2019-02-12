<?php

require_once 'DB.php';
require_once 'Historico.php';

class Aluno {
    private $_nomeAluno, $_dataNascAluno, $_cpfAluno, $_Historico;
    protected $_idAluno, $_dbAluno, $_tabelaAluno;
    
    public function __construct() {
        $this->set_tabelaAluno('Aluno');
        $this->_dbAluno = DB::get_instance();
        $this->_Historico = new Historico();
    }
    
    public function criarAluno(){
        $aluno = [
            'nome'=>$this->get_nomeAluno(),
            'data_nasc'=>$this->get_dataNascAluno(),
            'cpf'=>$this->get_cpfAluno()
        ];
        $this->_dbAluno->insert($this->get_tabelaAluno(),$aluno);
        $this->set_idAluno($this->_dbAluno->get_lastInsertID());
        $this->_Historico->set_idAluno($this->get_idAluno());
        $this->_Historico->criarHistorico();
    }
    
    public function atualizarAluno(){
        $aluno = [
            'nome'=>$this->get_nomeAluno(),
            'data_nasc'=>$this->get_dataNascAluno(),
            'cpf'=>$this->get_cpfAluno()
        ];
        $this->_dbAluno->update($this->get_tabelaAluno(),$this->get_idAluno(),$aluno);
    }
    
    public function deletarAluno(){
        $this->_dbAluno->delete($this->get_tabelaAluno(),$this->get_idAluno());
    }
    
    public function lerAluno($id){
        $this->set_idAluno($id);
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$this->get_idAluno()]
        ];
        $consulta = $this->_dbAluno->findFirst($this->get_tabelaAluno(),$parametros);
        $this->set_cpfAluno($consulta->cpf);
        $this->set_dataNascAluno($consulta->data_nasc);
        $this->set_nomeAluno($consulta->nome);        
    }




    // getters 
    function get_nomeAluno() {
        return $this->_nomeAluno;
    }

    function get_dataNascAluno() {
        return $this->_dataNascAluno;
    }

    function get_cpfAluno() {
        return $this->_cpfAluno;
    }

    function get_idAluno() {
        return $this->_idAluno;
    }

    private function get_tabelaAluno() {
        return $this->_tabelaAluno;
    }

    
    // setters
    function set_nomeAluno($_nomeAluno) {
        $this->_nomeAluno = $_nomeAluno;
    }

    function set_dataNascAluno($_dataNascAluno) {
        $this->_dataNascAluno = $_dataNascAluno;
    }

    function set_cpfAluno($_cpfAluno) {
        $this->_cpfAluno = $_cpfAluno;
    }

    protected function set_idAluno($_idAluno) {
        $this->_idAluno = $_idAluno;
    }

    protected function set_tabelaAluno($_tabelaAluno) {
        $this->_tabelaAluno = $_tabelaAluno;
    }


    
    
    
}
