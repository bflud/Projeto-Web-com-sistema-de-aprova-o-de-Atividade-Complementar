<h1>Listar Usuário</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
	  <th scope="col">Rga</th>
	  <th scope="col">Siape</th>
	  <th scope="col">Tipo</th>
	  <th scope="col">Titulacao</th>

    </tr>
  </thead>
  <tbody>

  <?php 
    
    if($users) :
    
      foreach ($users as $user) :?>
        
        <tr>
          <td scope="row"><?php echo $user->getId() ?></td>
          <td><a href="#"><?= $user->getName() ?></a></td>
          <td><?=  $user->getLogin() ?></td>
		  <td><?=  $user->getRga() ?></td>
		  
		  <td><?=  $user->getSiape() ?></td>
		  <td><?=  $user->getTipo() ?></td>
		  <td><?=  $user->getTitulacao() ?></td>
          <td>
            
          </td>
        </tr>
      <?php 

      endforeach; 
   endif;

  ?>    
  </tbody>
</table>