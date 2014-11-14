    <?php header("content-type:image/png");  
      include("php/connexion.php");    
      $valide1 = mysql_query("SELECT  count(valide) FROM sauvegarde WHERE valide='1'", $connexion);
      $row1 = mysql_fetch_row($valid1);
      $valeur1 = $row1[0];
      
      $valide2 = mysql_query("SELECT  count(valide) FROM sauvegarde WHERE valide='0'", $connexion);
      $row2 = mysql_fetch_row($valid1);
      $valeur2 = $row1[0];
        // Script de creation de graphique dynamique en PHP  
                  
        // Taille de l'image  
        $image = @imagecreate (540, 220) ;   
          
        // Couleur de fond  
        $fond = ImageColorAllocate ($image, 208, 216, 213);    
          
        // Couleur des axes, des lignes et des legendes  
        $coul_axes = ImageColorAllocate ($image, 11, 62, 43);    
        $coul_lignes = ImageColorAllocate ($image, 227, 235, 232);    
        $coul_legendes = ImageColorAllocate ($image, 11, 62, 43);    
          
        // Couleur des barres du graphique   
        $coul_barre1 = ImageColorAllocate ($image, 42, 124, 94);    
        $coul_barre2 = ImageColorAllocate ($image, 0, 90, 94);    
              
         // Axe verticale et axe horizontale  
        imageline ($image, 30, 30, 30, 190, $coul_axes);   
        imageline ($image, 30, 190, 520, 190, $coul_axes);   
          
        // Création des polygone, ici un rectangle, d'ordonnes et d'abcisse  
        $tab_fleche_ord = array(30, 30, 26, 34, 34, 34);    
        imagefilledpolygon ($image, $tab_fleche_ord, 3, $coul_axes);    
          
        // Création d'un polygone, ici un rectangle, d'abscisse (en bas à droite)  
        $tab_fleche_abs = array(520, 190, 516, 186, 516, 194);    
        imagefilledpolygon ($image, $tab_fleche_abs, 3, $coul_axes);    
          
        // Legende de l'abscisse et de l'ordonnees  
        imagettftext($image,10,0,5,20,$coul_legendes,"arial.ttf","Pourcentage");  
        imagettftext($image,10,0,480,180,$coul_legendes,"arial.ttf","Elements");  
          
      
        // Trait blanc permettant une meilleur lisibilite des graphique  
        imageline ($image, 31, 155, 520, 155, $coul_lignes);  
        imageline ($image, 31, 120, 520, 120, $coul_lignes);  
        imageline ($image, 31, 85, 520, 85, $coul_lignes);  
        imageline ($image, 31, 50, 520, 50, $coul_lignes);  
          
        // L'axe des ordonnees, en haut à gauche, dispose d'une graduation de 0 à 20  
        imageline ($image, 26, 155, 30, 155, $coul_axes);  // 5  
        imageline ($image, 26, 120, 30, 120, $coul_axes);  // 10  
        imageline ($image, 26, 85, 30, 85, $coul_axes);  // 15  
        imageline ($image, 26, 50, 30, 50, $coul_axes);  // 20  
          
        // Legende des graduation de l'ordonnes, en haut à gauche  
        imagettftext($image,8,0,15,190,$coul_legendes,"arial.ttf","0");  
        imagettftext($image,8,0,9,157,$coul_legendes,"arial.ttf","25");  
      
        // Création de la barres graphique relative aux valeurs 1, 2, 3, 4 et 5  
        imagefilledrectangle ($image, 40, ((100-$valeur1)*1.4)+50, 110, 189, $coul_barre1);  
        imagefilledrectangle ($image, 120, ((100-$valeur2)*1.4)+50, 190, 189, $coul_barre2);  
          
            // Couleur BLANCHE indiquant la valeur de chaque barre  
        $coul_valeur = ImageColorAllocate ($image, 255, 255, 255);   
          
        // Legende de la valeur1  
        ImageTTFText ($image,10,0,65,180,$coul_valeur,"arial.ttf",$valeur1."%");  
          
        // Legende de la valeur2  
        ImageTTFText ($image,10,0,142,180,$coul_valeur,"arial.ttf",$valeur2."%");  

        // Création de l'image  
        imagePng ($image);  
    ?>  