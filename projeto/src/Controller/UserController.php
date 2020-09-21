<?php

class UserController extends Controller
{
  private $userDao;

  public function __construct()
  {
    $this->view = new UserView();

    $this->userDao = new UserDao();
  }
  public function indexAction()
  {
     $this->setRoute($this->view->getIndexRoute());
  }
  public function createAction()
  { 
    $message = Message::singleton();
    
    $viewModel = array();
    
    if(array_key_exists ('save', $_POST))
    {
      $name =  array_key_exists ('name', $_POST) ? $_POST['name'] : '';
      
      $login =  array_key_exists ('login', $_POST) ? $_POST['login'] : '';
      
      $password =  array_key_exists ('password', $_POST) ? $_POST['password'] : '';
      
	  $rga =  array_key_exists ('rga', $_POST) ? $_POST['rga'] : '';
	  
	  $siape =  array_key_exists ('siape', $_POST) ? $_POST['siape'] : '';
	  
	  $tipo =  array_key_exists ('tipo', $_POST) ? $_POST['tipo'] : '';
	  
	  $titulacao =  array_key_exists ('titulacao', $_POST) ? $_POST['titulacao'] : '';
	  
	
      
      try
      {
        if(empty($name))
          throw new Exception('Preencha o campo Nome!');

        if(empty($login))
          throw new Exception('Preencha o campo Login!');

        if(empty($password))
          throw new Exception('Preencha o campo Senha!');
	  
		if(empty($rga))
          throw new Exception('Preencha o campo RGA!');
	  
	  if(empty($siape))
          throw new Exception('Preencha o campo Siape!');
	  
	   if(empty($tipo))
          throw new Exception('Preencha o campo Tipo!');
	  
	  if(empty($titulacao))
          throw new Exception('Preencha o campo titulacao!');
      
        
		
		
		$user = new User();
        $user->setName($name);
        $user->setLogin($login);
        $user->setPassword($password);
        $user->setRga($rga);
		$user->setSiape($siape);
		$user->setTipo($tipo);
		$user->setTitulacao($titulacao);
		
         
        $userDao = new UserDao(); 
      
        if($userDao->insert($user))
          $message->addMessage('Usuário adicionado com sucesso!');
        else
          throw new Exception('Problema ao adicionar um novo usuário.');

        $viewModel = array(
          'users' => $userDao->getAll(),
        );
        
        $this->setRoute($this->view->getListRoute());
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getCreateRoute()); 
        
        $message->addWarning($e->getMessage());
      }
    }
    else
      $this->setRoute($this->view->getCreateRoute()); 
    
    $this->showView($viewModel);

