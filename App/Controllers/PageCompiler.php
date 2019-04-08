<?php
/**
 * Created by PhpStorm.
 * User: E086510309
 * Date: 22/03/2019
 * Time: 15:32
 */

namespace App\Controllers;

use App\Models\Cliente;
use App\Models\DB;
use App\Models\Produto;
use App\Views\CadastrarClientes;
use App\Views\CadastrarProduto;
use App\Views\ListarClientes;
use App\Views\ListarProduto;
use App\Views\Main;

class PageCompiler
{
    public $page;

    public function __construct($page = NULL, $id = NULL)
    {
        if($page == NULL){
            $this->$page = new Main();
        } elseif($page == 'cadcli') {
            $this->$page = new CadastrarClientes($_SERVER['PHP_SELF']);
        } elseif($page == 'listacli'){
            $db = DB::get_instance();
            $data = $db->find('cliente');
            $this->$page = new ListarClientes($data);
        } elseif($page == 'cliente'){
            $c = new Cliente($id);
            $this->$page = new \App\Views\Cliente($_SERVER['PHP_SELF'],$c);
        } elseif ($page == 'cadpro'){
            $this->$page = new CadastrarProduto($_SERVER['PHP_SELF']);
        } elseif ($page == 'listapro'){
            $db = DB::get_instance();
            $data = $db->find('produto');
            $this->$page = new ListarProduto($data);
        } elseif ($page == 'produto'){
            $p = new Produto($id);
            $this->page = new \App\Views\Produto($_SERVER['PHP_SELF'],$p);
        }
    }


}