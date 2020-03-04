<?php 

class DeletePage extends CI_Controller{

	public function index(){

		$deneme=$_POST["sirano"];
		$sirano=(int) $deneme;

		$this->load->model('veritabanimodeli');

		$query = $this->veritabanimodeli->DeleteOperation($sirano);

		if($query){
			header("Location:yapilacaklar");
		}
	}

}

?>