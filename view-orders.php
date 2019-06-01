<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
@$fileop = fopen("$DOCUMENT_ROOT/PI18_19_Gr16/rezervimet.txt", 'rb') or die("Unable to open file");
while (!feof($fileop)) {
$order= fgets($fileop);
echo $order."<br />";
}
fclose($fileop);
?>