<?php

class Requerimento
{
  private $idRequerimento;
  private $idAluno;
  private $dataEntrega;
  private $dataFinalizacao;
  private $status;
  
  
  public function __construct() { }
  
  public function setIdRequerimento($idRequerimento){
    $this->idRequerimento = $idRequerimento;
  }
  public function getIdRequerimento(){
    return $this->idRequerimento;
  }
   public function setIdAluno($idAluno){
    $this->idAluno = $idAluno;
  }
  public function getIdAluno(){
    return $this->idAluno;
  }
   public function setDataEntrega($dataEntrega){
    $this->dataEntrega = $dataEntrega;
  }
  public function getDataEntrega(){
    return $this->dataEntrega;
  }
   public function setDataFinalizacao($dataFinalizacao){
    $this->dataFinalizacao = $dataFinalizacao;
  }
  public function getDataFinalizacao(){
    return $this->dataFinalizacao;
  }
   public function setStatus($status){
    $this->status = $status;
  }
  public function getStatus(){
    return $this->status;
  }
  
}