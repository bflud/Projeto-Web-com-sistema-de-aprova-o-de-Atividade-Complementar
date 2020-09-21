<?php

class TipoAtividade
{
  private $id;
  private $atividadeprincipal;
  private $tipocalculo;
  private $horasatividade;
  private $limite;
  private $subatividade;
  private $idatividade;

  
  
  public function __construct() { }
  
  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }
  public function setIdatividade($idatividade){
    $this->idatividade = $idatividade;
  }
  public function getIdatividade(){
    return $this->idatividade;
  }
    public function setSubatividade($subatividade){
    $this->subatividade = $subatividade;
  }
  public function getSubatividade(){
    return $this->subatividade;
  }
   public function setAtividadeprincipal($atividadeprincipal){
    $this->atividadeprincipal = $atividadeprincipal;
  }
  public function getAtividadeprincipal(){
    return $this->atividadeprincipal;
  }
  
   public function setTipocalculo($tipocalculo){
    $this->tipocalculo = $tipocalculo;
  }
  public function getTipocalculo(){
    return $this->tipocalculo;
	
  }
  
   public function setHorasatividade($horasatividade){
    $this->horasatividade = $horasatividade;
  }
  public function getHorasatividade(){
    return $this->horasatividade;
  }
   public function setLimite($limite){
    $this->limite = $limite;
  }
 public function getLimite(){
    return $this->limite;
  }
}