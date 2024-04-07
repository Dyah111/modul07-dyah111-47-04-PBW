<?php
$alas = 4.5;
$tinggi = 6.0;

$luas = 0.5 * $alas * $tinggi;

$sisiMiring = sqrt(pow($alas, 2) + pow($tinggi, 2));

$keliling = $alas + $tinggi + $sisiMiring;

$luas_formatted = number_format((float) $luas, 2, ',', '.');
$keliling_formatted = number_format((float) $keliling, 2, ',', '.');

echo '<p>Alas: ' . $alas . '</p>';
echo '<p>Tinggi: ' . $tinggi . '</p>';
echo '<p>Luas: ' . $luas_formatted . '</p>';
echo '<p>Keliling: ' . $keliling_formatted . '</p>';

?>