function isset ()
{

  var a = arguments,
    l = a.length,
    i = 0,
    undef;

  if (l === 0)
  {
    throw new Error('Empty isset');
  }

  while (i !== l)
  {
    if (a[i] === undef || a[i] === null)
    {
      return false;
    }
    i++;
  }
  return true;
}


// on récupere la date toutes les 5 secondes pour l'afficher dans la div #heure dans la nav
$(function(){

	date = new Date();

	h = date.getHours();
    if(h<10)
    {
            h = "0"+h;
    }
    m = date.getMinutes();
    if(m<10)
    {
            m = "0"+m;
    }

    resultat = h+':'+m;

    $('nav #heure p').html(resultat);

	setInterval(function() {

		date = new Date();

		h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }

        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }

        resultat = h+':'+m;

        $('nav #heure p').html(resultat);

	}, 1000);


	setInterval(function() {

		$('#edt').html('<h1>Prochains cours</h1><div class="slider_edt"><ul></ul></div>');

		// On récupere l'emploi du temps en json et on l'affiche en fonction de l'heure actuelle, à intervalle régulier // pour prendre en compte les modifications
		$.getJSON("{{ asset('bundles/mmitvfront/js/edt.js')}}")
			.done(function(json) {
				console.log("JSON Edt OK");

				var i=1;

				var creneau = '1';

				// On récupere la date pour calculer le creneau dans lequel on est

				date = new Date();

				h = date.getHours();
		        if(h<10)
		        {
		                h = "0"+h;
		        }

		        m = date.getMinutes();
		        if(m<10)
		        {
		                m = "0"+m;
		        }

		        // On calcule le créneau en cours
		        if(h>=7 && h<9){
		        	creneau= '1';
		        }

		        else if(h>=9 && h<10){
		        	creneau= '4';
		        }

		        else if(h>=10 && h<12){
		        	creneau= '7';
		        }

		        else if(h>=12 && h<15){
		        	creneau= '13';
		        }

		        else if(h>=15 && h<16){
		        	creneau= '16';
		        }

		        else if(h>=16 && h<18){
		        	creneau= '19';
		        }

		        else if(h>=18 && h<19){
		        	creneau= '22';
		        }

		        else{
		        	creneau = '1';
		        }
		        //


		        // On vérifie si il faut afficher ou non l'emploi du temps (5 minutes avant le cours et 5mn apres)

		        // Si il est 55 ou 25, on affiche l'EDT
		        if(h==7 || h==10 || h==13 || h==16 && m==54){
		        	$('nav').attr('class', 'nav-open');
		        }

		        // Si il est 55 ou 25, on affiche l'EDT
		        if(h==9 || h==12 || h==15 || h==18 && m==24){
		        	$('nav').attr('class', 'nav-open');
		        }

				if(h==8 || h==11 || h==14 || h==17 && m==04){
		        	$('nav').removeClass('nav-open');
		        }

		        if(h==9 || h==12 || h==15 || h==18 && m==34){
		        	$('nav').removeClass('nav-open');
		        }


				for(var promo in json){

					var edt = json[promo][creneau];

					console.log(edt);

					// on vérifie que la promo a bien cours dans ce créneau par sécurité
					if(isset(edt)){

						$('#edt .slider_edt>ul').append("<li><h2>"+promo+"</h2><ul></ul></li>");

						for(var groupe in json[promo][creneau]){

							var cours = json[promo][creneau][groupe];

							$('#edt .slider_edt>ul>li:nth-child('+i+')>ul').append("<li><p>Groupe "+groupe+" | "+cours.matiere+" en "+cours.salle+"</p></li>");
						}
						i++;
					}


				}

				// Après l'appel JSON on initialise le slider de l'edt
				$('.slider_edt').unslider({
					speed: 400, //temps de transition du slider (O = aucun effet de sliding)
					delay: 10000, //changer ici le temps de changement entre chaque tweets
					complete: function() {},
					keys: false,
					dots: false,
					fluid: false
				});

			})
			.fail(function(jqxhr, textStatus, error) {
			    var err = textStatus + ", " + error;
			    console.log( "JSON Edt Failed " + err );
			    $('.slider_edt').html('Erreur d\'affichage de l\'emploi du temps');
		});

	}, 41600);


	// Slider des tweets (bandeau inférieur)
	$('.slider_tweets').unslider({
		speed: 0, //temps de transition du slider (O = aucun effet de sliding)
		delay: 8000, //changer ici le temps de changement entre chaque tweets
		complete: function() {},
		keys: false,
		dots: false,
		fluid: false
	});
});

