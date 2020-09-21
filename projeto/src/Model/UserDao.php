<?php

class UserDao
{
  const _table = 'usuario';

  public function __construct() { }

 public function insert($user)
  {
    $db = Database::singleton();

    $sql = 'INSERT INTO '. self::_table .' (login, password, rga, siape, tipo, name, titulacao) VALUES (?,?,?,?, ?, ?, ?)';
    
    $sth = $db->prepare($sql);

    $sth->bindValue(1, trim ($user->getLogin()), PDO::PARAM_STR);
    $sth->bindValue(2, trim ($user->getPassword()), PDO::PARAM_STR);
    $sth->bindValue(3, trim ($user->getRga()), PDO::PARAM_STR);
    $sth->bindValue(4, trim ($user->getSiape()), PDO::PARAM_STR);
	$sth->bindValue(5, trim ($user->getTipo()), PDO::PARAM_STR);
	$sth->bindValue(6, trim ($user->getName()), PDO::PARAM_STR);
	$sth->bindValue(7, trim ($user->getTitulacao()), PDO::PARAM_STR);
	//$sth->bindValue(8, (false), PDO::PARAM_STR);
  
    return $sth->execute();
  }
  public function update($user)
  {  
  

  }

  public function updatePassword($id, $newPassword)
  {  
   

  }

  public function delete($id)
  {  


  }

  public function getAll()
  {
    
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table;
    
    $sth = $db->prepare($sql);

    $sth->execute();

    $users = array();
    
    while($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $user = new User();
	  $user->setId($obj->id);
      $user->setName($obj->name);
	  $user->setLogin($obj->login);
      $user->setPassword($obj->password);
	  $user->setRga($obj->rga);
	  $user->setSiape($obj->siape);
	  $user->setTipo($obj->tipo);
	  $user->setTitulacao($obj->titulacao);
	 
     
      $users[] = $user; 
    }
    
    return $users;  
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
	  $user->setLogin($obj->login);
      $user->setPassword($obj->password);
	  $user->setRga($obj->rga);
	  $user->setSiape($obj->siape);
	  $user->setTipo($obj->tipo);
	  $user->setTitulacao($obj->titulacao);
	  $user->setRequerimentoAtivo($obj->requerimentoAtivo);
     

      return $user;
    }

    return false;
  }

  public function login($login, $password)
  {
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table . ' WHERE login = ? AND password = ?';

    $sth = $db->prepare($sql);

    $sth->bindValue(1, trim(strtolower($login)), PDO::PARAM_STR);
    $sth->bindValue(2, trim($password), PDO::PARAM_STR);

    $sth->execute();

    if($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $user = new User();
      $user->setId($obj->id);
	  $_SESSION['id_usuario'] = $user->getId();
      $user->setName($obj->name);
	  $user->setLogin($obj->login);
      $user->setPassword($obj->password);
	  $user->setRga($obj->rga);
	  $user->setSiape($obj->siape);
	  $user->setTipo($obj->tipo);
	  $user->setTitulacao($obj->titulacao);
	  $user->setRequerimentoAtivo($obj->requerimentoativo);
	
   

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
  
  public function updateRequerimentoativo($id){
	  
	  $db = Database::singleton();
	
	   $sql = 'UPDATE '. self::_table .' SET requerimentoAtivo = ? WHERE id = ?';
	  
	  $sth = $db->prepare($sql);
	  $sth->bindValue(1, true, PDO::PARAM_STR);
      $sth->bindValue(2, $id, PDO::PARAM_INT);
	
	return $sth->execute();  
	
}
}