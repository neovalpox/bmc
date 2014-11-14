<?php
$host="localhost";
$user="aruba";
$pass="ytadS6fELUEexRAf";
$db="aruba";

$connexion = mysql_connect($host, $user, $pass) or die("Pas de connexion au serveur");
mysql_select_db($db, $connexion) or die(mysql_error());

$query = mysql_query("SELECT * FROM configuration", $connexion);

$nomSociete = mysql_result($query,0,"nomSociete");
$couleurFond = mysql_result($query,0,"couleurFond");
$passe = mysql_result($query,0,"passe");
$superPasse = mysql_result($query,0,"superPasse");
?>
<script type="text/javascript" src="js/jquery.js"></script>
<div style="width:100%; height:100%;position:absolute; left:0px; top:0px;">

<div id="center" style="position:absolute;top:50%; left:50%;">

<div id="conteneur" style="position:absolute; width:680px; height:400px; border: 3px solid #999999; box-shadow: 8px 8px 12px #999999; left:-340px; top:-200px;background-color:#FFFFFF;">

<div style="position:absolute; top:-40px; left: -40px; border: 2px solid #999999; box-shadow: 8px 8px 12px #999999; background-color:#FFFFFF;">
<table>
<tr><td><img src="images/logo.png"></td><td><div style="margin:15px;"> <h3>Administration de<br>réseau wifi invité</h3></div></td></tr>
</table>
</div>

<div id="config" style="margin:15px;">
<table style="margin-top : 80px;">
<tr><td>Nom de société :</td><td><input type="text" value="<?php echo $nomSociete; ?>" id="societe" style="text-align:center;"></td></tr>
<!--<tr><td>Mot de passe invité :</td><td><input type="text" value="<?php echo $passe; ?>" id="passe" style="text-align:center;"></td></tr>-->
<tr><td colspan="2" align="right"><input type="submit" value="Enregistrer" id="btnSave" onclick="updateBDD();"></td></tr>

</table>
</div>
    <div style="position: absolute; left:10px; bottom: 10px;"><a href="javascript:addUser();"><img src="images/add.png" align="absmiddle">Ajouter un utilisateur</a></div>
<div id="utilisateurs" style="position:absolute; right: 10px; top: 10px; height:380px; width:320px; overflow-y: scroll">
</div>
    
<div id="addUser" style="position:absolute; left: 170px; top: 70px; height:250px; width:320px; display:none; background-color:  #FFFFFF; border: 3px solid #999999; box-shadow: 8px 8px 12px #999999; ">
    <img src="images/deleteBig.png" onclick="closeAddUser();" style="position: absolute; right:-10px; top:-10px;">
    <div style="margin:15px;">
        <center><h3>Ajouter un utilisateur</h3></center>
        <table width="100%" align="center" id="formAddUser">
            <tr>
                <td>
                    Prénom :
                </td>
                <td>
                    <input type="text" id="prenom">
                </td>
            </tr>
            <tr>
                <td>
                    Nom :
                </td>
                <td>
                    <input type="text" id="nom">
                </td>
            </tr>
            
            <tr>
                <td>
                    Société :
                </td>
                <td>
                    <input type="text" id="societeUser">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="button" value="ajouter et générer un mot de passe" id="generation" onclick="generation();">
                </td>
            </tr>
        </table>
        <div id="waitGeneration" style="display: none;"></div>
        <div id="generatedPass" style="display: none;"></div>
    </div>
</div>

<div id="footer" style="position:absolute; width:100%; text-align:center; bottom:-20px;">Administration BMC SSI SA | <a href="http://www.bmc.ch">www.bmc.ch</a></div>

</div>

</div>

</div>
<style>
body {
	font-family:"Verdana";
	font-size:10;
	background-color: #CACACA;
}
td {
	font-size:11;
}
</style>

<script type="text/javascript">
    $("#waitGeneration").load("loader.php");
    $("#utilisateurs").load("userList.php");
    
    function addUser() {
        $("#addUser").fadeIn(150);
    }
    
    function refreshUser() {
        $("#loaderUser").show();
        $("#utilisateurs").load("userList.php");
    }
    
    function updateBDD() {
        societe = $("#societe").val();
//        passe = $("#passe").val();
        $.post("updateConfig.php", {societe: societe}, function(msg){
                if(msg.error == 0) {
                        alert("Modification enregistrée");
                }
        });
    }
    
    function generation() {
        nom = $("#nom").val();
        prenom = $("#prenom").val();
        societe = $("#societeUser").val();
        $("#generation").attr('disabled','disabled');
        $("#waitGeneration").show();
        $.post("createUser.php", {nom: nom, prenom: prenom, societe: societe}, function(data) {
            if(data.error == 0) {
                id = data.id;
                $("#generatedPass").html("<center><br>Le nom d'utilisateur est : <h2>"+data.username+"</h2><br>Le mot de passe est : <h2>"+ data.passe+"</h2><br><br><input type='button' value='Imprimer' onclick='affichePrint("+id+");'> <input type='button' value='fermer' onclick='closeAddUser();'></center>");
                $("#formAddUser").hide();
                $("#waitGeneration").hide();
                $("#generatedPass").show();
                $("#utilisateurs").load("userList.php");
            } else {
                alert("Une erreur lors de la génération du mot de passe est survenue, prière de contacter administrateur.");
            }
        });
    }
    
    function closeAddUser() {
        $("#addUser").fadeOut(200, function() {
            $("#generation").removeAttr('disabled');
            $("#societeUser").val("")
            $("#prenom").val("");
            $("#nom").val("");
            $("#formAddUser").show();
            $("#generatedPass").hide();
            $("#utilisateurs").load("userList.php");    
        });
        
    }
    
    function deleteUser(id) {
        if(confirm("Voulez-vous supprimer cet utilisateur ?")) {
            $.post("deleteUser.php", {id: id}, function(data) {
                if(data.error == 0) {
                    $("#utilisateurs").load("userList.php");
                } else {
                    alert("Une erreur est survenue lors de la suppression de l'utilisateur.");
                }
            });
        }
    }
    
    function affichePrint(id) {
        window.open ('affichePrint.php?id='+id, 'Contrôle Serveur', config='height=900, width=820, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
    }
</script>