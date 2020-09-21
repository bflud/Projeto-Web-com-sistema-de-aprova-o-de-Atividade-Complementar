<h1>Listar Suas Atividades</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição da atividade</th>
      <th scope="col">Carga Horaria Total</th>
	  <th scope="col">Carga Horaria Aproveitada</th>
	  <th scope="col">tipo de Atividade</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>

  <?php 
    
    if($atividades) :
    
      foreach ($atividades as $atividade) :?>
        
        <tr>
          <td scope="row"><?php echo $atividade->getId() ?></td>
		  <td><?= $atividade->getDescricao() ?></td>
          <td><?= $atividade->getChtotal() ?></td>
          <td><?=  $atividade->getChaproveitada() ?></td>
		  <td><?=  $atividade->getTipoatividade() ?></td>
          <td>
            <a href="index.php?controller=User&action=update&id=<?= $atividade->getId()?>">Finalizar</a>
            
          </td>
        </tr>
      <?php 

      endforeach; 
   endif;

  ?>    
  </tbody>
</table>