        <link rel="stylesheet" href="jquery/css/dark-hive/jquery-ui-1.10.3.custom.min.css" />
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="jquery/js/jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript">
$(function() {
    $( "#phone" ).tabs();
});
</script>
<div id="phone">
    <div id="tabs">
      <ul>
        <li><a href="#tabs-1">Depuis le Mont-sur-Lausanne</a></li>
        <li><a href="#tabs-2">Depuis la Chaux-de-Fonds</a></li>
      </ul>

      <div id="tabs-1">
 <?php
        include("../php/loged.php");
         include("../php/connexion.php");
         $query = mysql_query("SELECT * FROM telephonesMont", $connexion);
         echo "<div style='overflow-y: scoll; height:800px'><table width='100%' cellpadding='0' style='font-size:12px;'>";
         echo "<tr style='font-weight:bold;' height='32'><td>Nom</td><td>Prénom</td><td>Interne</td><td>Mobile</td><td>Emplacement</td><td>Téléphone fixe</td><td>Téléphone mobile</td></tr>";
         $i = 0;
         while($data=  mysql_fetch_array($query)) {
             $nom = htmlentities($data['nom']);
             $prenom = htmlentities($data['prenom']);
             $interne = $data['interne'];
             $mobile = $data['mobile'];
             $emplacement = $data['emplacement'];
             $telephonefix = $data['telephonefix'];
             $telephonemobile = $data['telephonemobile'];
             echo "<tr height='26' id='$i' onMouseOver='overLigne(\"$i\");' onMouseOut='outLigne(\"$i\");'><td>$prenom</td><td>$nom</td><td><a href='#' onclick='launchCall(\"$ext3CX\",\"$interne\",\"$pin3CX\",\"$nom\");'><font color='#666666'>$interne</font></a></td><td><a href='#' onclick='launchCall(\"$ext3CX\",\"$mobile\",\"$pin3CX\",\"$nom\");'><font color='#666666'>$mobile</font></a></td><td>$emplacement</td><td><a href='#' onclick='launchCall(\"$ext3CX\",\"$telephonefix\",\"$pin3CX\",\"$nom\");'><font color='#666666'>$telephonefix</font></a></td><td><a href='#' onclick='launchCall(\"$ext3CX\",\"$telephonemobile\",\"$pin3CX\",\"$nom\");'><font color='#666666'>$telephonemobile</font></a></td></tr>";
             $i++;
         }
         echo "</table></div>";
         ?>
      </div>

      <div id="tabs-2">
        
      </div>
    </div>
</div>
<script type="text/javascript">
    function overLigne(id) {
        $("#"+id).css({
            "background" : "-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,197,120,1)), color-stop(100%,rgba(251,157,35,1)))",
            "font-weight" : ""
        });
    }
    function outLigne(id) {
        $("#"+id).css({
            "background" : "",
            "font-weight" : ""
        });
    }
    
    function launchCall(ext,phone,pin,nom) {
        window.localStorage.setItem("ext", ext);
        window.localStorage.setItem("phone", phone);
        window.localStorage.setItem("pin3cx", pin);
        window.localStorage.setItem("nomPhone", nom);
        affiche("callBox");
    }
</script>