<?php
include "Rectangle.php";
$width = 10;
$height = 20;

$rectangle = new Rectangle($width, $height);

echo('S = ' . $rectangle->getPerimeter());
echo '<br>';
echo('V =' . $rectangle->getArea());
echo '<br>';
echo("Your Rectangle" . $rectangle->display());