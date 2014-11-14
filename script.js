//----------------------------------------------------------------------------------------------------------
//- méthode permettant de gérer un cadran (heure + date)                                                   -
//- @param	id_cadran l'id du cadran                                                                   -
//-		time le temps du serveur                                                                   -
//-		appel le numéro d'appel (hasChildNodes() renvoie true sous FF et false sous IE ...)        -
//- @return rien                                                                                           -
//----------------------------------------------------------------------------------------------------------
function horloge(id_cadran, time, appel)
{
	// conversion en entier des variables time et appel; au premier appel ce sont des chaînes
	time = parseInt(time);
	appel = parseInt(appel);

	// on en fait une date
    	var d = new Date(time * 1000);

	// on récupère les différentes composantes
	var heure = d.getHours();
	var min = d.getMinutes();
	var sec = d.getSeconds();

	// gestion des 0 pour qu'il y ait toujours un chiffre de la forme xx
	if (heure < 10)
	{
		heure = "0" + heure;
	}
	if (min < 10)
	{
		min = "0" + min;
	}
	if (sec < 10)
	{
		sec="0"+sec;
	}

	// le jour (libellé)
	var day;

	switch (d.getDay())
	{
		case 1: day = "lundi";
		break;

		case 2: day = "mardi";
		break;

		case 3: day = "mercredi";
		break;

		case 4: day = "jeudi";
		break;

		case 5: day = "vendredi";
		break;

		case 6: day = "samedi";
		break;

		case 0: day = "dimanche";
		break;

		default: day = "erreur : " + d.getDay();
	}

	// le mois
	var mois;

	switch (d.getMonth())
	{
		case 0: mois = "janvier";
		break;

		case 1: mois = "fÃ©vrier";
		break;

		case 2: mois = "mars";
		break;

		case 3: mois = "avril";
		break;

		case 4: mois = "mai";
		break;

		case 5: mois = "juin";
		break;

		case 6: mois = "juillet";
		break;

		case 7: mois = "aoÃ»t";
		break;

		case 8: mois = "septembre";
		break;

		case 9: mois = "octobre";
		break;

		case 10: mois = "novembre";
		break;

		case 11: mois = "dÃ©cembre";
		break;

		default: mois = "erreur : " + d.getMonth();
	}

	var annee = d.getFullYear(); // l'année xxxx
	var jour = d.getDate(); // le jour (chiffre)

	// si elle n'existe pas on la crée
	if (appel == 1)
	{
		fieldset = document.createElement("fieldset");
		legend = document.createElement("legend");
		hr = document.createElement("hr");
		br = document.createElement("br");
		divCadran = document.createElement("div");
		texteLegend = document.createTextNode("Horloge");
		texteDate = document.createTextNode(day + " " + jour + " " + mois + " " + annee);
		texteHeure = document.createTextNode(heure + " h " + min + " min " + sec + " sec");

		divCadran.id = "divCadran";
		divCadran.style.marginLeft = "15px";

		// mise en forme du DOM
		divCadran.appendChild(texteDate);
		divCadran.appendChild(br);
		divCadran.appendChild(texteHeure);
		legend.appendChild(texteLegend);
		fieldset.appendChild(legend);
		fieldset.appendChild(hr);
		fieldset.appendChild(divCadran);

		document.getElementById(id_cadran).appendChild(fieldset);
	}
	else // sinon on met à jour la date et l'heure
	{
		document.getElementById("divCadran").childNodes.item(0).nodeValue = day + " " + jour + " " + mois + " " + annee;
		document.getElementById("divCadran").childNodes.item(2).nodeValue = heure + " h " + min + " min " + sec + " sec";
	}

	// temps unix + 1
	time = time + 1;

	// incrémentation de appel
	appel = appel + 1;

	// on rappelle la fonction aprés une seconde
	setTimeout("horloge('" + id_cadran + "', '" + time + "', '" + appel + "')",1000);
}
