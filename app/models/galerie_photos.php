<?php include '../views/parts/header.php' ?>	
<?php include '../views/parts/sidebar.php' ?>
<link href="../../public/asset/css/sidebar2.css" rel="stylesheet">	
	<div class="content">

		<div id="sidebar"></div>

		<h2>Galerie photos</h2>


		
				<?php 
					while ($donnees = $imgGalerie->fetch())
						{
					// Je ferme php pour pouvoir mettre de l'html
					 ?>
					 <div class="photo">
						<a href=""><img src="../../public/asset/images/<?php echo $donnees['photo_url']; ?>" alt=""></a>
						<div class="titre_photo"><?php echo $donnees['photo_title']; ?> </div>
						<div><?php echo $donnees['photo_download']; ?> téléchargement(s)</div>
					</div>




				<?php
					}
					$imgGalerie->closeCursor(); // Termine le traitement de la requête
					?>
			
			 	


		<div class="suite"><a href="">Précédent</a> l <a href="">Suivant</a></div>
		
	</div>

<?php include '../views/parts/footer.php' ?>