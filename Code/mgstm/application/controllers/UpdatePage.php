<?php 

class UpdatePage extends CI_Controller{
	
	public function index(){

		$deneme=$_POST["sirano"];
		$rte=(int) $deneme;
		$this->load->model('veritabanimodeli');
		$result = $this->veritabanimodeli->GetState($rte);

		if ($_POST["State"]!=$result){
			if($result=="Yapıldı"){

				$query = $this->veritabanimodeli->UpdateOperation($rte, $_POST["Tanim"],$_POST["Aciklama"],$result);
			}
			else{

				$query = $this->veritabanimodeli->UpdateOperation($rte, $_POST["Tanim"],$_POST["Aciklama"],$_POST["State"]);
			}
		}
		else{

			$query = $this->veritabanimodeli->UpdateOperation($rte, $_POST["Tanim"],$_POST["Aciklama"],$result);
		}

		if($query){
			
			header("Location:yapilacaklar");
		}
	}
}

?>