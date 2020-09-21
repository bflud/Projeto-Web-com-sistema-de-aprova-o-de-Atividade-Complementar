<?php

class LogonController extends Controller
{
  private $userDao;

  public function __construct()
  {
    $this->view = new LogonView();

    $this->userDao = new UserDao();
  }
  public function loginAction()
  {

    $message = Message::singleton();

    if(array_key_exists ('submit', $_POST))
    {

      $login =  array_key_exists ('login', $_POST) ? $_POST['login'] : '';
      
      $password =  array_key_exists ('password', $_POST) ? $_POST['password'] : '';
    
      try
      {

        if(empty($login))
            throw new Exception('Preencha o campo Login.');

        if(empty($password))
            throw new Exception('Preencha o campo Senha.');

        if($user = $this->userDao->login($login, $password))
        {

          $message->addMessage('Usuário autenticado com sucesso.');

          $this->setRoute($this->view->getIndexRoute());

          $_SESSION['USER'] = serialize($user);

        }
        else
        {

          $message->addWarning('Login ou Senha incorretos.');

          $this->setRoute($this->view->getLogonRoute());

        }
      }
      catch(Exception $e)
      {
        $this->setRoute($this->view->getLogonRoute());

        $message->addWarning($e->getMessage());
      }
    }
    else
    {
      $this->setRoute($this->view->getLogonRoute());
    }

    $this->showView();

    return;
  }

  public function logoffAction()
  {
    unset($_SESSION['USER']);

    $this->setRoute($this->view->getLogonRoute());

    $message = Message::singleton();

    $message->addMessage('Você foi deslogado com sucesso.');

    $this->showView();

  }
}