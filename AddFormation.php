<?php
session_start();
include "bddconnect.php";
if(!isset($_SESSION['auth']))
{
	header('Location: admin.php');
}
?>

<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title> </title>
    </head>

    <body>
    	<div class="container">
    	<form method="post" action="AddFormation.php" id="form1">

		   <p>formation</p>
		   <p><input type="text" name="formation" /></p>

		<button type="submit" form="form1" value="Submit">Ajouter</button>
		</form>


		<?php if(isset($_POST["formation"])): ?>

			<?php 

			createFormation($_POST["formation"]);
			header('Location: AddFormation.php');

			?>	 
				 
		
		<?php endif; ?>
		<div>

		</div>	
	</div>
	</body>



</html>	