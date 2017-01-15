<?php
require('../functionBdd.php');
$tab = recupTable($mysql, 'type_societes');
?>
<div class="wrapper" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page_titre">AJOUTER UNE SOCIETE</h1>
				<hr>
			</div>
			<form action="registersociete.php" method="post" id="register-societe-form" class="row">
				<div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<input type="text" name="nom" value="" placeholder="Nom de la société" required><span class="">*</span>
					<select name="formeJuridique" class="">
						<option value="">Forme Juridique</option>
						<?php		
						foreach ($tab as $key => $value) {
							?>
							<option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
							<?php
						}
						?>
					</select>
					<input type="email" name="email" value="" placeholder="Email de la societe"><span class=""></span>
					<input type="number" name="siret" value="" placeholder="Siret"><span class=""></span>
					<input type="tel" name="tel" value="" placeholder="Téléphone de contact"><span class=""></span>
					<input type="text" name="adresse" value="" placeholder="Adresse de l'entreprise"><span class=""></span>
					<input type="number" name="cp" value="" placeholder="Code Postal"><span class=""></span>
					<input type="text" name="ville" value="" placeholder="Ville"><span class=""></span>
					<input type="text" name="pays" value="" placeholder="Pays"><span class=""></span>
					<input type="text" name="description_marque" value="" placeholder="Description de votre marque"><span class=""></span>
					<input class="btn" type="submit" name="sumbit" value="Ajouter l'entreprise">
				</div>
			</form>
		</div>
	</div>
</div>