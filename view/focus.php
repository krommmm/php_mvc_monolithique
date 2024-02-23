<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="./public/assets/css/index.css" />
	<title>Document</title>
	<script src="https://kit.fontawesome.com/65211b898e.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
</head>

<body>
	<header>
		<div class="header">
			<div class="center">
				<a href="home">
					<p>Accueil</p>
				</a>
				<a href="auth?action=login">
					<p>Connexion</p>
				</a>
				<p>Contact</p>
			</div>
		</div>
	</header>

	<section class="focus">
		<div class="focus_container">
			<div class="left">
				<div class="top">
					<div class="diapo">
						<div class="slide_container">
						<?php
							for ($i = 0; $i < 6; $i++) {
								if (isset($tableau_img[$i]) && !empty($tableau_img[$i])) {
									echo '
								<div class="slide">
								<img src="public/assets/pictures/lots/' . $tableau_img[$i] . '" alt="" />
								</div>';
								}
							}
							?>
						</div>
						<i class="carret fa-solid fa-angles-left"></i>
						<i class="carret fa-solid fa-angles-right"></i>
					</div>
				</div>

				<div class="bottom">
					<?php echo
						'
					
						<div class="bordure">
						
					 	<p>' . $lot['name'] . '</p> 
					 	<p class="prix">' . $lot['price'] . ' €
					 </div>
					<p>' . $lot['description'] . '</p> 
					<p>Surface : ' . $lot['surface'] . ' m²</p> 
					<p>Surface plancher : ' . $lot['surface_plancher'] . ' m²</p> 
				
				
				
					';
					?>
				</div>
			</div>


			<div class="right">
				<div class="top">
					<h2>Contactez moi </h2>
					<p>06-80-53-01-26</p>
				</div>
				<div class="bottom">

					<form class="form_mail" method="get" action="focus?action=email">
						<input type="hidden" name="action" value="email">
						<input type="hidden" name="id" value="<?php echo $lot['uuid']; ?>">
						<label>Nom:</label>
						<input type="text" name="name" placeholder="Ex: Dupont" />
						<label>Prénom:</label>
						<input type="text" name="prenom" placeholder="Ex: Martin" />
						<label>Email:</label>
						<input type="text" name="email" placeholder="Ex: martinD@gmail.fr" />
						<label>Message:</label>
						<textarea name="message" placeholder="Bonjour, je suis intéressé ..."></textarea>
						<button class="btn blue margin20" type="submit">Envoyer</button>
					</form>
					<?php
					if (isset($_GET['error']) && !empty($_GET['error'])) {
						echo '<p class="error">' . $_GET['message'] . '</p>';
					}
					if (isset($_GET['success']) && !empty($_GET['success'])) {
						echo '<p class="success">' . $_GET['message'] . '</p>';
					}
					?>

				</div>
			</div>
		</div>
		</div>

	</section>
	<?php
	include("footer.php");
	?>
	<script src="public/js/focus.js"></script>
	<script src="public/js/footer.js"></script>
</body>

</html>