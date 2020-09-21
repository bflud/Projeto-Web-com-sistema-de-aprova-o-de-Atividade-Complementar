<?php

class Documento
{
  private $documento;
  private $id;
  
  public function __construct() { }
  
  public function setDocumento($documento){
    $this->documento = $documento;
  }
  public function getDocumento(){
    return $this->documento;
  
  
}

  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  
  
}
}