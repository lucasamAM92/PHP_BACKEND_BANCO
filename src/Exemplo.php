<?php

namespace Reweb\Job\Backend;

/**
 * Classe de exemplo
 *
 * @author Marcelo Jean <mjean@reweb.com.br>
 */
class Exemplo
{
    private $tipoDeConta; 
	private $tipoDeOperacao;
	private $saldoContaCorrente;
	private $depositoContaCorrente;
	private $saqueContaCorrente;
	private $transferenciaContaCorrente;
	private $saldoContaPoupanca;
	private $depositoContaPoupanca;
	private $saqueContaPoupanca;
	private $transferenciaContaPoupanca;
	private $contaDestinoTransferencia;
	
	//metodo construtor
	public function exemplo($tipoDeConta,$tipoDeOperacao,$saldoContaCorrente,$depositoContaCorrente,$saqueContaCorrente,$transferenciaContaCorrente,$saldoContaPoupanca,$depositoContaPoupanca,$saqueContaPoupanca,$transferenciaContaPoupanca,$contaDestinoTransferencia){

		$this->tipoDeConta = $tipoDeConta;
		$this->tipoDeOperacao = $tipoDeOperacao;
		$this->saldoContaCorrente = $saldoContaCorrente;
		$this->depositoContaCorrente = $depositoContaCorrente;
		$this->saqueContaCorrente = $saqueContaCorrente;
		$this->transferenciaContaCorrente = $transferenciaContaCorrente;
		$this->saldoContaPoupanca = $saldoContaPoupanca;
		$this->depositoContaPoupanca = $depositoContaPoupanca;
		$this->saqueContaPoupanca = $saqueContaPoupanca;
		$this->transferenciaContaPoupanca = $transferenciaContaPoupanca;
		$this->contaDestinoTransferencia = $contaDestinoTransferencia;
	}

	//acessores
	public function getTipoDeConta(){
	   return $this->tipoDeConta;
    }
    public function setTipoDeConta($tipoDeConta){
	   $this->tipoDeConta=$tipoDeConta;
    }
    public function getTipoDeOperacao(){
	   return $this->tipoDeOperacao;
    }
    public function setTipoDeOperacao($tipoDeOperacao){
	   $this->tipoDeOperacao=$tipoDeOperacao;
	}
    public function getSaldoContaCorrente(){
		 return $this->saldoContaCorrente;
  	}
    public function setSaldoContaCorrente($saldoContaCorrente){
	   		$this->saldoContaCorrente=$saldoContaCorrente;
  	}
	public function getSaldoContaPoupanca(){
		 return $this->saldoContaPoupanca;
  	}
    public function setSaldoContaPoupanca($saldoContaPoupanca){
	   		$this->saldoContaPoupanca=$saldoContaPoupanca;
  	}
  	public function getDepositoContaCorrente(){
		 return $this->depositoContaCorrente;
  	}
    public function setDepositoContaCorrente($depositoContaCorrente){
	   		$this->depositoContaCorrente=$depositoContaCorrente;
  	}
	public function getSaqueContaCorrente(){
		 return $this->saqueContaCorrente;
  	}
    public function setSaqueContaCorrente($saqueContaCorrente){
	   		$this->saqueContaCorrente=$saqueContaCorrente;
  	}
  	public function getTransferenciaContaCorrente(){
		 return $this->transferenciaContaCorrente;
  	}
    public function setTransferenciaContaCorrente($transferenciaContaCorrente){
	   		$this->transferenciaContaCorrente=$transferenciaContaCorrente;
  	}

  	public function getDepositoContaPoupanca(){
		 return $this->depositoContaPoupanca;
  	}
    public function setDepositoContaPoupanca($depositoContaPoupanca){
	   		$this->depositoContaPoupanca=$depositoContaPoupanca;
  	}
	public function getSaqueContaPoupanca(){
		 return $this->saqueContaPoupanca;
  	}
    public function setSaqueContaPoupanca($saqueContaPoupanca){
	   		$this->saqueContaPoupanca=$saqueContaPoupanca;
  	}
  	public function getTransferenciaContaPoupanca(){
		 return $this->transferenciaContaPoupanca;
  	}
    public function setTransferenciaContaPoupanca($transferenciaContaPoupanca){
	   		$this->transferenciaContaPoupanca=$transferenciaContaPoupanca;
  	}
  	public function getContaDestinoTransferencia(){
	   return $this->contaDestinoTransferencia;
    }
    public function setContaDestinoTransferencia($contaDestinoTransferencia){
	   $this->contaDestinoTransferencia=$contaDestinoTransferencia;
    }

