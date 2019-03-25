<?php
/**
 * Created by PhpStorm.
 * User: Ewert
 * Date: 25/03/2019
 * Time: 08:55
 */

namespace App\Tests;

use App\Models\Cliente;

class ModelClienteTest extends \PHPUnit_Framework_TestCase
{

    public function testCriarCliente()
    {
        $c = new Cliente();
        $c->setCpfCliente("000.000.000-00");
        $c->setDataNascimentoCliente("13/12/1911");
        $c->setNomeCliente("Teste");
        $c->setTelefoneCliente("pi pipipi popopo");
        $c->criarCliente();
    }

    public function testLerCliente()
    {

    }

    public function testAtualizarCliente()
    {

    }

    public function testDeletarCliente()
    {

    }
}
