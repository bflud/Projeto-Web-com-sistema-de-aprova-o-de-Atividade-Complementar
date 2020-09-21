<html>
<head>
<title>TESTE</title>
</head>
<body>
<?php 
if(isset($_POST)){
    echo 'tem post <br>';
    if(isset($_FILES)){
        echo var_dump($_FILES);
    }
}
?>
<form action ="text.php" enctype="multipart/form-data" method="POST">
<input type="file" name="teste">
<input type="submit">
</form>
</body>
</html>