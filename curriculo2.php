<?php

$nome = addslashes($_POST['name']);
$bairro = addslashes($_POST['bairro']);
$cidade = addslashes($_POST['cidade']);
$email = addslashes($_POST['email']);
$tele = addslashes($_POST['telefone']);
$nasc = addslashes($_POST['nascimento']);
$mensagem = addslashes($_POST['message']);
$estado = addslashes($_POST['estado']);
$curso = addslashes($_POST['curso']);
$inst = addslashes($_POST['instituicao']);
$data = addslashes($_POST['data']);

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
  <h3 class="content"> <?php echo 'Bairro: ' . $bairro; ?> </h3>
  <h3 class="content"> <?php echo 'Cidade: ' . $cidade; ?> </h3>
	<h3 class="content"> <?php echo 'Email: ' . $email; ?> </h3>
	<h3 class="content"> <?php echo 'Telefone: ' . $tele; ?> </h3>
  <h3 class="content"> <?php echo 'Data de Nascimento: ' . $nascimento; ?> </h3>
  <h3 class="content"> <?php echo 'Estado Civil: ' . $estado; ?> </h3>
	<h3 class="content"> <?php echo 'Objetivo: ' . $mensagem; ?> </h3>
	<h3 class="content"> <?php echo 'Instituição: ' . $inst; ?> </h3>
  <h3 class="content"> <?php echo 'Conclusão: ' . $data; ?> </h3>
			</form>
		</section>
	</div>
</body>