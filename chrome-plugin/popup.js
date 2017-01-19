
function saluer(){ //gestion de la boite de dialogue
	if (!localStorage['compte']) {//le compte n'existe pas (première utilisation ou réinstallation)
		localStorage['compte']=1;
		alert('Merci d\'initialiser tes infos dans les options');
	} else { //le compte existe
		//console.log(document.getElementsByName('nom'));
		localStorage['compte']=parseInt(localStorage['compte'])+1;//on transforme la chaine de caractère en int, on incrémente, puis on stocke le nouveau nombre
		// alert('nom : '+localStorage['nom']+'\nCouleur :'+localStorage['couleur']);
		document.getElementsByName('nom').value=localStorage['nom'];
		
	}
}

// console.log(document.getElementsByName('nom')[0]);
window.addEventListener('load', saluer);

// document.getElementById('clickme').addEventListener('click', remplir);
		