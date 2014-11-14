<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Vertex008821');
define('DB_NAME', 'backup_bmc');
 
@$conn = mysql_connect (DB_SERVER, DB_USER, DB_PASSWORD);
mysql_select_db (DB_NAME,$conn);
if(!$conn){
    die( "Un problème avec la base de données est survenu.");
}
 
function get_file_extension($file_name) {
    return end(explode('.',$file_name));
}
 
function errors($error){
    if (!empty($error))
    {
            $i = 0;
            while ($i < count($error)){
            $showError.= '<div class="msg-error">'.$error[$i].'</div>';
            $i ++;}
            return $showError;
    }// close if empty errors
} // close function
 
 
if (isset($_POST['upfile'])){
// check feilds are not empty
 
if(get_file_extension($_FILES["uploaded"]["name"])!= 'csv')
{
$error[] = 'Only CSV files accepted!';
}
 
if (!$error){
 
$tot = 0;
$handle = fopen($_FILES["uploaded"]["tmp_name"], "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    for ($c=0; $c < 1; $c++) {
 
            //only run if the first column if not equal to firstname
            if($data[0] !='firstname'){
                mysql_query("INSERT INTO contacts(
                firstname,
                lastname,
                email,
                telephone
                )VALUES(
                    '".mysql_real_escape_string($data[0])."',
                    '".mysql_real_escape_string($data[1])."',
                    '".mysql_real_escape_string($data[2])."',
                    '".mysql_real_escape_string($data[3])."'
                )")or die(mysql_error());
            }
 
    $tot++;}
}
fclose($handle);
$content.= "<div class='success' id='message'> CSV File Imported, $tot records added </div>";
 
}// end no error
}//close if isset upfile
 
$er = errors($error);
$content.= <<<EOF
<h3>Import CSV Data</h3>
$er
<form enctype="multipart/form-data" action="" method="post">
    File:<input name="uploaded" type="file" maxlength="20" /><input type="submit" name="upfile" value="Upload File">
</form>
EOF;
echo $content;
?>