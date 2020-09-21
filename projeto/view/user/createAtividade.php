<h1>Adicionar Atividade</h1>
<?
$idvai =$userAccount->getId();
?>
<form enctype ="multipart/form-data" action="index.php?controller=User&action=createAtividade" method="post">


 <div class="form-group">
<input type="hidden" name="idfunciona"class="form-control" value = "<?echo $idvai?>"id="exampleInputEmail1" aria-describedby="emailHelp "readonly>

</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Descrição da Atividade</label>
    <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Carga Horaria Total</label>
    <input type="text" name="chtotal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

   </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Carga Horaria Aproveitada</label>
    <input type="text" name="chaproveitada" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>
 	<div class="form-group">
	<label for="exampleInputEmail1">Tipo de Atividade</label>
    <select id="cars"  name = "tipoatividade"class="form-control">
	 <option value="1">Evento científico ou em áreas afins</option>
     <option value="2">Monitoria Extensão e/ou Ensino</option>
     <option value="3">Projeto de Extensão</option>
     <option value="4">Projeto de Ensino</option>
	 <option value="5">Projeto de Pesquisa</option>
	 <option value="6">Iniciação Científica</option>
	 <option value="7">Publicação de Trabalho Científico</option>
	 <option value="8">Estágio não obrigatório</option>
	 <option value="9">Participação em Órgão Colegiado </option>
	 <option value="10">Curso pertinente à área</option>
	 <option value="11">Disciplina cursada como enriquecimento curricular</option>
	 <option value="12">Participação em Comissão de Estágio do Curso </option>
	 <option value="13">Programa de Educação Tutorial (PET)</option>
	 <option value="14">Projeto de Intervenção Comunitária</option>
	 <option value="15">Presença em Defesa de Projeto Final</option>
	 <option value="16">Visitas Técnicas </option>
	 <option value="17">Palestra</option>
	 <option value="18">Serviços à Justiça Eleitoral </option>
	</select>
	</div>
		
   <div class="form-group">
	<label for="exampleInputEmail1">Atividade Principal</label>
    <select id="cars" name = "atividadeprincipal"class="form-control">
    <option value="1">Organização</option>
     <option value="2">Apresentação</option>
     <option value="3">Participação</option>
     <option value="4">Coordenador</option>
	 <option value="5">Colaborador</option>
	 <option value="6">Instrutor</option>
	 <option value="7">Trabalho completo</option>
	 <option value="8">Resumo expandido</option>
	 <option value="9">Resumo simples </option>
	 <option value="10">Curso Técnico em Áreas Afins</option>
	 <option value="11">Curso de Língua Estrangeira e/ou Informática</option>
	 <option value="12">Curso de Verão - Realizado em Instituição de Ensino Superior. </option>
	 <option value="13">Ouvinte </option>
	 <option value="14">Palestrante</option>
	 <option value="0">Nehum</option>

	</select>
	</div>
	<div class="form-group">
	<label for="exampleInputEmail1">SubAtividade</label>
    <select id="cars" name = "subatividade"class="form-control">
    <option value="1">Coordenador</option>
     <option value="2">Colaborador</option>
     <option value="3">Oral</option>
     <option value="4">Painel</option>
	 <option value="5">Curso Técnico em Áreas Afins (cursos/minicursos em eventos, projetos de extensão/ensino, etc.)</option>
	 <option value="6">Curso de Língua Estrangeira e/ou Informática</option>
	 <option value="7">Curso de Verão - Realizado em Instituição de Ensino Superior./option>
	 <option value="8">Ouvinte</option>
	 <option value="9">Palestrante </option>
	 <option value="0">Nehum</option>

	</select>
	</div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Tipo de Calculo</label>
    <input type="text" name="tipocalculo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Horas por Atividade</label>
    <input type="text" name="horasatividade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  
  	</div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Limite</label>
    <input type="text" name="limite" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp ">

  </div>

	<div class="form-group">
  <fieldset class="infraFieldset">
        <legend class="infraLegend">Selecionar Documento (PDF)</legend>
        <label id="lblArquivo" for="txtArquivo" class="infraLabelObrigatorio">Documento:</label>
        <input type="file" id="pdf" name="pdf" value="" />
   </fieldset>
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
