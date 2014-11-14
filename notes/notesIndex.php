<script type="text/javascript">
$(function() {
    $( "#sliderOpacity" ).slider({
        value:100,
        min: 30,
        max: 100,
        step: 5,
        slide: function(event, ui) {
            $("#chiffreOpacity").text(ui.value + "%");
            $("#folderBox").css({ opacity: ui.value/100 });
        }
    });
});

</script>
<div style='position:absolute; right:-12px; top:-12px; z-index: 20;'><img src='images/logout.png' id='closeNotesButton' onclick='cache("notesBox");' onmouseover="overEffect('closeNotesButton');" onmouseout="outEffect('closeNotesButton');"></div>


<img src="images/icons/note.png" align="absmiddle"> <a href="#" onclick="addNote();">Ajouter une note</a><br><br>

<?php
    include("../php/loged.php");
    $queryNotes = mysql_query("SELECT * FROM notes WHERE user='$CKlogin'", $connexion);
    
    while($data = mysql_fetch_array($queryNotes)) {
        echo $data['titre']."<br>";
    }
?>