<?php
include "bddconnect.php";

$competences = getCompetence();
$exps = getExp();
$autres = getAutre();
$formations = getFormation();
$loisirs = getLoisirs(); 




?>
<!DOCTYPE html>



<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <title> CV </title>
    </head>

    <body>
	
		
		<header>
			<div class="header-div">
				<div>
					<img src="img/Profil.png" class="left" />
					<h1> Ingénieur d'étude et de développement </h1>
					<ul>
						<li>BOUMESSAOUD Bachir</li>
						<li>Né le 26/01/1992</li>
						<li>14 Bis rue du télégraphe 75020 Paris</li>
						<li>06 58 13 25 55</li>
						<li>ba.bachir@hotmail.fr</li>
					</ul>
				</div>
			</div>
		
		</header>

		<article>
			<div class="container">
				<a href="#" class="linkSection" onclick="show('COMPETENCES','107px');return false;"> <div>  <div class="link-text"><img style="width: 41px;" src="img/plus.jpg" class="left"/> <p>COMPETENCES</p></div>     </div> </a>
				
					<div data-id="disable" class="section" id="COMPETENCES">
						<ul>
							<?php foreach ($competences as $competence): ?>
								<li>
								<?php echo $competence['contenu'];?>
								</li>

							<?php endforeach; ?>
						</ul>
					
					</div>
				
				
				<a href="#" class="linkSection" onclick="show('FORMATION','107px');return false;"> <div>  <div class="link-text"><img style="width: 41px;" src="img/plus.jpg" class="left"/> <p>FORMATION</p></div>     </div> </a>
				
					<div data-id="disable" class="section" id="FORMATION">
						<ul>
							<?php foreach ($formations as $formation): ?>
								<li>
								<?php echo $formation['contenu'];?>
								</li>

							<?php endforeach; ?>
						</ul>
					
					</div>				
				
				
				
				<a href="#" class="linkSection" onclick="show('EXPERIENCES','200px');return false;"> <div>  <div class="link-text" style="width: 342px !important;"><img style="width: 41px;" src="img/plus.jpg" class="left"/> <p>EXPERIENCES PROFESSIONNELLES</p></div>     </div> </a>
				
					<div data-id="disable" class="section" id="EXPERIENCES">
						<ul>
							<?php foreach ($exps as $exp): ?>
								<li>
								<?php echo $exp['contenu'];?>
								</li>

							<?php endforeach; ?>
						</ul>	
					
					</div>	
				
				<a href="#" class="linkSection" onclick="show('AUTRES','107px');return false;"> <div>  <div class="link-text"><img style="width: 41px;" src="img/plus.jpg" class="left"/> <p>AUTRES</p></div>     </div> </a>
				
					<div data-id="disable" class="section" id="AUTRES">
						<p style="margin:9px 0px;"> LANGUES:</p>
						<ul>
							<?php foreach ($autres as $autre): ?>
								<li>
								<?php echo $autre['contenu'];?>
								</li>

							<?php endforeach; ?>
						</ul>
					
					</div>					
				
				
				<a href="#" class="linkSection" onclick="show('LOISIRS','107px');return false;"> <div>  <div class="link-text"><img style="width: 41px;" src="img/plus.jpg" class="left"/> <p>LOISIRS</p></div>     </div> </a>
			
					<div data-id="disable" class="section" id="LOISIRS">
						<ul>
							<?php foreach ($loisirs as $loisir): ?>
								<li>
								<?php echo $loisir['contenu'];?>
								</li>

							<?php endforeach; ?>
							
						</ul>
					
					</div>	
			
			
			</div>
		
		
		</article>
		
	
	 <script src="cv.js"></script>  
    </body>
</html>