    return;
  }
  
   public function createAtividadeAction()
  { 
    $message = Message::singleton();
    
    $viewModel = array();
    
    if(array_key_exists ('save', $_POST))
    {
      $descricao =  array_key_exists ('descricao', $_POST) ? $_POST['descricao'] : '';
	  
	  $idfunciona =  array_key_exists ('idfunciona', $_POST) ? $_POST['idfunciona'] : '';
      	 
      $chtotal =  array_key_exists ('chtotal', $_POST) ? $_POST['chtotal'] : '';
      
      $chaproveitada =  array_key_exists ('chaproveitada', $_POST) ? $_POST['chaproveitada'] : '';
	  
	  $tipoatividade =  array_key_exists ('tipoatividade', $_POST) ? $_POST['tipoatividade'] : '';
	  
	 
  
  
    ///tipo_atividade aqui 
	  
	  $atividadeprincipal =  array_key_exists ('atividadeprincipal', $_POST) ? $_POST['atividadeprincipal'] : '';
	  
	  $tipocalculo =  array_key_exists ('tipocalculo', $_POST) ? $_POST['tipocalculo'] : '';
	
	  $horasatividade =  array_key_exists ('horasatividade', $_POST) ? $_POST['horasatividade'] : '';

	  $limite =  array_key_exists ('limite', $_POST) ? $_POST['limite'] : '';
	  
	  $subatividade =  array_key_exists ('subatividade', $_POST) ? $_POST['subatividade'] : '';

	  //$pdf =  array_key_exists ('pdf', $_FILES) ? $_FILES['pdf'] : '';
	  
	   //$pdf = $_FILES['pdf']['tmp_name'];
	 
	//	$
		 
		 
	if($_FILES['pdf']['name']){
		$nome = $_FILES['pdf']['name'];
		if(move_uploaded_file($_FILES['pdf']['tmp_name'], "./upload/".$nome)){
			$status='sucesso';
		}else{
			$status='falha';
		}
	
	}
	
		
			
	
      try
      {
        if(empty($descricao))
          throw new Exception('Preencha o campo Descricao!');

        if(empty($chtotal))
          throw new Exception('Preencha o campo Carga Horaria total!');

        if(empty($chaproveitada))
          throw new Exception('Preencha o campo Carga Horaria aproveitada!');
		
		if(empty($tipoatividade))
          throw new Exception('Preencha o campo Tipo atividade!');
	  
		if(empty($atividadeprincipal))
          throw new Exception('Preencha o campo Atividade Principal!');
	  
		if(empty($limite))
          throw new Exception('Preencha o campo Limite');
	  
		if(empty($idfunciona))
          throw new Exception('Preencha o campo id requerimento!');
	  
		if(empty($subatividade))
          throw new Exception('Preencha o campo subatividade');
	  
		
        $atividade = new Atividade();
        $atividade->setDescricao($descricao);

        $atividade->setChtotal($chtotal);

        $atividade->setChaproveitada($chaproveitada);

        $atividade->setTipoatividade($tipoatividade);

        $atividade->setIdRequerimento($idfunciona);
		
	
		
		
		$tipoatividade = new Tipoatividade();
		
		$tipoatividade->setAtividadeprincipal($atividadeprincipal);
	
		$tipoatividade->setTipocalculo($tipocalculo);
	
		$tipoatividade->setHorasatividade($horasatividade);
		
		$tipoatividade->setLimite($limite);	
		$tipoatividade->setSubatividade($subatividade);
		
		
		
		$documento = new Documento();
		
		$documento->setDocumento($nome);
		
		$documentoDao = new DocumentoDao();
		
		$tipoAtividadeDao = new TipoAtividadeDao();
		
        $atividadeDao = new AtividadeDao(); 
		
		
        if($last=$atividadeDao->insert($atividade))
			
          $message->addMessage('Atividade adicionado com sucesso!');
			$tipoatividade->setIdAtividade($last);
			if($tipoAtividadeDao->insert($tipoatividade))
				$message->addMessage('Tipo de atividade adicionado com sucesso!');
				$documento->setId($last);
				if($documentoDao->insert($documento))
					
					$message->addMessage('Documento adicionado com sucesso!');
		else		
          throw new Exception('Problema ao adicionar uma atividade');

        $viewModel = array(
          'atividades' => $atividadeDao->getAll(),
        );
        
        $this->setRoute($this->view->getCreateAtividadeRoute());
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getCreateAtividadeRoute()); 
        
        $message->addWarning($e->getMessage());
      }
    }
    else
      $this->setRoute($this->view->getCreateAtividadeRoute()); 
    
    $this->showView($viewModel);

    return;
  }

  
  public function createRequerimentoAction()
  { 
    $message = Message::singleton();
    
    $viewModel = array();
    
    if(array_key_exists ('save', $_POST))
    {
      $id =  array_key_exists ('id', $_POST) ? $_POST['id'] : '';

   
      
      try
      {
        if(empty($id))
          throw new Exception('Preencha o campo id!');

		$userDao = new UserDao();
        $requerimento = new Requerimento();

		$requerimento->setIdAluno($id);

		$requerimento->setStatus('analise');
        $requerimentoDao = new RequerimentoDao(); 
      
        if($requerimentoDao->insert($requerimento))
          $message->addMessage('Requerimento criado com sucesso!');
		
		else
          throw new Exception('Problema ao criar requerimento.');
		
		if($userDao->updateRequerimentoativo($id))
			
			$message->addMessage('Por favor Relogue no sistema!');
			
        else
          throw new Exception('Problema ao criar requerimento.');

        $viewModel = array(
          'requerimentos' => $requerimentoDao->getAll(),
        );
        
        $this->setRoute($this->view->getIndexRoute());
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getIndexRoute()); 
        
        $message->addWarning($e->getMessage());
      }
    }
    else
      $this->setRoute($this->view->getCreateRoute()); 
    
    $this->showView($viewModel);

	
    return;
  }
  
  public function updateAction()
  { 

    $message = Message::singleton();

    $id =  array_key_exists ('id', $_GET) ? $_GET['id'] : '';
	
    if(array_key_exists ('save', $_POST))
    {
      $name =  array_key_exists ('name', $_POST) ? $_POST['name'] : '';
      
      $email =  array_key_exists ('email', $_POST) ? $_POST['email'] : '';
      
      try
      {
        if(empty($name))
          throw new Exception('Preencha o campo Nome!');

        if(empty($email))
          throw new Exception('Preencha o campo Email!');

        $user = new User();
        $user->setId($id);
        $user->setName($name);
        $user->setEmail($email);
        
        if($this->userDao->update($user))
          $message->addMessage('Usuário alterado com sucesso!');
        else
          throw new Exception('Problema ao alterar um o usuário.');

        $viewModel = array(
          'users' => $this->userDao->getAll(),
        );
        
        $this->setRoute($this->view->getListRoute());
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getUpdateRoute()); 
        
        $message->addWarning($e->getMessage());
      }
    }
    else
    {
      $viewModel = array(
        'user' => $this->userDao->getUser($id)
      );

      $this->setRoute($this->view->getUpdateRoute());
    }

    $this->showView($viewModel);

    return;
  }
  
  public function profileAction(){
  
	$this->setRoute($this->view->getProfileRoute());
	
	return;
  }
  
  public function listAction()
  { 
    $userDao = new UserDao();
    
    $viewModel = array(
        'users' => $userDao->getAll(),
      );

    $this->setRoute($this->view->getListRoute());
    
    $this->showView($viewModel);
    
    return;
  }
   public function listAtividadeAction()
  { 
    $atividadeDao = new AtividadeDao();
    
    $viewModel = array(
        'atividades' => $atividadeDao->getAll(),
      );

    $this->setRoute($this->view->getListAtividadeRoute());
    
    $this->showView($viewModel);
    
    return;
  }
     public function listAtividadeUserAction()
  { 
    $atividadeDao = new AtividadeDao();
	
    $viewModel = array(
        'atividades' => $atividadeDao->getAlltual( $_SESSION['id_usuario']),
      );

    $this->setRoute($this->view->getListAtividadeUserRoute());
    
    $this->showView($viewModel);
    
    return;
  }
  
  
  
    public function reprovarAction()
  { 
  $message = Message::singleton();
    $atividadeDao = new AtividadeDao();
     
	 $id =  array_key_exists ('id', $_GET) ? $_GET['id'] : '';

    if($atividadeDao->reprovar($id))
        $message->addMessage('Aluno reprovado com sucesso');
    
    $viewModel = array(
        'atividades' => $atividadeDao->getAll(),
      );

    $this->setRoute($this->view->getListAtividadeRoute());
    
    $this->showView($viewModel);
    
    return;
  }
  
  
  
  

    public function aprovarAction()
  { 
  $message = Message::singleton();
    $atividadeDao = new AtividadeDao();
     
	 $id =  array_key_exists ('id', $_GET) ? $_GET['id'] : '';

    if($atividadeDao->aprovar($id))
        $message->addMessage('Aluno aprovado com sucesso');
    
    $viewModel = array(
        'atividades' => $atividadeDao->getAll(),
      );

    $this->setRoute($this->view->getListAtividadeRoute());
    
    $this->showView($viewModel);
    
    return;
  }
  
  public function updatePasswordAction()
  {

    $message = Message::singleton();
    
    $viewModel = array();

    $id =  array_key_exists ('id', $_GET) ? $_GET['id'] : '';
    
    if(array_key_exists ('save', $_POST))
    {
      $currentPassword =  array_key_exists ('currentPassword', $_POST) ? $_POST['currentPassword'] : '';
      
      $newPassword =  array_key_exists ('newPassword', $_POST) ? $_POST['newPassword'] : '';
      
      $confirmPassword =  array_key_exists ('confirmPassword', $_POST) ? $_POST['confirmPassword'] : '';
      
      $viewModel = array(
          'users' => $this->userDao->getAll(),
          'user' => $this->userDao->getUser($id),
        );
      
      try
      {
        if(empty($currentPassword))
          throw new Exception('Preencha o campo Senha Atual.');

        if(empty($newPassword))
          throw new Exception('Preencha o campo Nova Senha.');

        if(empty($confirmPassword))
          throw new Exception('Preencha o campo Confirme a Senha.');
      
        if(!$this->userDao->checkPassword($id, $currentPassword))
          throw new Exception('Senha atual incorreta.');

        if($newPassword != $confirmPassword)
          throw new Exception('Senhas não conferem.');

        if(!$this->userDao->updatePassword($id, $newPassword))
          throw new Exception('Problema ao alterar senha');

        $message->addMessage('Senha alterada com sucesso');
        
        $this->setRoute($this->view->getListRoute());
      }
      catch(PDOException $e)
      {
          $message->addWarning($e->getMessage());
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getUpdatePasswordRoute()); 
        
        $message->addWarning($e->getMessage());
      }
    }
    else
    {
      $viewModel = array(
          'user' => $this->userDao->getUser($id),
      );

      $this->setRoute($this->view->getUpdatePasswordRoute()); 
    }

    
    
    $this->showView($viewModel);

    return;

  }
}