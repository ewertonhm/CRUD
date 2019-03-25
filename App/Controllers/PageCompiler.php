<?php
/**
 * Created by PhpStorm.
 * User: E086510309
 * Date: 22/03/2019
 * Time: 15:32
 */

namespace App\Controllers;


use App\Views\CadastrarClientes;
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
        }

    }


}