<?php 
class Account {
  protected $nomor;
  protected $saldo;

  public function __construct($no, $saldo) {
    $this->nomor = $no;
    $this->saldo = $saldo;
  }

  public function getNomor() {
    return $this->nomor;
  }
  public function getSaldo() {
    return $this->saldo;
  }
  public function getCustomer() {
    return $this->customerName;
  }

  public function deposit($entri) {
    $this->saldo += $entri;
    return $entri;
  }

  public function withdraw($entri) {
    $this->saldo -= $entri;
    return $entri;
  }
}
class AccountBank extends Account {
  protected $customerName;
  
  public function __construct($no, $saldo, $customerName) {
    parent::__construct($no, $saldo);
    $this->customerName = $customerName;
  }

  public function transfer($entri, $nomorTujuan) {
    $nomorTujuan->saldo += $entri;
    $this->saldo -= $entri;
    return $entri;
  }
}