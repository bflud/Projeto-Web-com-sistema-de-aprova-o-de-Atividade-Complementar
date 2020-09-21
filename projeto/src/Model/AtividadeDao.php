<?php

class AtividadeDao
{
  const _table = 'atividade';

  public function __construct() { }

  public function insert($atividade){
   
	$db = Database::singleton();
	
    $sql = 'INSERT INTO '. self::_table .' (descricaoatividade, chtotal, chaproveitada, tipoatividade, idrequerimento) VALUES ( ? , ? , ? , ? , ? )';
     
    $sth = $db->prepare($sql);
	
    $sth->bindValue(1,  strtolower(trim ($atividade->getDescricao())), PDO::PARAM_STR);
    $sth->bindValue(2,  $atividade->getChtotal(), PDO::PARAM_STR);
    $sth->bindValue(3,  $atividade->getChaproveitada(), PDO::PARAM_STR);
	$sth->bindValue(4,  $atividade->getTipoatividade(), PDO::PARAM_STR);
	$sth->bindValue(5,  $atividade->getIdrequerimento(), PDO::PARAM_STR);
	
	
    $sth->execute();
	return $db->lastInsertId();
  }
   

  public function reprovar($id)
  {  
    $db = Database::singleton();

    $sql = 'UPDATE '. self::_table .' SET status = ? WHERE id = ?';
    
    $sth = $db->prepare($sql);

    $sth->bindValue(1, ('reprovado'), PDO::PARAM_STR);
    $sth->bindValue(2,  ($id), PDO::PARAM_STR);
    
    
    return $sth->execute();    

  }
  
    public function aprovar($id)
  {  
    $db = Database::singleton();

    $sql = 'UPDATE '. self::_table .' SET status = ? WHERE id = ?';
    
    $sth = $db->prepare($sql);

    $sth->bindValue(1, ('aprovado'), PDO::PARAM_STR);
    $sth->bindValue(2,  ($id), PDO::PARAM_STR);
    
    
    return $sth->execute();    

  }

  public function updatePassword($id, $newPassword)
  {  
    $db = Database::singleton();

    $sql = 'UPDATE '. self::_table .' SET password = ? WHERE id = ?';
    
    $sth = $db->prepare($sql);

    $sth->bindValue(1, sha1($newPassword), PDO::PARAM_STR);
    $sth->bindValue(2, $id, PDO::PARAM_INT);
    
    return $sth->execute();    

  }

  public function delete($id)
  {  
    $db = Database::singleton();

    $sql = 'DELETE FROM ' . self::_table . ' WHERE id = ?';
    
    $sth = $db->prepare($sql);

    $sth->bindValue(1, $id, PDO::PARAM_INT);
    
    return $sth->execute();    

  }

  public function getAll()
  {
    
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table;
    
    $sth = $db->prepare($sql);

    $sth->execute();

    $atividades = array();
    
    while($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $atividade = new Atividade();
	  $atividade->setId($obj->id);
      $atividade->setDescricao($obj->descricaoatividade);
      $atividade->setChtotal($obj->chtotal);
      $atividade->setChaproveitada($obj->chaproveitada);
      $atividade->setTipoatividade($obj->tipoatividade);
	  $atividade->setStatus($obj->status);

      $atividades[] = $atividade; 
    }
    
    return $atividades;  
  }

   public function getAlltual($id)
  {
    
    $db = Database::singleton();

    $sql = 'SELECT * FROM ' . self::_table .'WHERE id = ?';
 
    $sth = $db->prepare($sql);
	
	$sth->bindValue(1, $id, PDO::PARAM_INT);
	
    $sth->execute();

    $atividades = array();
    
    while($obj = $sth->fetch(PDO::FETCH_OBJ))
    {
      $atividade = new Atividade();
	  $atividade->setId($obj->id);
      $atividade->setDescricao($obj->descricaoatividade);
      $atividade->setChtotal($obj->chtotal);
      $atividade->setChaproveitada($obj->chaproveitada);
      $atividade->setTipoatividade($obj->tipoatividade);

      $atividades[] = $atividade; 
    }
    
    return $atividades;  
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
  public function Last(){
  
  $last_id = $pdo->lastInsertId();
	  
	  return $last_id;
	  
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