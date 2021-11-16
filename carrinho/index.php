<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> CyberDesk - Venda de Produtos</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/estilo.css">
</head>
 
<body>
<?php
session_start();
      require("conexao.php");
       
      $sql = "SELECT * FROM produtos";
    
	  $query = $mysqli->query($sql);

      while($ln =mysqli_fetch_array($query)){
         echo '<h2>'.$ln['nome'].'</h2> <br />';
         echo '<h3>Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'</h3> <br />';
         echo '<img src="http://127.0.0.1/cyberdesk/carrinho/'.$ln['imagem'].'" /> <br />';
         echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'"><h6>Confirmar Compra</h6></a>';
         echo '<br /><hr />';
      }
?>
</body>
 
</html>

