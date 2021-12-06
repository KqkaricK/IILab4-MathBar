<?php
if (!empty($_POST['a'] && $_POST['b']))
{
$k1 = $_POST['a'];
$k2 = $_POST['b'];
$gipotenuza = sqrt($k1*$k1 + $k2*$k2);
echo round($gipotenuza, 2);
}
?>
