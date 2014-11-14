<script type="text/javascript">

        $("#graphique").fadeOut(500);
        $("#graphique2").fadeOut(500, function() {
                $("#calcule").fadeIn(500);
        });
 
    
    </script>
    <form name="maintenanceFrom" method="POST" action="javascript:sendForm();">
    <table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Maintenance informatique</b></font></td></tr>
    <tr>
        <td>
            <div style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;">
            Client : <input name="client" type="text" id="client"> Date : <input name="date" id="date" type="hidden" style="text-align:center" value="<?php echo date("d M Y"); ?>"><?php echo date("d M Y   "); ?> </div>
            <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Nombre de serveur</b></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td height="35">
                        <div class="margin"><i>Configuration détaillée l'étape suivante</i></div>
                    </td>
                    <td width="200">
                        Qte.
                    </td>
                    <td>
                        Prix mensuel
                    </td>
                </tr>
                <tr bgcolor="#ECECE2" height="5">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
        
                <tr bgcolor="#ECECE2">
                    <td>
                        <div class="margin">Serveur physique ou virtual serveur Windows<br>
Inclus monitoring des serveurs (services Windows) <br>
Inclus monitoring appareils réseau (firewall, switchs, routeur) <br>
Inclus contrôle de la sécurité (virus, trojan, etc.) <br>
Inclus mise à jour de sécurité Microsoft <br>
Délais d'intervention et réaction</div>
                    </td>
                    <td>
                        <input type="text" name="nbServeur" length="3" size="3" value="1" style="text-align:center;" id="nbServeur">
                    </td>
                    <td>
                    </td>
                </tr>
          
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#ECEDED" colspan="3">
                    </td>
                </tr>
            </table>
            
            
            <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Nombre de serveur</b></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td>
                        
                    </td>
                    <td height="35">
                        <div class="margin"><i>Support et maintenance proactive</i></div>
                    </td>

                    <td>
                        Prix mensuel
                    </td>
                </tr>
                <tr bgcolor="#ECECE2" height="5">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <label>
                <tr bgcolor="#ECECE2">
                    <td>
                        <input type="radio" name="support" valude="support1" checked onclick="selectSupport('1')">
                    </td>
                    <td>
                        <div class="margin">
                            <b>Support général & 2 visites annuelles planifiées</b><br>
Maintenance proactive (présence sur site garantie) : 2 visites de 1-2 heures /an<br>
Maintenance serveur proactive (télésupport) : inclus<br>
Assistance téléphonique serveur de 1er et 2ème niveau<br>
Crédit de 5 heures /an de support hors maintenance<br>
Revue des infrastructures: tous les 2 ans<br>
Tarif horaire spécial pour les prestations hors contrat: 175.-/h</div>
                    </td>
                    <td>
                        CHF 170.00
                    </td>
                </tr>
                </label>
                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <label>
                <tr bgcolor="#ECECE2">
                    <td>
<input type="radio" name="support" value="support2" onclick="selectSupport('2')">
                    </td>
                    <td>
                        <div class="margin">
                            <b>Support général & visites trimestrielles planifiées </b><br>
Maintenance proactive (présense sur site garantie) : 4 visites de 1-2 heures /an<br>
Maintenance serveur proactive (télésupport) : inclus<br>
Assistance téléphonique serveur de 1er et 2ème niveau<br>
Crédit de 5 heures /an de support hors maintenance<br>
Revue des infrastructures: 1x/an<br>
Tarif horaire spécial pour les prestations hors contrat: 175.-/h</div>
                    </td>
                    <td>
                        CHF 250.00
                    </td>
                </tr>
                </label>

                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <label>
                <tr bgcolor="#ECECE2">
                    <td>
                       <input type="radio" name="support" value="support3" onclick="selectSupport('3')">
                    </td>
                    <td>
                        <div class="margin">
                            <b>Support général & visites planifiées tous les 2 mois </b><br>
Maintenance proactive (présence sur site garantie) : 6 visites de 1-2 heures /an<br>
Maintenance serveur proactive (télésupport) : inclus<br>
Assistance téléphonique serveur de 1er et 2ème niveau<br>
Crédit de 10 heures /an de support hors maintenance<br>
Revue des infrastructures: 1x/an<br>
Tarif horaire spécial pour les prestations hors contrat: 175.-/h</div>
                    </td>
                    <td>
                        CHF 450.00
                    </td>
                </tr>
                </label>
                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <label>
                <tr bgcolor="#ECECE2">
                    <td>
                       <input type="radio" name="support" value="support4" onclick="selectSupport('4')"></label>
                    </td>
                    <td>
                        <div class="margin">
                            <b>Support général & visites mensuelles planifiées </b><br>
