<?php

class Atividade
{
  private $id;
  private $descricao;
  private $chtotal;
  private $chaproveitada;
  private $tipoatividade;
  private $idrequerimento;
  private $status;
  
  
  public function __construct() { }
  
  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }
   public function setStatus($status){
    $this->status = $status;
  }
  public function getStatus(){
    return $this->status;
  }
  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }
  
  public function getDescricao(){
    return $this->descricao;
  }
  
  public function setChtotal($chtotal){
    $this->chtotal = $chtotal;
  }
  
  public function getChtotal(){
    return $this->chtotal;
  }
  public function setChaproveitada($chaproveitada){
    $this->chaproveitada = $chaproveitada;
  }
  
  public function getChaproveitada(){
    return $this->chaproveitada;
  }
  public function setTipoatividade($tipoatividade){
    $this->tipoatividade = $tipoatividade;
  }
  
  public function getTipoatividade(){
    return $this->tipoatividade;
  }
  public function setIdrequerimento($idrequerimento){
    $this->idrequerimento = $idrequerimento;
  }
  
  public function getIdrequerimento(){
    return $this->idrequerimento;
  }
}