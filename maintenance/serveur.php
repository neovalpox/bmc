    <table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Maintenance informatique</b></font></td></tr>
    <tr>
        <td>
            <form id="saveServeur" method="POST" target="popup" action="maintenance/saveServeur.php">
            <?php
            $nbServeur = $_POST['nbServeur']+1;

            for($i=1;$i<$nbServeur;$i++) {
                echo '<input type="hidden" name="num'.$i.'" value="num'.$i.'">
                        <table width="94%" align="center" style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;" cellspacing="0">
                <tr>
                    <td colspan="3" height="40" bgcolor="#A0CED8" align="center">
                        <div class="margin"><img src="images/server2.png" align="absmiddle"><b>Serveur numéro '.$i.'</b></div>
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
                <td width="20">
                        
                    </td>
                    <td height="35">
                        <div class="margin"><i>Type de serveur</i></div>
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
                <input type="radio" name="typeServeur'.$i.'" id="serveurVirtuel'.$i.'" value="1" onclick="selectServeurType(1,'.$i.')" checked>
                    </td>
                    <td>
                        <div class="margin"><b>Maintenance serveur virtuel</b><br>
Serveur virtualisé sur infrastructure VMware</div>
                    </td>
                    <td>
                        CHF 80.00
                    </td>
                    
                </tr>
                <tr bgcolor="#ECECE2">
                <td>
                <input type="radio" name="typeServeur'.$i.'" id="serveurPhysique'.$i.'" value="2" onclick="selectServeurType(2,'.$i.')">
                    </td>
                    <td>
                        <div class="margin"><b>Maintenance serveur physique</b><br>
Machine physique (HP, Dell, IBM, etc ...)</div>
                    </td>
                    <td>
                        CHF 80.00
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
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Incident serveur et réseau </b></div>
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
                <td width="20">
                        
                    </td>
                    <td height="35">
                        <div class="margin"><i>Priorité des incidents & requêtes sur l\'infrastructure client</i></div>
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
                <input type="radio" name="niveauIntervention'.$i.'" id="interventionSilver'.$i.'" value="1" onclick="selectNiveau(1,'.$i.')" checked>
                    </td>
                    <td>
                        <div class="margin"><b>Niveau d\'intervention: SILVER</b><br>
Temps de réaction et d’intervention standard</div>
                    </td>
                    <td>
                        CHF 0.00
                    </td>
                    
                </tr>
                <tr bgcolor="#ECECE2">
                <td>
                <input type="radio" name="niveauIntervention'.$i.'" id="interventionGold'.$i.'" value="2" onclick="selectNiveau(2,'.$i.')">
                    </td>
                    <td>
                        <div class="margin"><b>Niveau d\'intervention: GOLD</b><br>
Temps de réaction et d\'intervention</div>
                    </td>
                    <td>
                        CHF 200.00
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
                <tr>
                    <td colspan="3" height="40" bgcolor="#ECEDED">
                        <div class="margin"><b>Options par serveur Windows </b></div>
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
                <td width="20">
                        
                    </td>
                    <td height="35">
                        <div class="margin"><i>Options</i></div>
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
                <input type="checkbox" name="optionHoraire'.$i.'" id="optionHoraire'.$i.'" value="1" onclick="selectOptions(1,'.$i.')">
                    </td>
                    <td>
                        <div class="margin"><b>Extension horaires de maintenance Windows Updates Serveurs</b><br>
LU-VE jusqu\'à 21h30</div>
                    </td>
                    <td>
                        CHF 100.00
                    </td>
                    
                </tr>
                <tr bgcolor="#ECECE2">
                <td>
                <input type="checkbox" name="optionExchange'.$i.'" id="optionExchange'.$i.'" value="1" onclick="selectOptions(2,'.$i.')">
                    </td>
                    <td>
                        <div class="margin"><b>Option MS Exchange</b></div>
                    </td>
                    <td>
                        CHF 100.00
                    </td>
                    
                </tr>
                <tr bgcolor="#ECECE2">
                <td>
                <input type="checkbox" name="optionSharePoint'.$i.'" id="optionSharePoint'.$i.'" value="1" onclick="selectOptions(3,'.$i.')">
                    </td>
                    <td>
                        <div class="margin"><b>Option MS SharePoint</b></div>
                    </td>
                    <td>
                        CHF 200.00
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
            </table>';
            }
            ?>
            <input type="hidden" name="id" id="lastID">
            <input type="hidden" name="nbServeur" id="nbServeur" value="<?php echo $nbServeur; ?>">
            </form>
            <p align="right" style="margin:15px;" id="lienValider"><a href="#" onclick="valider();"><img src="images/save.png" align="absmiddle"></a> <a href="#" onclick="valider();">Enregistrer</a></p>
        </td>
    </tr>
</table>

