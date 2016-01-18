<?php
session_start();
include "bddconnect.php";
?>

<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title> Authentification </title>
    </head>

    <body>
    	<div class="container">
    	<form method="post" action="admin.php" id="form1">
		   <p>email</p>
		   <p><input type="text" name="email" /></p>
		   <p>mot de passe</p>
		   <p><input type="text" name="mdp" /></p>

		<button type="submit" form="form1" value="Submit">Connexion</button>
		</form>


		<?php if(isset($_POST["email"])): ?>

			<?php if(getAuth($_POST["email"],$_POST["mdp"])):?>

				<?php 

					$_SESSION['auth'] = "true"; 
					header('Location: ActionAdmin.php'); 

				?>
			<?php else:?>
				 <?php header('Location: admin.php');?> 
				 

			<?php endif; ?>
		<?php endif; ?>
		<div>

		</div>	
	</div>
	</body>



</html>	