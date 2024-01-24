<?php
//RFI challenge
$filePath = './index.php';
$fileContent = file_get_contents($filePath);
$fileContent = str_replace("<?php","<",$fileContent);
echo $filePath;
?>
