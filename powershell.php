<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Commandes PowerShell</b></font></td></tr>
    <tr>
        <td>
            <div style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;">
                <i><font color="#666666">// Définir les droits à tous les utilisateur pour un calendrier (Ressource)</font></i><br>
                <b>set-MailboxFolderPermission -Identity <font color="orange">NomDeLaRessource</font>:\Calendrier -User Default -AccessRights Reviewer</b>
                <br><br>
                <i><font color="#666666">// Récupérer les info sur un calendrier (Ressource)</font></i><br>
                <b>get-MailboxFolderPermission -Identity <font color="orange">NomDeLaRessource</font>:\Calendrier</b><br><br>
                
                <i><font color="#666666">// Changer le port de sortie du connecteur SMTP Exchange</font></i><br>
                <b>Get-SendConnector</b><br>
                <b>Set-SendConnector -Identity<font color="orange">"NomDuConnecteur"</font> -port 587</b>
            </div></td>
    </tr>
</table>
<br><br>
<table cellspacing="0" width="800" class="cadre"><tr background="images/clouds.jpg" height="40" class="cadre"><td colspan="2"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;<b>Commandes DOS</b></font></td></tr>
    <tr>
        <td>
            <div style="margin-left: 25px;margin-right: 25px; margin-bottom: 15px; margin-top: 15px;">
                <i><font color="#666666">// Exporter la configuration DHCP</font></i><br>
                <b>netsh dhcp server <font color="orange">\\SERVERNAME</font> dump all > <font color="orange">d:\backup_DHCP_servernamedump.txt</font></b>
                <br><br>
                <i><font color="#666666">// Importer la configuration DHCP</font></i><br>
                <b>netsh dhcp server <font color="orange">\\SERVERNAME</font> import <font color="orange">d:\backup_DHCP_servernamedump.txt</font></b>

            </div></td>
    </tr>
</table>