Maintenance proactive (présense sur site garantie) : 12 visites de 3-4 heures /an<br>
Maintenance serveur proactive (télésupport) : inclus<br>
Assistance téléphonique serveur de 1er et 2ème niveau<br>
Crédit de 20 heures /an de support hors maintenance<br>
Revue des infrastructures: 1x/an<br>
Tarif horaire spécial pour les prestations hors contrat: 170.-/h</div>
                    </td>
                    <td>
                        CHF 1000.00
                    </td>
                </tr>
                </label>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#ECEDED" colspan="3">
                    </td>
                </tr>
            </table>
            
            <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Support utilisateur </b></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td height="35">
                        <div class="margin"><i>Nombre de collaborateurs</i></div>
                    </td>
                    <td width="200">
                        Qte.
                    </td>
                    <td>
                        Prix mensuel
                    </td>
                </tr>
                <tr bgcolor="#ECECE2" height="5">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td width="450">
                        <div class="margin"><b>Utilisateurs standard +</b><br>
Hotline & déplacement sur site inclus info</div>
                    </td>
                    <td>
                        <input type="text" length="3" size="3" value="0" style="text-align:center;" id="prixUser"> x CHF 30.00 <div id="totUser"></div>
                    </td>
                    <td>
                    </td>
                </tr>
                
                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td width="450">
                        <div class="margin"><b>Utilisateurs VIP (direction, opération critique)</b><br>
Accès direct à un technicien de référence & déplacement sur site inclus info</div>
                    </td>
                    <td>
                        <input type="text" length="3" size="3" value="0" style="text-align:center;" id="prixUserVIP"> x CHF 55.00 <div id="totUserVIP"></div>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#ECEDED" colspan="3">
                    </td>
                </tr>
            </table>
            
            <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Vérification</b></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td height="35" colspan="2">
                        <div class="margin"><i>Backups checking</i></div>
                    </td>
                    
                    <td>
                        Prix mensuel
                    </td>
                </tr>
                <tr bgcolor="#ECECE2" height="5">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                     <td>
                         <input type="checkbox" name="backup" value="backup1" id="backup1" onclick="selectBackup('1',this);">
                    </td>
                    <td width="500">
                        <div class="margin"><b>Vérification des sauvegardes mensuelle</b><br>
1x par mois, intégrité des sauvegardes: 1x/an</div>
                    </td>
                   
                    <td>
                        CHF 25.00
                    </td>
                </tr>
                
                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td>
                         <input type="checkbox" name="backup" value="backup2" id="backup2" onclick="selectBackup('2',this);">
                    </td>
                    <td width="500">
                        <div class="margin"><b>Vérification des sauvegardes hebdomadaire</b><br>
1x par semaine, intégrité des sauvegardes: 1x/an</div>
                    </td>
                    
                    <td>
                        CHF 80.00
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td>
                         <input type="checkbox" name="backup" value="backup3" id="backup3" onclick="selectBackup('3',this);">
                    </td>
                    <td width="625">
                        <div class="margin"><b>Vérification des sauvegardes journalière</b><br>
1x par jour, intégrité des sauvegardes: 1x/an</div>
                    </td>

                    <td>
                        CHF 300.00
                    </td>
                    
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#ECEDED" colspan="3">
                    </td>
                </tr>
            </table>
            
            <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Horaires de support </b></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td height="35" colspan="2">
                        <div class="margin"><i>Horaires de support</i></div>
                    </td>
                    
                    <td>
                        Prix mensuel
                    </td>
                </tr>
                <tr bgcolor="#ECECE2" height="5">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                     <td>
                         <input type="radio" name="horaire" valude="horaire1" onclick="selectHoraire('1');" checked>
                    </td>
                    <td width="500">
                        <div class="margin"><b>Horaires de support standard</b><br>
LU-VE de 8h à 12h et de 13h30 à 18h</div>
                    </td>
                   
                    <td>
                        CHF 0.00
                    </td>
                </tr>
                
                <tr bgcolor="#ECECE2" height="3">
                    <td colspan="3" background="images/dot.png">
                    </td>
                </tr>
                <tr bgcolor="#ECECE2">
                    <td>
                         <input type="radio" name="horaire" valude="horaire2" onclick="selectHoraire('2');">
                    </td>
                    <td width="620">
                        <div class="margin"><b>Horaires de support standard 24/7</b><br>
Service de piquet avec support 24 sur 24</div>
                    </td>
                    
                    <td>
                        CHF 500.00
                    </td>
                </tr>
                
                <tr>
                    <td height="1" bgcolor="#DDDDDB" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="1" bgcolor="#FFFFFF" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td height="5" bgcolor="#ECEDED" colspan="3">
                    </td>
                </tr>
            </table>
            <br><p align="right" style="margin:15px;" id="lienSuivant"><a href="#" onclick="sendForm();">Suivant</a> <a href="#" onclick="sendForm();"><img src="images/next.png" align="absmiddle"></a></p>
        </td>
    </tr>
