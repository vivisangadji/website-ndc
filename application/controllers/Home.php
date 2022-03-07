<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{ 

	public function index(){
		$nav['menu']          = ['aktif',['','','','','',''],['','',''],'','','',''];
		$data['carousel']     = $this->MCarousel->getCarousel();
		$data['artInfo']  	  = $this->MArtikel->getArtikelByKategori(1)->result();
		$data['artTutorial']  = $this->MArtikel->getArtikelByKategori(2)->result();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		$data["agenda"]		  = $this->db->order_by("waktu", "DESC")->limit(1)->get("agenda")->result();

		// $data['artInfoit'] = $this->mArtikel->getArtikelByKategori(2)->result();
		// $data['kategori'] = $this->mArtikel->getKategori()->row();
		
		$data['title'] = 'BERANDA';
		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php',$nav);
		$this->load->view('home/index.php',$data);
		$this->load->view('template/footer.php', $data);
	}
	
}


?>