<script type="text/javascript">
for(i=0;i<nbServeur;i++) {
    window["serveurOptionHoraire"+i] = 0;
    window["serveurOptionExchange"+i] = 0;
    window["serveurOptionSharepoint"+i] = 0;
}



function selectServeurType(id,uid) {
    if(id == 1) {
        if($('#serveurVirtuel'+uid).attr('checked')?true:false) {
            $("#supportServeurMaintenance"+uid).html("Maintenance serveur virtuel<br>");
            $("#supportServeurMaintenancePrix"+uid).html("80.00");
            prixServeurType = 80;
            window["serveurType"+uid] = 1;
        }
    } else if(id == 2) {
        if($('#serveurPhysique'+uid).attr('checked')?true:false) {
            $("#supportServeurMaintenance"+uid).html("Maintenance serveur physique<br>");
            $("#supportServeurMaintenancePrix"+uid).html("80.00")
            prixServeurType = 80;
            window["serveurType"+uid] = 2;
        }
    }
    calculeTot();
}
function selectNiveau(id,uid) {
    if(id == 1) {
        if($('#interventionGold'+uid).attr('checked')?true:false) {
            
        } else {
            $("#supportServeurNiveau"+uid).html("Niveau d'intervention: SILVER<br>");
            $("#supportServeurNiveauPrix"+uid).html("0.00");
            $('#interventionSilver'+uid).attr('disabled', 'disabled');
            $('#interventionGold'+uid).removeAttr('disabled');
            prixServeurNiveau -= 200;
            window["serveurNiveau"+uid] = 1;
        }
    } else if(id == 2) {
         if($('#interventionSilver'+uid).attr('checked')?true:false) {
           
        } else {
             $("#supportServeurNiveau"+uid).html("Niveau d'intervention: GOLD<br>");
            $("#supportServeurNiveauPrix"+uid).html("200.00");
            $('#interventionGold'+uid).attr('disabled', 'disabled');
            $('#interventionSilver'+uid).removeAttr('disabled');
            prixServeurNiveau += 200;
            window["serveurNiveau"+uid] = 2;
        }
    }
    calculeTot();
}

function selectOptions(id,uid) {
    if(id == 1) {
        if($('#optionHoraire'+uid).attr('checked')?true:false) {
            $("#supportServeurHoraire"+uid).html("Extension horaires de maintenance Windows Updates Serveurs");
            $("#supportServeurHoraireQte"+uid).html("1");
            $("#supportServeurHorairePrix"+uid).html("100.00");
            
            prixServeurOptions += 100;
            window["serveurOptionHoraire"+uid] = 1;
        } else {
            $("#supportServeurHoraire"+uid).html("");
            $("#supportServeurHoraireQte"+uid).html("");
            $("#supportServeurHorairePrix"+uid).html("");
            prixServeurOptions -= 100;
            window["serveurOptionHoraire"+uid] = 0;
        }
    } else if(id == 2) {
        if($('#optionExchange'+uid).attr('checked')?true:false) {
            $("#supportServeurExchange"+uid).html("Option MS Exchange");
            $("#supportServeurExchangeQte"+uid).html("1");
            $("#supportServeurExchangePrix"+uid).html("100.00");
            prixServeurOptions += 100;
            window["serveurOptionExchange"+uid] = 1;
        } else {
            $("#supportServeurExchange"+uid).html("");
            $("#supportServeurExchangeQte"+uid).html("");
            $("#supportServeurExchangePrix"+uid).html("");
            prixServeurOptions -= 100;
            window["serveurOptionExchange"+uid] = 0;
        }
    } else if(id == 3) {
        if($('#optionSharePoint'+uid).attr('checked')?true:false) {
            $("#supportServeurSharepoint"+uid).html("Option MS SharePoint");
            $("#supportServeurSharepointQte"+uid).html("1");
            $("#supportServeurSharepointPrix"+uid).html("200.00");
            prixServeurOptions += 200;
            window["serveurOptionSharepoint"+uid] = 1;
        } else {
            $("#supportServeurSharepoint"+uid).html("");
            $("#supportServeurSharepointQte"+uid).html("");
            $("#supportServeurSharepointPrix"+uid).html("");
            prixServeurOptions -= 200;
            window["serveurOptionSharepoint"+uid] = 0;
        }
    }
    calculeTot();
}
function valider() {
    $("#lienValider").html("");
    $.post("maintenance/save.php", {selectedSupport: selectedSupport, selectedBackup: selectedBackup, selectedHoraire: selectedHoraire, qteUtilisateur: qteUtilisateur, qteUtilisateurVIP: qteUtilisateurVIP, nbServeur: nbServeur, client: supportClient, date: supportDate}, function(data){
        $("#lastID").val(data.lastID);
        window.open('','popup','width=850, height=570, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=150, left=400');
        document.getElementById('saveServeur').submit();
    });
}
</script>