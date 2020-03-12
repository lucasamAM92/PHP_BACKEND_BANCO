<?php

namespace Reweb\Job\Backend\Tests;

use Reweb\Job\Backend;

/**
 * Teste unit�rio da classe Reweb\Job\Backend\Exemplo
 */
class ExemploTest extends PHPUnit_Framework_TestCase
{
       /** @var Backend\Exemplo */
    protected $exemplo;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this ->exemplo = new Exemplo();
    }

    public function TesteCriarConta(){
          
          $exemplo = new Exemplo();
          $exemplo->criarConta("corrente",100,0);
        $this->assertEquals("corrente", $exemplo->getTipoDeConta());
        $this->assertEquals(100, $exemplo->getSaldoContaCorrente());
        $this->assertEquals(0, $exemplo->getSaldoContaPoupanca());
    }
    public function TesteOperacao(){

          $exemplo = new Exemplo();
          $exemplo->operacao("corrente", "deposito");
        $this->assertEquals("corrente", $exemplo->getTipoDeConta());
        $this->assertEquals("deposito", $exemplo->getTipoDeOperacao());
    }
    public function TesteDeposito(){

          $exemplo = new Exemplo();
          $exemplo->deposito(800, 0);
        $this->assertEquals(900, $exemplo->getSaldoContaCorrente());
        $this->assertEquals(0, $exemplo->getSaldoContaPoupanca());
    }
    public function TesteSaque(){

          $exemplo = new Exemplo();
          $exemplo->saque(200, 0);
      $this->assertEquals(597.5, $exemplo->getSaldoContaCorrente());
      $this->assertEquals(0, $exemplo->getSaldoContaPoupanca());
    }
    public function TesteTransferencia(){

          $exemplo = new Exemplo();
          $exemplo->transferencia(100, 0);
      $this->assertEquals(497.5, $exemplo->getSaldoContaCorrente());
      $this->assertEquals(100, $exemplo->getContaDestinoTransferencia());
    }

}

