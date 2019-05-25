<?php
$a[] = "Florence";
$a[] = "Rome";
$a[] = "Paris";
$a[] = "Athens";
$a[] = "Barcelona";
$a[] = "Istanbul";
$a[] = "Santa Fe";
$a[] = "Venice";
$a[] = "NewYork";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "No suggestion!" : $hint;
?>