<!--Aca va un pagina de bienvenida a la que se llega despues de loguearse correctamente-->
<?php 
  session_start();
 
  if (!isset($_SESSION['usuario'])) {
    header('Location: ./index.php');
  }  
  else{    
    include('./includes/header.php');
  }

 ?>
                    
<h1>Bienvenido <?php echo $_SESSION['usuario'] ?>!</h1> 

<?php include('./includes/footer.php'); ?>

