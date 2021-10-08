<?php
	session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: ./inicio.php');
	}
	include('includes/header.php'); 
?>
		
	<span class="texto"> Esta es la primer entrega del Trabajo Practico 1 - 2021</span>

<?php
	include('includes/footer.php');
?>
