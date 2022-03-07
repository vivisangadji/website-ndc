<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller{

	public function index(){
		$data['menu']   	  = ['',['','','','','',''],['','',''],'','aktif','',''];
		$data['title']  	  = 'GALERI';
		$data['galeri'] 	  = $this->MGaleri->getGaleri();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('galeri/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}	

	public function detailGaleri($id){
		$data['menu']   	   = ['',['','','','','',''],['','',''],'','aktif','',''];
		$data['title']  	   = 'DETAIL GALERI';
		$data['detail_galeri'] = $this->MGaleri->getDetailGaleri($id);
		$data['services']	   = $this->MFooter->getService();
		$data['konsentrasi']   = $this->MFooter->getKonsentrasi();
		$data['divisi']		   = $this->MFooter->getDivisi();
		$data['kontaks']	   = $this->MFooter->getKontak();
		$data['medsos']		   = $this->MFooter->getMedsos();
		$data['galeri'] 	   = $this->MGaleri->getGaleriById($id);

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('galeri/detail.php', $data);
		$this->load->view('template/footer.php', $data);
	}
	
}


?>