tml>
<?php 

$query = $this->veritabanimodeli->islerigetir(); 
print_r($query);
echo "<br>";
echo "<br>";

foreach($query as $meyve) { 
	print_r ($meyve);
	$sıra_no=$meyve->Id;
	echo "<br>";
	$tanim=$meyve->Tanim;
	echo $tanim;
	echo "<br>";
	$aciklama=$meyve->Aciklama;
	echo $aciklama;
	echo "<br>";
	$state=$meyve->State;
	echo $meyve->State;
	echo "<br>";
	echo "<br>";
	?>
	<form action="#" method="post" style="border-color: red; border:dotted; padding: 10px;">
		<input style="visibility: hidden;" type="text" name="sirano" value="<?php echo $sıra_no ?>" >
		<br/>
		<br/>
		<input type="text" name="Tanim" value="<?php echo $tanim ?>">
		<br/>
		<br/>
		<input type="text" name="Aciklama" value="<?php  echo $aciklama ?>">
		<br/>
		<br/>
		<input type="radio" name="State" value="Yapıldı"> Yapıldı!<br>
		<input type="radio" name="State" value="Yapılmadı"> sYapılmadı<br>
		<br/>
		<br/>
		<button type="submit" formaction="UpdatePage"> Düzele</button>
		<button type="submit" formaction="DeletePage" style="padding-left:10px; "> Sil</button>
	</form>
	<?php 
} 
?>
</html>