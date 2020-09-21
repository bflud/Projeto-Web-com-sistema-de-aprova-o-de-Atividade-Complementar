<h1>Finalizar Atividade</h1>

<form action="index.php?controller=User&action=createAtividade" method="post">

 
   

	
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
	 <option value="15">Nehum</option>

	</select>
	</div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Tipo de Calculo</label>
    <input type="text" name="tipocalculo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  </div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Horas por Atividade</label>
    <input type="text" name="horasporatividade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

  
  	</div>
	 <div class="form-group">
    <label for="exampleInputEmail1">Limite</label>
    <input type="text" name="limite" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp ">

  </div>
  <fieldset class="infraFieldset">
        <legend class="infraLegend">Selecionar Documento (PDF)</legend>
        <label id="lblArquivo" for="txtArquivo" class="infraLabelObrigatorio">Documento:</label>
        <input type="file" id="pdf" name="pdf" value="" />
   
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
