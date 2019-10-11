<?php
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(3);
$listInteger->add(9);
$listInteger->add(7);
print_r($listInteger);
echo "<br>";
$listInteger->sort();
print_r("<pre>");
print_r($listInteger);
print_r("</pre>");

echo $listInteger->get(2);