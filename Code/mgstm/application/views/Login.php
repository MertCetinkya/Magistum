<?php 

if ($_POST){
	echo "veri geldi";
	$username=$_POST["username"];
	$password=$_POST["password"];
	echo $username;
	echo "<br>";
	echo $password;
	echo "<br>";

	//veri tabanından verileri ayıklamadan alma kodu
	$result = $this->veritabanimodeli->getir($username,$password);
	print_r($result);
	//$resim=$result['ResimYol'];
	//print_r($resim);


	//result ne dönüyor diye kontrol
	if($result==null){
		echo "<br>";
		echo "işlem başarısız";
		header("Location:Test");
	}
	else{
		echo "<br>";
		echo "işlem başarılı";
		header("Location:yapilacaklar");
	}


}
else{
	echo "veri yok";
}

?>