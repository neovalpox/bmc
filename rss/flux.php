<?php
include("../php/connexion.php");
include("../php/loged.php");
$id = $_POST['id'];
$query2 = mysql_query("SELECT nom FROM rss WHERE id='$id'", $connexion);

$nom = mysql_result($query2,0,"nom");
?>
<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $nom; ?></b></font></td></tr>
    <tr>
        <td>
            <div style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;">
                <table width="100%" cellspacing="0">
<?php
$query = mysql_query("SELECT adresse FROM rss WHERE id='$id'", $connexion);

$adresse = mysql_result($query,0,"adresse");

$reponse["adresse"] = $adresse;

    $fichier = $adresse;
    // Ma propre fonction de traitement des balises ouvrantes
    function fonctionBaliseOuvrante($parseur, $nomBalise, $tableauAttributs)
    {
        // En fait... nous nous conteterons de mémoriser le nom de la balise
        // afin d'en tenir compte dans la fonction "fonctionTexte"

        global $derniereBaliseRencontree;

        $derniereBaliseRencontree = $nomBalise;
    }
   
    // Ma propre fonction de traitement des balises fermantes
    function fonctionBaliseFermante($parseur, $nomBalise)
    {
        global $derniereBaliseRencontree;
        global $titre;
        global $lien;
        global $description;

        switch ($nomBalise) {
            case "ITEM" :
                // nous quittons un bloc item
                // nous pouvons afficher le titre de l'article
                echo "<tr><td height='28'><a href=\"$lien\" target='_blank'>".$titre."</a></td></tr>";
                echo "<tr><td>$description</td></tr>";
                // et on oublie
                $titre = "";
                $lien = "";
                $description = "";
                break;
        }
        
        // On oublie la dernière balise rencontrée
        // et tout le reste
        $derniereBaliseRencontree = "";
    }

    // Ma propre fonction de traitement du texte
    // qui est appelée par le "parseur"
    function fonctionTexte($parseur, $texte)
    {
        global $derniereBaliseRencontree;
        global $titre;
        global $lien;
        global $description;
        
        // Nous n'affichons pas le texte ou lien directement
        // nous attendrons de rencontrer la balise fermante
        // et ainsi d'avoir tous les élements avant l'affichage.
        // ATTENTION: Par défaut les noms des balises sont
        //            mises en majuscules
        
        switch ($derniereBaliseRencontree) {
            case "TITLE": 
                $titre = $texte;
                break;
            case "LINK":
                $lien = $texte;
                break;
            case "DESCRIPTION":
                $description = $texte;
                break;
        }         
    }

    // Création du parseur XML
    $parseurXML = xml_parser_create();

    // Je précise le nom des fonctions à appeler
    // lorsque des balises ouvrantes ou fermantes sont rencontrées
    xml_set_element_handler($parseurXML, "fonctionBaliseOuvrante"
                                       , "fonctionBaliseFermante");

    // Je précise le nom de la fonction à appeler
    // lorsque du texte est rencontré
    xml_set_character_data_handler($parseurXML, "fonctionTexte");

    // Ouverture du fichier
    $fp = fopen($fichier, "r");
    if (!$fp) die("Impossible d'ouvrir le fichier XML");

    // Lecture ligne par ligne
    while ( $ligneXML = fgets($fp)) {
        // Analyse de la ligne
        // REM: feof($fp) retourne TRUE s'il s'agit de la dernière
        //      ligne du fichier.
        
        xml_parse($parseurXML, $ligneXML, feof($fp)) or
            die("Erreur XML");
    }
    
    xml_parser_free($parseurXML);
    fclose($fp);

    
//header('Content-Type: application/json');
//echo json_encode($reponse);
?>
                </table>
</div></td>
    </tr>
</table>