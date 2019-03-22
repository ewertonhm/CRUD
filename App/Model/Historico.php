<?php

namespace App\Model;

require_once 'DB.php';
require_once 'Aluno.php';

class Historico {
    
    protected $_idHistorico, $_tabelaHistorico, $_dbHistorico, $id_Aluno;
    private $_nota, $_dataCad;
    
    public function __construct() {
        $this->set_tabelaHistorico('historico');
        $this->_dbHistorico = DB::get_instance();
    }

    public function criarHistorico(){
        $historico = [
            'id_aluno'=>$this->get_idAluno(),
            'nota'=>$this->get_nota(),
            'DATA_CAD'=>$this->get_dataCad()
        ];
        $this->_dbHistorico->insert($this->get_tabelaHistorico(),$historico);
        $this->set_idHistorico($this->_dbHistorico->get_lastInsertID());
    }
    
    public function atualizarHistorico(){
        $historico = [
            'nota'=>$this->get_nota(),
            'DATA_CAD'=>$this->get_dataCad()
        ];
        $this->_dbHistorico->update($this->get_tabelaHistorico(),$this->get_idHistorico(),$historico);
    }
    
    public function lerHistorico($id){
        $this->set_idHistorico($id);
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$this->get_idHistorico()],
            'orderbyid' => ['true']
        ];
        $consulta = $this->_dbHistorico->findFirst($this->get_tabelaHistorico(),$parametros);
        $this->set_idAluno($consulta->id_aluno);
        $this->set_nota($consulta->nota);
        $this->set_dataCad($consulta->data_cad);
    }

    public function lerHistoricoAlunoId($idAluno){
        $this->set_idAluno($idAluno);
        $parametros = [
            'conditions' => ['id_aluno = ?'],
            'bind' => [$this->get_idAluno()]
        ];
        $consulta = $this->_dbHistorico->findFirst($this->get_tabelaHistorico(),$parametros);
        $this->set_idHistorico($consulta->id);
        $this->set_nota($consulta->nota);
        $this->set_dataCad($consulta->data_cad);
    }
    
    public function deletarHistorico(){
        $this->_dbHistorico->delete($this->get_tabelaHistorico(),$this->get_idHistorico());
    }
    
    // getter

    function get_idHistorico() {
        return $this->_idHistorico;
    }

    function get_nota() {
        return $this->_nota;
    }

    function get_dataCad() {
        return $this->_dataCad;
    }

    private function get_tabelaHistorico() {
        return $this->_tabelaHistorico;
    }

    /**
     * @return mixed
     */
    public function get_idAluno()
    {
        return $this->id_Aluno;
    }


    // setter
    function set_idHistorico($_idHistorico) {
        $this->_idHistorico = $_idHistorico;
    }

    function set_nota($_nota) {
        $this->_nota = $_nota;
    }

    function set_dataCad($_dataCad) {
        $this->_dataCad = $_dataCad;
    }

    private function set_tabelaHistorico($_tabelaHistorico) {
        $this->_tabelaHistorico = $_tabelaHistorico;
    }

    /**
     * @param mixed $id_Aluno
     */
    public function set_idAluno($id_Aluno)
    {
        $this->id_Aluno = $id_Aluno;
    }



}