	//funcoes do caixa eletronico
  	public function criarConta($tipoDeConta,$saldoContaCorrente,$saldoContaPoupanca){

  		$this ->tipoDeConta=$tipoDeConta;
  		$this ->saldoContaCorrente=$saldoContaCorrente;
  		$this ->saldoContaPoupanca=$saldoContaPoupanca;
  	}

	public function operacao($tipoDeConta,$tipoDeOperacao){

		if($this->tipoDeConta == $tipoDeConta){// verifica a conta
			if($tipoDeConta == "corrente"){
				if($tipoDeOperacao=="deposito"){
						deposito();

				}elseif ($tipoDeOperacao == "saque") {
						saque();
					
				}elseif ($tipoDeOperacao == "transferencia") {
						transferencia();
				}else
					echo "essa opcao nao existe";
			}


		}elseif ($this->tipoDeConta == $tipoDeConta) { // verifica a conta
				if($tipoDeConta== "poupanca"){
					if($tipoDeOperacao == "deposito"){
							deposito();

					}elseif ($tipoDeOperacao == "saque") {
							saque();
					
					}elseif ($tipoDeOperacao =="transferencia") {
							transferencia();
					}else
						echo "essa opcao nao existe(2)";
			}
			
		}else
			echo "essa opcao de conta nao existe";
	}

	public function deposito($depositoContaCorrente,$depositoContaPoupanca){

		 $this ->saldoContaCorrente= $this ->saldoContaCorrente+$depositoContaCorrente;
		 $this ->saldoContaPoupanca= $this ->saldoContaPoupanca+$depositoContaPoupanca;
	}

	public function saque($saqueContaCorrente,$saqueContaPoupanca){

			if($this->tipoDeConta == "corrente"){
				$this ->saldoContaCorrente-2.50; 
				if($this ->saldoContaCorrente>0 && $this ->saldoContaCorrente>$saqueContaCorrente && $saqueContaCorrente<601){
					$this ->saldoContaCorrente= $this ->saldoContaCorrente- $saqueContaCorrente;
				}else{
					echo "nao foi possivel fazer saque da conta corrente. Tente Novamente";
					//	operacao();
				}
				

			}elseif ($this ->tipoDeConta == "poupanca") {
				$this ->saldoContaPoupanca-0.80; 
				if($this ->saldoContaPoupanca>0 && $this ->saldoContaPoupanca>$saqueContaPoupanca && $saqueContaPoupanca<1001){
					$this ->saldoContaPoupanca = $this ->saldoContaPoupanca - $saqueContaPoupanca;
				}else{
					echo "nao foi possivel fazer saque da conta poupanca. Tente Novamente(2)";
					//	operacao();
				}
				
			}else{
				echo "essa opcao de conta nao existe. Tente Novamente(3)";
				//	operacao();
			}
	}

	public function transferencia($transferenciaContaCorrente,$transferenciaContaPoupanca){

			if($this->tipoDeConta == "corrente"){
					if($this->saldoContaCorrente> $transferenciaContaCorrente){
						$this ->saldoContaCorrente= $this ->saldoContaCorrente - $transferenciaContaCorrente;
						$this ->contaDestinoTransferencia = $transferenciaContaCorrente;

					}else
						echo "essa conta nao possui saldo para fazer transferencias. Tente Novamente";
							//operacao();

			}elseif ($this->tipoDeConta == "poupanca") {
					if($this->saldoContaPoupanca> $transferenciaContaPoupanca){
						$this ->saldoContaPoupanca = $this ->saldoContaPoupanca - $transferenciaContaPoupanca;
						$this ->contaDestinoTransferencia = $transferenciaContaPoupanca;


					}else{
						echo "essa conta nao possui saldo para fazer transferencias. Tente Novamente(2)";
							//operacao();
					}
				
			}else{
				echo "operacao nao existe(3)";
					//operacao();
			}

	}
}
