<?php
	include_once('conec.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, assunto, mensagem, created) VALUES ('$nome', '$email', '$assunto', '$mensagem', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>