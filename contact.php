
	<?php
		include 'header.php';
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title></title>
		</head>
		<body>
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6 animate-box">
							<h3>Entrer En Contact</h3>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="name">Name</label>
										<input type="text" id="name" class="form-control" placeholder="Votre nom">
									</div>

								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="email">Email</label>
<?php
	//Fonction PHP pour controler une adresse Mail
	function validateMail($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
?>
										<input type="email" id="email" class="form-control" placeholder="Votre email">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="sr-only" for="message">Message</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ecrivez-nous quelque chose"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Envoyer le message" class="btn btn-primary">
								</div>

							</form>
						</div>
						<div class="col-md-5 col-md-push-1 animate-box">

							<div class="gtco-contact-info">
								<h3>Contact Information</h3>
								<ul>
									<li class="address"><a href="https://www.google.fr/maps/place/166+Rue+Cuvier,+69006+Lyon/@45.7675477,4.8528174,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4ea8b88bda6ed:0x453ebf36fc76c1d9!8m2!3d45.7675477!4d4.8550061" target="_blank"> 166 Rue Cuvier, <br> 69006 Lyon</li>
									<li class="phone"><a href="tel://1234567920">+ 33 4 81 11 64 81</a></li>
									<li class="email"><a href="mailto:info@yoursite.com"></a>   </li>
									<li class="url"><a href="https://www.facebook.com/Delisdad" target="_blank">Facebook</a></li>
								</ul>
							</div>


						</div>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>
	<?php
		include 'footer.php';
	?>
