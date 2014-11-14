<table class="cadre" cellspacing="0" width="290">
    <tr class="cadre"><td height="43" align="center"><font color="#FFFFFF"><b>Résumé</b></font></td></tr><tr class="vierge"><td>
<div style="margin:8px;">

    <table width="100%" cellspacing="0">
        <tr>
            <td height="30">
                <b>Objet</b>
            </td>
            <td align="center">
                <b>Qte.</b>
            </td>
            <td align="center">
                <b>Prix</b>
            </td>                
        </tr>
        <tr onmouseover="javascript:this.style.backgroundColor='#FFE07A';" onmouseout="javascript:this.style.backgroundColor='#FFFFFF';" onmousedown="selectRow(this);">
            <td width="150">
                <div id="supportMaintenance" class="resume">Support général & 2 visites annuelles planifiées</div>
            </td>
            <td align="center">
                <div id="supportMaintenanceQte" class="resume">1</div>
            </td>
            <td align="center">
                <div id="supportMaintenancePrix" class="resume">170.00</div>
            </td>
        </tr>
        <tr onmouseover="javascript:this.style.backgroundColor='#FFE07A';" onmouseout="javascript:this.style.backgroundColor='#FFFFFF';" onmousedown="selectRow(this);">
            <td>
                <div id="supportUtilisateur" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportUtilisateurQte" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportUtilisateurPrix" class="resume"></div>
            </td>
        </tr>
        <tr onmouseover="javascript:this.style.backgroundColor='#FFE07A';" onmouseout="javascript:this.style.backgroundColor='#FFFFFF';" onmousedown="selectRow(this);">
            <td>
                <div id="supportUtilisateurVIP" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportUtilisateurVIPQte" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportUtilisateurVIPPrix" class="resume"></div>
            </td>
        </tr>
        <tr onmouseover="javascript:this.style.backgroundColor='#FFE07A';" onmouseout="javascript:this.style.backgroundColor='#FFFFFF';" onmousedown="selectRow(this);">
            <td>
                <div id="supportBackup" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportBackupQte" class="resume"></div>
            </td>
            <td align="center">
                <div id="supportBackupPrix" class="resume"></div>
            </td>
        </tr>
        <tr onmouseover="javascript:this.style.backgroundColor='#FFE07A';" onmouseout="javascript:this.style.backgroundColor='#FFFFFF';" onmousedown="selectRow(this);">
            <td>
                <div id="supportHoraire" class="resume">Horaires de support standard</div>
            </td>
            <td align="center">
                <div id="supportHoraireQte" class="resume">1</div>
            </td>
            <td align="center">
                <div id="supportHorairePrix" class="resume">0.00</div>
            </td>
        </tr>
    </table>
         <div id="listeServeur" class="resume"></div>
         <table width="100%" cellspacing="0">
        <tr>
            <td height="30">
                <b>Total mensuel</b>
            </td>
            <td>
                
            </td>
            <td width="48" align="center">
                <b><div id="supportPrix" class="resume">170.00</div></b>
            </td>
        </tr>
    </table>
    </font>

</div></td></tr></table>
<script type="text/javascript">
    // Déclaration des variables //
    prixSupport = 170;
    prixUtilisateur = 0;
    prixUtilisateurVIP = 0;
    prixBackup = 0;
    prixHoraire = 0;
    qteUtilisateur = 0;
    qteUtilisateurVIP = 0;
    prixServeur = 0;
    prixServeurNiveau = 0;
    prixServeurOptions = 0;

    var isChecked1 = $('#backup1').attr('checked')?true:false;
    var isChecked2 = $('#backup2').attr('checked')?true:false;
    var isChecked3 = $('#backup3').attr('checked')?true:false;
    
function calculeTot() {
    total = prixSupport+prixUtilisateur+prixUtilisateurVIP+prixBackup+prixHoraire+prixServeur+prixServeurNiveau+prixServeurOptions+".00";
    $("#supportPrix").html(total);
}

function popupPrint(){
    window.open("maintenance/print.php", "nom", "width=700, height=900, toolbar=no, adressbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no, top=150, left=600");
}
  
</script>