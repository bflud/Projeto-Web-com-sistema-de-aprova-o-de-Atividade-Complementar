
<h1>Criar Usuario</h1>
<form action="index.php?controller=User&action=create" method="post">
 </div>
	<div class="form-group">
    <label for="exampleInputEmail1">Nome</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Rga</label>
    <input type="text" name="rga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  
  <div class="form-group">
	<label for="exampleInputEmail1">Tipo:</label>
    <select id="tipo" name = "tipo"class="form-control">
    <option value="aluno">Aluno</option>
     <option value="professor" >Professor</option>

	</select>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">


$('#tipo').on('change', function() {
  var tipo = $(this).find('option:selected').text().trim();
  if(tipo == 'Aluno') {
  	$('#siape').prop("disabled", true);
	$('#titulacao').prop("disabled", true);
  }
  
});

</script>

	<div class="form-group">
    <label for="exampleInputEmail1">Siape</label>
    <input type="text" name="siape" class="form-control" id="siape" aria-describedby="emailHelp" >  
  </select>
	
	<div class="form-group">
    <label for="exampleInputEmail1">Titulacao</label>
    <input type="text" name="titulacao" class="form-control" id="titulacao" aria-describedby="emailHelp">
 
  </div>
  <div class="form-group form-check">
  

  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
