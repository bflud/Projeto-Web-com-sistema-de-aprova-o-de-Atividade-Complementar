<h1>Listar Atividades</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição da atividade</th>
      <th scope="col">Carga Horaria Total</th>
	  <th scope="col">Carga Horaria Aproveitada</th>
	  <th scope="col">Tipo de Atividade</th>
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
		  <td>
		  <?$teste =$atividade->getTipoatividade();
		  if($teste=='0'){
			?> Outro<?
		  }else if($teste=='1'){
		  ?> Evento científico ou em áreas afins<?
		   }else if($teste=='2'){
		  ?> Monitoria Extensão e/ou Ensino<?
		   }else if($teste=='3'){
		  ?> Projeto de Extensão<?
		   }else if($teste=='4'){
		  ?> Projeto de Ensino<?
		   }else if($teste=='5'){
		  ?> Projeto de Pesquisa<?
		   }else if($teste=='6'){
		  ?> Iniciação Científica<?
		   }else if($teste=='7'){
		  ?> Publicação de Trabalho Científico<?
		   }else if($teste=='8'){
		  ?> Estágio não obrigatório<?
		  }else if($teste=='9'){
		  ?> Participação em Órgão Colegiado<?
		  }else if($teste=='10'){
		  ?> Curso pertinente à área<?
		  }else if($teste=='11'){
		  ?> Disciplina cursada como enriquecimento curricular<?
		  }else if($teste=='12'){
		  ?> Participação em Comissão de Estágio do Curso<?
		  }else if($teste=='13'){
		  ?> Programa de Educação Tutorial (PET)<?
		  }else if($teste=='14'){
		  ?> Projeto de Intervenção Comunitária<?
		  }else if($teste=='15'){
		  ?> Presença em Defesa de Projeto Final<?
		  }else if($teste=='16'){
		  ?> Visitas Técnicas<?
		  }else if($teste=='17'){
		  ?> Palestra<?
		  }else if($teste=='18'){
		  ?> Serviços à Justiça Eleitorals<?
		  }
		  ?>
		  
		  
		  
		  
		  
		  
		  <?//=  $atividade->getTipoatividade() ?></td>
          <td>
		  
		  <?
		  $documentoDao = new DocumentoDao();
			
		  $teste = $documentoDao->verArquivo($atividade->getId());
		  
		  ?>
			<?if (empty($atividade->getStatus())){  ?>
			
            <a href="index.php?controller=User&action=aprovar&id=<?= $atividade->getId()?>">Aprovar</a>
            <a href="index.php?controller=User&action=reprovar&id=<?= $atividade->getId()?>">Reprovar</a>
			<a href="./upload/<?=$teste?>" target="_blank">Visualizar</a>
            <? 
			}else{
			?>
			<a> <?=$atividade->getStatus();}?>
          </td>
        </tr>
      <?php 
			
      endforeach; 
   endif;

  ?>    
  </tbody>
</table>