</table>
</form>
<script type="text/javascript">
selectedSupport = 1;
selectedBackup = 0;
selectedHoraire = 1;
qteUtilisateur = 0;
qteUtilisateurVIP = 0;
nbServeur = 1;

client = "";
date = "date";

function selectSupport(id) {
    if(id == 1) {
        $("#supportMaintenance").html("Support général & 2 visites annuelles planifiées<br><br>");
        $("#supportMaintenancePrix").html("170.00")
        prixSupport = 170;
        selectedSupport = 1;
    } else if(id == 2) {
        $("#supportMaintenance").html("Support général & visites trimestrielles planifiées <br><br>");
        $("#supportMaintenancePrix").html("250.00")
        prixSupport = 250;
        selectedSupport = 2;
    } else if(id == 3) {
        $("#supportMaintenance").html("Support général & visites planifiées tous les 2 mois <br><br>");
        $("#supportMaintenancePrix").html("450.00")
        prixSupport = 450;
        selectedSupport = 3;
    } else if(id == 4) {
        $("#supportMaintenance").html("Support général & visites mensuelles planifiées <br><br>");
        $("#supportMaintenancePrix").html("1000.00")
        prixSupport = 1000;
        selectedSupport = 4;
    }
    calculeTot();
}

function selectBackup(id,uid) {
    if(id == 1) {
        if(isChecked1 == true){
            $("#supportBackup").html("");
            $("#supportBackupQte").html("")
            $("#supportBackupPrix").html("")
            prixBackup = 0;
            isChecked1 = false;
            selectedBackup = 0;
        } else {
            if(isChecked2 == true){
                $("#backup2").attr("checked", false);
                isChecked2 = false;
            } else if(isChecked3 == true){
                $("#backup3").attr("checked", false);
                isChecked3 = false;
            } 
            $("#supportBackup").html("Vérification des sauvegardes mensuelle<br>");
            $("#supportBackupQte").html("1")
            $("#supportBackupPrix").html("25.00")
            selectedBackup = 1;
            prixBackup = 25;
            isChecked1 = true;
        }
    } else if(id == 2) {
        if(isChecked2 == true){
            $("#supportBackup").html("");
            $("#supportBackupQte").html("")
            $("#supportBackupPrix").html("")
            prixBackup = 0;
            isChecked2 = false;
            selectedBackup = 0;
        } else {
             if(isChecked1 == true){
                $("#backup1").attr("checked", false);
                isChecked1 = false;
            } else if(isChecked3 == true){
                $("#backup3").attr("checked", false);
                isChecked3 = false;
            }
            $("#supportBackup").html("Vérification des sauvegardes hebdomadaire<br>");
            $("#supportBackupQte").html("1")
            $("#supportBackupPrix").html("80.00")
            selectedBackup = 2;
            prixBackup = 80;
            isChecked2 = true;
        }
    } else if(id == 3) {
        if(isChecked3 == true){
            $("#supportBackup").html("");
            $("#supportBackupQte").html("")
            $("#supportBackupPrix").html("")
            prixBackup = 0;
            isChecked3 = false;
            selectedBackup = 0;
        } else {
            if(isChecked1 == true){
                $("#backup1").attr("checked", false);
                isChecked1 = false;
            } else if(isChecked2 == true){
                $("#backup2").attr("checked", false);
                isChecked2 = false;
            }
            $("#supportBackup").html("Vérification des sauvegardes journalière<br>");
            $("#supportBackupQte").html("1")
            $("#supportBackupPrix").html("300.00")
            selectedBackup = 3;
            prixBackup = 300;
            isChecked3 = true;
        }
    }
    calculeTot();
}


function selectHoraire(id) {
    if(id == 1) {
        $("#supportHoraire").html("Horaires de support standard<br>");
        $("#supportHorairePrix").html("0.00")
        prixHoraire = 0;
        selectedHoraire = 1;
    } else if(id == 2) {
        $("#supportHoraire").html("Horaires de support standard 24/7<br>");
        $("#supportHorairePrix").html("500.00")
        prixHoraire = 500;
        selectedHoraire = 2;
    } else {
        selectedHoraire = 1;
    }
    calculeTot();
}

