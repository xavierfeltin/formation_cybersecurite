<?php
//RFI challenge
// $dirPath contain path to directory whose files are to be listed 
$files = scandir($dirPath);  
foreach ($files as $file) {
    $filePath = $dirPath . '/' . $file;
    if (is_file($filePath)) {
        echo $file . "<br>";
    }
}
?>
