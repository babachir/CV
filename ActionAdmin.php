<?php
session_start();

if(!isset($_SESSION['auth']))
{
	header('Location: admin.php');
}


?>
<html>
<head>
	<title></title>
</head>
<body style="width:900px;">


<br/>
<a href="AddCompetence.php">ajouter une competence</a>
<br/>
<a href="AddFormation.php">Ajouter une formation</a>
<br/>
<a href="AddExp.php">Ajouter une experience</a>
<br/>
<a href="AddAutre.php">Ajouter a autre</a>
<br/>
<a href="AddLoisir.php">Ajouter a loisir</a>
<br/>

<a href="DeleteCV.php">Supprimer tout CV</a>
<br/>

</body>
</html>



