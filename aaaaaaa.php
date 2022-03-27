
<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);
$estado = addslashes($_POST['estado']);
$option = addslashes($_POST['opicao']);

?>
<head>
	<title>Formulario</title>
  <style type="text/css" charset: UTF-8>
    .fundo{
  background-image: linear-gradient(45deg,black, yellow);
  height: 100vh;
}
    .content{
      display:flex;
      justify-content: center;
       }
    
    
    .form{
      display: flex;
      flex-direction: column;
     
    }
    
  </style>
</head>
<body>
	<div class="fundo">
		<section class="content">
			<form class="form">
	<h3 class="content"> <?php echo 'Nome: ' . $nome; ?> </h3>
	<h3 class="content"> <?php echo 'Email: ' . $email; ?> </h3>
	<h3 class="content"> <?php echo 'Escolha: ' . $option; ?> </h3>
	<h3 class="content"> <?php echo 'Opnião: ' . $mensagem; ?> </h3>
	<h3 class="content"> <?php echo 'Estado: ' . $estado; ?> </h3>
			</form>
		</section>
	</div>
</body>