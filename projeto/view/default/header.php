<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style>
        body {
          padding-top: 5rem;
        }
        .starter-template {
          padding: 3rem 1.5rem;
         
        }
    </style>

  </head>

  <body>
	
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href=""><?= $userAccount->getName() ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Função</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
			
				<?php $professor = 'professor';
			if ($userAccount->getTipo()== $professor):?>

			  <a class="dropdown-item" href="index.php?controller=User&action=listAtividade">Listar Atividades</a>
			  <a class="dropdown-item" href="index.php?controller=User&action=list">Listar Usuários</a>
              <a class="dropdown-item" href="index.php?controller=User&action=create">Adicionar Usuário</a>
				 <?php else: 
				 ?>
			<?php endif;?>
			
			<?if ($userAccount->getRequerimentoativo()== true):?>
              <a class="dropdown-item" href="index.php?controller=User&action=createAtividade" >Adicionar Atividades</a>
			  

			  <?php endif;?>
			  <a class="dropdown-item" href="index.php?controller=Logon&action=logoff">LOGOFF</a>
            
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">