$("#prixUser").focusout(function() {
    nbUser = $("#prixUser").val();
    if(isNaN(nbUser)) {
        alert("veuillez saisir un nombre");
        $("#prixUser").val(0);
    } else if(nbUser == 0){
        $("#supportUtilisateur").html("");
         $("#supportUtilisateurQte").html("");
    } else {
         calculeUser(nbUser);
         $("#supportUtilisateur").html("Utilisateurs standard +<br>");
         $("#supportUtilisateurQte").html(nbUser);
         selectedUser = 1;
         nbUser = nbUser;
    }

});
$("#prixUserVIP").focusout(function() {
    nbUserVip = $("#prixUserVIP").val();
    if(isNaN(nbUserVip)) {
        alert("veuillez saisir un nombre");
        $("#prixUserVIP").val(0);
    } else if(nbUserVip == 0){
        $("#supportUtilisateurVIP").html("");
         $("#supportUtilisateurVIPQte").html("");
    } else {
         calculeUserVIP(nbUserVip);
         $("#supportUtilisateurVIP").html("Utilisateurs VIP<br>");
         $("#supportUtilisateurVIPQte").html(nbUserVip);
         selectedUserVIP = 1;
         nbUserVIP = nbUserVip;
    }

});

function calculeUser(nbUser) {
    prixUtilisateur = nbUser*30;
    $("#supportUtilisateurPrix").html(prixUtilisateur+".00");
    qteUtilisateur = nbUser;
    calculeTot();
    
}

function calculeUserVIP(nbUser) {
    prixUtilisateurVIP = nbUser*55;
    $("#supportUtilisateurVIPPrix").html(prixUtilisateurVIP+".00");
    qteUtilisateurVIP = nbUser;
    calculeTot();
}

$("#nbServeur").focusout(function() {
    chargeListeServeur();
});
function chargeListeServeur() {
    nbServeur = $("#nbServeur").val()/2*2;
    totServeur = nbServeur+1;
    if(isNaN(nbServeur)) {
        alert("veuillez saisir un nombre");
        $("#nbServeur").val(1);
    } else if(nbServeur == 0){
        alert("Vous devez choisir un serveur minimum.");
        $("#nbServeur").val(1);
    } else {
         listeServeur = "<table width='100%' cellspacing='0'>";
         prixServeur = 0;
         for(i=1;i<totServeur;i++) {
             listeServeur += "<tr><td background='images/dot.png' height='3' colspan='3'></td></tr>";
             listeServeur += "<tr><td colspan='3' onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\">";
             listeServeur += "<span class='resume'>Serveur "+i+"</span>";
             listeServeur += "<div id='supportServeur"+i+"' class='resume'></div>";
             listeServeur += "</td></tr>";
             
             listeServeur += "<tr onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\"><td width='150'>";
             listeServeur += "<div id='supportServeurMaintenance"+i+"' class='resume'>Maintenance serveur virtuel</div>"
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurMaintenanceQte"+i+"' class='resume'>1</div>";
             listeServeur += "</td><td align='center' width='65'>";
             listeServeur += "<div id='supportServeurMaintenancePrix"+i+"' class='resume'>80.00</div>";
             listeServeur += "</td></tr>";
             
             listeServeur += "<tr onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\"><td>";
             listeServeur += "<div id='supportServeurNiveau"+i+"' class='resume'>Niveau d'intervention: SILVER</div>"
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurNiveauQte"+i+"' class='resume'>1</div>";
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurNiveauPrix"+i+"' class='resume'>0.00</div>";
             listeServeur += "</td></tr>";
             
             listeServeur += "<tr onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\"><td>";
             listeServeur += "<div id='supportServeurHoraire"+i+"' class='resume'></div>"
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurHoraireQte"+i+"' class='resume'></div>";
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurHorairePrix"+i+"' class='resume'></div>";
             listeServeur += "</td></tr>";
             
             listeServeur += "<tr onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\"><td>";
             listeServeur += "<div id='supportServeurExchange"+i+"' class='resume'></div>"
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurExchangeQte"+i+"' class='resume'></div>";
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurExchangePrix"+i+"' class='resume'></div>";
             listeServeur += "</td></tr>";
             
             listeServeur += "<tr onmouseover=\"javascript:this.style.backgroundColor='#FFE07A';\" onmouseout=\"javascript:this.style.backgroundColor='#FFFFFF';\" onmousedown=\"selectRow(this);\"><td>";
             listeServeur += "<div id='supportServeurSharepoint"+i+"' class='resume'></div>"
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurSharepointQte"+i+"' class='resume'></div>";
             listeServeur += "</td><td align='center'>";
             listeServeur += "<div id='supportServeurSharepointPrix"+i+"' class='resume'></div>";
             listeServeur += "</td></tr>";
             prixServeur += 80;
         }
         listeServeur += "</table>";
         $("#listeServeur").html(listeServeur);
         calculeTot();
    }
}
chargeListeServeur();

function sendForm(){
    supportClient = $("#client").val();
    supportDate = $("#date").val();
    nbServer = $("#nbServeur").val();
    $.post("maintenance/serveur.php",{nbServeur:nbServer} , function(msg){
        $("#main").fadeOut(500, function(){
            $("#main").html(msg);
                $("#main").fadeIn(500);
        })
    });
}

</script>