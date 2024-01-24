<?php
//RFI challenge
$fileContent = file_get_contents("./index.php");
$fileContent = str_replace("<?php","<", $fileContent);
echo $fileContent;
?>
