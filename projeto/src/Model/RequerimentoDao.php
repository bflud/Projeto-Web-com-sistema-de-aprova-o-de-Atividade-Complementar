<?php

class RequerimentoDao
{
  const _table = 'requerimento';

  public function __construct() { }

  public function insert($requerimento){
   
	$db = Database::singleton();
	
    $sql = 'INSERT INTO '. self::_table .' (idAluno, dataEntrega, dataFinalizacao, status) VALUES ( ?, ?, ?,?)';
     
    $sth = $db->prepare($sql);
	
   
    //$sth->bindValue(1,  strtolower(trim ($requerimento->getIdRequerimento())), PDO::PARAM_STR);
	$sth->bindValue(1,  $requerimento->getIdAluno(), PDO::PARAM_STR);
	$sth->bindValue(2,  $requerimento->getDataEntrega(), PDO::PARAM_STR);
	$sth->bindValue(3,  $requerimento->getDataFinalizacao(), PDO::PARAM_STR);
	$sth->bindValue(4,  $requerimento->getStatus(), PDO::PARAM_STR);
    
	
	
    return $sth->execute();
  }

	public function compare($id){
	$db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table .'WHERE idaluno = (?)';
	$sth = $db->prepare($sql);
	$sth->bindValue(1,  $id, PDO::PARAM_STR);
	$sth = $db->prepare($sql);
	
	if($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $requerimento = new Requerimento();
      $requerimento->setId($obj->id);
      $requerimento->setIdAluno($obj->idaluno);
      $requerimento->setStatus($obj->status);

      return $requerimento;
    }
	
	}	

  public function getAll()
  {
    
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table;
    
    $sth = $db->prepare($sql);

    $sth->execute();

    $requerimentos = array();
    
    while($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $requerimento = new Requerimento();
	  $requerimento->setIdRequerimento($obj->id);
      $requerimento->setIdAluno($obj->idaluno);
	  $requerimento->setDataEntrega($obj->dataentrega);
	  $requerimento->setDataFinalizacao($obj->datafinalizacao);
	  $requerimento->setStatus($obj->status);

    

      $requerimentos[] = $requerimentos; 
    }
    
    return $requerimentos;  
  }


  public function getUser($id)
  {
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table . ' WHERE id = ?';

    $sth = $db->prepare($sql);

    $sth->bindValue(1, $id, PDO::PARAM_STR);

    $sth->execute();

    if($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $user = new User();
      $user->setId($obj->id);
      $user->setName($obj->name);
      $user->setPassword($obj->password);
      $user->setEmail($obj->email);
      $user->setActive($obj->active);

      return $user;
    }

    return false;
  }

  public function checkPassword($id, $currentPassword)
  {
    $user = $this->getUser($id);

    if($user->getPassword() == sha1($currentPassword))
      return true;

    return false;

  }

  //login
   public function login($email,$password)
  {
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table . ' WHERE email = ? AND password = ?';

    $sth = $db->prepare($sql);

    $sth->bindValue(1, trim(strtolower($email)), PDO::PARAM_STR);
	$sth->bindValue(2, trim(sha1($password)), PDO::PARAM_STR);
	
    $sth->execute();

    if($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $user = new User();
      $user->setId($obj->id);
      $user->setName($obj->name);
	  $user->setEmail($obj->email);
      $user->setPassword($obj->password);
      $user->setPhone($obj->phone);
	  $user->setAdress($obj->adress);
	  $user->setCity($obj->city);
	  $user->setState($obj->state);
	  $user->setPostcod($obj->postcod);
	  $user->setLinkedin($obj->linkedin);
	  $user->setFacebook($obj->facebook);
	  $user->setTwitter($obj->twitter);
	  $user->setInstagram($obj->instagram);
	  $user->setOccupation($obj->occupation);
	  $user->set_Type($obj->_type);
      $user->setActive($obj->active);
      return $user;
    }

    return false;
  }
  

}