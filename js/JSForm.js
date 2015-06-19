
		// wait for the DOM to be loaded 
		// $(document).ready(function() { 
			// bind 'myForm' and provide a simple callback function 
			// $('#myForm').ajaxForm(function() { 
				// alert("Thank you for your inscription!"); 
			// }); 
		// }); 
		$(document).ready(function() {
			// Lorsque je soumets le formulaire
			$('#myForm').on('submit', function(e) {
				e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
		 
				var $this = $(this); // L'objet jQuery du formulaire
		 
				// Je récupère les valeurs
				var userName = $('#userName').val();
				var userFirstname = $('#userFirstname').val();
				var userMail = $('#userMail').val();
				var userMailConfirm = $('#userMailConfirm').val();
				var userPass = $('#userPass').val();
				var userPassConfirm = $('#userPassConfirm').val();
				
				// Je vérifie une première fois pour ne pas lancer la requête HTTP
				// si je sais que mon PHP renverra une erreur
				if(userName === '' || userFirstname === '' || userMail === '' || userMailConfirm === '' || userPass === '' || userPassConfirm === '') {
					alert('Les champs doivent êtres remplis');
				} else {
					// Envoi de la requête HTTP en mode asynchrone
					$.ajax({
						url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
						type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
						data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
						success: function(html) { // Je récupère la réponse du fichier PHP
							alert(html); // J'affiche cette réponse
						}
					});
				}
			});
		});

	
	