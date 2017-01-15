<?php
?>
<form action="#" method="post" id="register-societe-form" class="row">
		<input type="text" name="recherche_marque" value="" placeholder="Marque"><span class=""></span>
		<input class="btn" type="submit" name="sumbit" value="Rechercher la disponibilité">
	</div>
</form>

<?php
if (isset($_POST['recherche_marque'])){
	$source="https://euipo.europa.eu/eSearch/#basic/1+1+1+1/50+50+50+50/".$_POST['recherche_marque']
?>
	Résultats de la recherche pour la marque : <?php echo $_POST['recherche_marque']; ?>
	<iframe height=60% width=100% src="<?php echo $source;?>"></iframe>
	Si votre marque est disponible, continuons ensemble avec le <a href="depotinpi.php">dépot de votre marque à l'INPI</a>.
	
<?php
}

