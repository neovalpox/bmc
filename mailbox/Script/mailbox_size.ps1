$computer = [System.DirectoryServices.ActiveDirectory.Domain]::GetCurrentDomain()
$domainLocal = $computer.name
$split = $domainLocal.split(".")
$domain = $split[0]

Get-Mailbox -ResultSize Unlimited | Get-MailboxStatistics | Select DisplayName,StorageLimitStatus,@{name="TotalItemSize";expression={[math]::Round((($_.TotalItemSize.Value.ToString()).Split("(")[1].Split(" ")[0].Replace(",","")/1MB),2)}},@{name="TotalDeletedItemSize";expression={[math]::Round((($_.TotalDeletedItemSize.Value.ToString()).Split("(")[1].Split(" ")[0].Replace(",","")/1MB),2)}},ItemCount,DeletedItemCount | Sort "TotalItemSize" -Descending | Export-CSV "C:\Master\Script\$domain.csv" -NoTypeInformation

$Dir="C:/Master/Script"    
 
#ftp server 
$ftp = "ftp://195.141.21.54/" 
$user = "admin" 
$pass = "bmc4ever"  
 
$webclient = New-Object System.Net.WebClient 
 
$webclient.Credentials = New-Object System.Net.NetworkCredential($user,$pass)  
 
#list every sql server trace file 
foreach($item in (dir $Dir "*.csv")){ 
    "Uploading $item..." 
    $uri = New-Object System.Uri($ftp+$item.Name) 
    $webclient.UploadFile($uri, $item.FullName) 
 }  