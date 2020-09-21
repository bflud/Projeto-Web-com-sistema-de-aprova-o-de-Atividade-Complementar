<html>
<head>
<title>TESTE</title>
</head>
<body>
<?php 
if(isset($_POST)){
    echo "Post chegou aqui";
    echo "<br>";
    if(isset($_FILES)){
        echo "Tem arquivo chegou aqui";
        echo "<br>";
        echo var_dump($_FILES);
    }
}
?>
<form action ="" method="POST">
<input type="file" name="teste">
<input type="submit">
</form>
</body>
</html>