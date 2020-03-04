<?php


$tanim=$_POST["Tanim"];
$aciklama=$_POST["Aciklama"];


$ek= array(
'Tanim'=>$tanim,
'Aciklama'=>$aciklama
);

$this->load->model('veritabanimodeli');
$result = $this->veritabanimodeli->Yekle($ek);
header("Location:yapilacaklar");

?>