<?php

class User
{
  private $id;
  private $name;
  private $login;
  private $password;
  private $rga;
  private $siape;
  private $tipo;
  private $titulacao;
  private $requerimentoativo;


  public function __construct() { }
  
  




  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
   public function setRequerimentoativo($requerimentoativo)
  {
    $this->requerimentoativo = $requerimentoativo;
  }
  public function getRequerimentoativo()
  {
    return $this->requerimentoativo;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getLogin()
  {
    return $this->login;
  }
  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }
  public function setLogin($login)
  {
    $this->login = $login;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  
    public function setRga($rga)
  {
    $this->rga = $rga;
  }
  public function getRga()
  {
    return $this->rga;
  }
  
    public function setSiape($siape)
  {
    $this->siape = $siape;
  }
  public function getSiape()
  {
    return $this->siape;
  }
  
    public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }
  public function getTipo()
  {
    return $this->tipo;
  }

    public function setTitulacao($titulacao)
  {
    $this->titulacao = $titulacao;
  }
  public function getTitulacao()
  {
    return $this->titulacao;
  }
}