<h1>Horas complementares</h1>

	<?
	$professor = 'professor';
	if ($userAccount->getTipo()!= $professor):
	if (!$userAccount->getRequerimentoativo() ):
	
			?>
	<form action="index.php?controller=User&action=createRequerimento" method="post">
	<input type="hidden" name="id" class="form-control"  value="<?=$userAccount->getId()?>">
	<button type="submit" name="save" class="btn btn-primary">Gerar Requerimento</button>
	</form>
	<?

	
	 endif; 
	 
	
	   endif;
	?>
