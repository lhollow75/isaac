document.getElementById("ok").style.display = 'none';

function restaurerLesOptions()//resélectionner les options déja choisies
{
	chrome.storage.sync.get(['login'], function(items) {
		console.log('login :'+items['login']);
		if (items['login']!='' || items['login']!=undefined){
			document.getElementById('login').value=items['login'];
		}
		
	});
	
	chrome.storage.sync.get(['nom'], function(items) {
		console.log('nom :'+items['nom']);
		if (items['nom']!=''){
			document.getElementById('nom').value=items['nom'];
		}
	});
	
	chrome.storage.sync.get(['prenom'], function(items) {
		console.log('prenom :'+items['prenom']);
		if (items['prenom']!=''){
			document.getElementById('prenom').value=items['prenom'];
		}
		
	});
	
	chrome.storage.sync.get(['nom-societe'], function(items) {
		console.log('nom-societe :'+items['nom-societe']);
		if (items['nom-societe']!=''){
			document.getElementById('nom-societe').value=items['nom-societe'];
		}
		
	});
	
	chrome.storage.sync.get(['form-juridique'], function(items) {
		console.log('forme juridique :'+items['form-juridique']);
		if (items['form_juridique']!=''){
			var forme = items['form_juridique'];//sélection de la liste déroulante des formes juridiques
			if (!forme){
				return;
			}
			var juridique = document.getElementById('form-juridique').getElementsByTagName('option');
			for (var i = 0; i < juridique.length; i++)
			{
				if (juridique[i].value == forme)
				{
					juridique[i].selected = "true";
					break;
				}
			}
		}
		
	});
	
	
	
	chrome.storage.sync.get(['email-societe'], function(items) {
		console.log('email-societe :'+items['email-societe']);
		if (items['email-societe']!='' || items['email-societe']!=undefined){
			document.getElementById('email-societe').value=items['email-societe'];
		}
		
	});
	
	chrome.storage.sync.get(['siret'], function(items) {
		console.log('siret :'+items['siret']);
		if (items['siret']!=''){
			document.getElementById('siret').value=items['siret'];
		}
		
	});
	
	chrome.storage.sync.get(['telephone'], function(items) {
		console.log('telephone :'+items['telephone']);
		if (items['telephone']!=''){
			document.getElementById('telephone').value=items['telephone'];
		} 
		
	});
	
	
	
	chrome.storage.sync.get(['auto'], function(items) {
		console.log('check :'+items['auto']);
		if (items['auto']==1){
			// document.getElementById('nom').value=items['nom'];
			document.getElementById("auto").checked = true;
		} else {
			document.getElementById("auto").checked = false;
		}
		
	});
	
	// if (nom!='undefined'){
		// nom=localStorage['nom'];//remplissage du champs de nom
		// chrome.storage.sync.get(['nom'], function(items) {
			// console.log(items['nom']);
			// document.getElementById('nom').value=items['nom'];
		// });
	// }
	// if (prenom!='undefined'){
		// prenom=localStorage['prenom'];//remplissage du champs de prenom
		// chrome.storage.sync.get(['prenom'], function(items) {
			// console.log(items['prenom']);
			// document.getElementById('prenom').value=items['prenom'];
		// });
	// }
	// if (mail!='undefined'){
		// mail=localStorage['mail'];//remplissage du champs de mail
		// chrome.storage.sync.get(['mail'], function(items) {
			// console.log(items['mail']);
			// document.getElementById('mail').value=items['mail'];
		// });
	// }
	// if (auto!='auto'){
		// mail=localStorage['auto'];//check du remplissage automatique
		// chrome.storage.sync.get(['auto'], function(items) {
			// console.log(items['auto']);
			// document.getElementById('auto').value=items['auto'];
		// });
	// }
	
	
	
	// var couleur = localStorage['couleur'];//sélection de la liste déroulante de couleur (un peu plus dur)
	// if (!couleur){
		// return;
	// }
	// var choix = document.getElementById('couleur').getElementsByTagName('option');
	// for (var i = 0; i < choix.length; i++)
	// {
		// if (choix[i].value == couleur)
		// {
			// choix[i].selected = "true";
			// break;
		// }
	// }
}

function enregistrer()//enregistrer les options, fonction appelée par le click sur le bouton
{
	console.log('enregistrer');
	console.log(document.getElementById('forme-juridique').getElementsByTagName('option').selected);
	// localStorage['nom']=document.getElementById('nom').value;
	// localStorage['couleur']=document.getElementById('couleur').value;
	
	if (document.getElementById('auto').checked==true) {
		auto=1;
	} else {
		auto=0;
	}
	
	
	
	chrome.storage.sync.set({
		'login': document.getElementById('login').value,
		'nom': document.getElementById('nom').value, 
		'prenom': document.getElementById('prenom').value, 
		'nom-societe': document.getElementById('nom-societe').value, 
		'forme-juridique': document.getElementById('forme-juridique').value, 
		'email-societe': document.getElementById('email-societe').value, 
		'siret': document.getElementById('siret').value, 
		'telephone': document.getElementById('telephone').value,
		'auto': auto
	}, function() {
		console.log('Settings saved');
		document.getElementById("ok").style.display = 'block';
	});
}

window.addEventListener('load', restaurerLesOptions);
document.getElementById('enregistrer').addEventListener('click', enregistrer);