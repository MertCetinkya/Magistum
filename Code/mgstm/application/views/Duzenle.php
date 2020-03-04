<?php

echo "düzenlemedesin";
echo "<br>";

$deneme=$_POST["duzenleme"];
echo $deneme;

$result= $this->veritabanimodeli->ListeGetir('$deneme');

print_r($result);

?>