<?php
  include_once("Conexao.php");
  $con = new Conexao();
  $pdo = $con->Connect();

  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>MiniCurso</title>
</head>
<body>

	<?php
    $stmt = $pdo->prepare("SELECT * FROM usuario" );
    $stmt->execute();
    $n = 0;
    if($stmt->rowCount() > 0)
    {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            $n++;
            ?>


          <img src="<?php echo $img ?>" >
          <label><?php echo $nome ?></label>
          <label><?php echo $descricao ?></label>
          
    
       <?php
        }
    }
    else
    {
        ?>

        <?php
    }

?>



</body>
</html>