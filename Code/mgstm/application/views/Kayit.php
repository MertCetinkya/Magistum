<?php



if ($_POST){
	
	echo "Veri Geldi";
	echo "<br> ";
	$username=$_POST["username"];
	echo $name;
	echo "<br>";
	$pass1=$_POST["pass1"];
	echo $pass1;
	echo "<br>";
	$pass2=$_POST["pass2"];
	echo $pass2;
	echo "<br>";
}
else{

	echo "veri gelmiyor";
}

if(isset($_POST["foto"])){

#--------------------------------------------------

#fotoğraf yükleme kısmı başlangıç kısmı

	$uploads_dir = 'dimg'; #resmin kaydedileceği yol
	@$tmp_name = $_FILES['foto']["tmp_name"]; #geçici dosya ismi
	@$name = $_FILES['foto']["name"]; #son dosya hali
	$benzersizsayi1=rand(20000,32000); #sayılar ismi unique yapmak için varlar 
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=$uploads_dir."/".$benzersizad.$name;

	compressImage($_FILES['foto']['tmp_name'],"$uploads_dir/$benzersizad$name",80);


#fotoğraf yükeleme kısmı bitişi


}


if ($pass1!=$pass2){
	
	echo "Şifreler eşleşmiyor";
	header("Location:Register");
}
else{

	echo "şifreler eşleşti";
	echo "<br>";
	echo "<br>";
	//database ekleme işlemi
	$formdata = array( 

		'UserName' => $username,
		'Password' => $pass1,
		'ResimYol'=>$refimgyol
	); 
	//$this->load->model('veritabanimodeli');
	$result = $this->veritabanimodeli->ekle($formdata);

	if($result){

		echo "işlem başarılı";
		header("Location:Test");
	}
	else{

		echo "işlem başarısız";
	}
}


function compressImage($source, $destination, $quality) {

	$info = getimagesize($source);

	if ($info['mime'] == 'image/jpeg') 
		$image = imagecreatefromjpeg($source);

	elseif ($info['mime'] == 'image/gif') 
		$image = imagecreatefromgif($source);

	elseif ($info['mime'] == 'image/png') 
		$image = imagecreatefrompng($source);

	imagejpeg($image, $destination, $quality);

}


?>