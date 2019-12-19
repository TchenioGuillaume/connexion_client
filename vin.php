<?php
	session_start();
	include 'header.php';
?>


	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Vins populaires</h2>
					<!-- <p>Le vin rend heureux.</p> -->
				</div>
			</div>
			<div class="row">

				<form action='panier.php' method='post'>
					<input type='hidden' name='produit' value='Hermon'>
						<div class='col-lg-4 col-md-4 col-sm-6'>
							<a href='images/hermon.jpg' class='fh5co-card-item image-popup'>
								<figure>
									<div class='overlay'><i class='ti-plus'></i></div>
									<img src='images/hermon.jpg' alt='Image' class='img-responsive'>
								</figure>
								<div class='fh5co-text'>
									<h2 name='nom'>Hermon</h2>
									<p>Produit originaire du plateau du Golan </p>
									<p><span class='price cursive-font' name='prix'>9,50 €</span></p>
									<input type='hidden' name='prix' value='9,50'>
								</div>
							</a>
						</div>
						<input type='submit' name='' value='Ajouter au panier'>
				</form>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/hermon indigo.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/hermon indigo.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Hermon Indigo</h2>
							<p>Arômes de fruits luxuriants et mûrs</p>
							<p><span class="price cursive-font">9,50 €</span></p>
							<input type="button" name="" value="Ajouter au panier">
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/gamla.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/gamla.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Gamla</h2>
							<p>Arômes chaleureux de groseille de cerise.</p>
							<p><span class="price cursive-font">14,90 €</span></p>
							<input type="button" name="" value="Ajouter au panier">
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/moscato les floreales - bleu.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/moscato les floreales - bleu.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Moscato les Floréales </h2>
							<p>Moscato d'Italie fruitée au léger goût de pêche</p>
							<p><span class="price cursive-font">6,50 €</span></p>
							<input type="button" name="" value="Ajouter au panier">
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/moscato les floreales - rosé.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/moscato les floreales - rose.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Moscato Rosé Les Floréales </h2>
							<p>Ses arômes sont intenses</p>
							<p><span class="price cursive-font">6,70 €</span></p>
							<input type="button" name="" value="Ajouter au panier">
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/Côtes-du-Rhône - Frédéric Daniel.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/Cotes-du-Rhone.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Côtes-du-Rhône </h2>
							<p>Frédéric Daniel</p>
							<p><span class="price cursive-font">6,99 €</span></p>
							<input type="button" name="" value="Ajouter au panier">
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>


	<?php
		include 'footer.php';
	?>
