
<link rel="stylesheet" href="style.css">

<table>
<?php
$fp = fopen("kadai_data.txt","r");        
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($name,$mail,$syussin) = explode("\t",$line);

?>
<tr>
<td><?php print $name ?></td>
<td><?php print $mail ?></td>
<td><?php print $syussin ?></td>
</tr>
<?php 
    }
}
fclose($fp);
?>
</table>





