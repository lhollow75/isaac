// console.log(document.getElementById('form-mail-connexion'));
// console.log(document.getElementById('form-nom-connexion'));
console.log(document.querySelectorAll("form"));
// console.log(document.getElementById('clickme'));

function remplir(){
	console.log('ici');
	chrome.storage.sync.get(['nom', 'mail','prenom','login'], function(items) {
		console.log(items['nom']);
		
		
		var inputs = document.getElementsByTagName('input');

		for(var i=0; i<inputs.length; i++){
			if(inputs[i].getAttribute('type')=='email'){
				inputs[i].value=items['mail'];
			}
			if(inputs[i].getAttribute('type')=='text'){
				if (inputs[i].name.indexOf('email')!=-1){
					inputs[i].value=items['mail'];
				} else if (inputs[i].name.toLowerCase().indexOf('firstname')!=-1){
					inputs[i].value=items['prenom'];
				}else if (inputs[i].name.toLowerCase().indexOf('login')!=-1 || inputs[i].name.toLowerCase().indexOf('username')!=-1){
					inputs[i].value=items['login'];
				}
				// inputs[i].value=items['mail'];
			}
		}
		// str.indexOf(valeurRecherchée[, indexDébut])
		document.getElementById('form-nom-connexion').value=items['nom'];
		// document.getElementById('form-mail-connexion').value=items['mail'];
		document.getElementById('form-prenom-connexion').value=items['prenom'];
	});
};

if (document.querySelectorAll("form").length!=0){
	console.log('un formulaire');
	chrome.storage.sync.get(['auto'], function(items) {
		if (items['auto']==1){
			remplir();
		}
	});
} else {
	console.log('pas de formulaire');
}


