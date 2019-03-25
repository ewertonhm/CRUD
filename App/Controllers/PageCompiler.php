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
use App\Views\CadastrarClientes;
use App\Views\ListarClientes;
use App\Views\Main;

class PageCompiler
{
    public function __construct($page = NULL)
    {
        if($page == NULL){
            $page = new Main();
            return $page;
        } elseif($page == 'cadcli') {
            $page = new CadastrarClientes($_SERVER['PHP_SELF']);
        } elseif($page == 'listacli'){
            $db = DB::get_instance();
            $data = $db->find('cliente');
            $page = new ListarClientes($data);
        }

    }


}