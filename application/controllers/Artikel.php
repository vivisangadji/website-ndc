<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Artikel extends CI_Controller{

	public function index($kategori){
		$menu 				  = ['aktif','',''];
		$menu[$kategori] 	  = 'aktif';
		$data['menu'] 		  = ['',['','','','','',''],$menu,'','','',''];
		$data['title'] 	      = 'ARTIKEL';
		$data['artikels'] 	  = $this->MArtikel->getArtikelByKategori($kategori)->result();
		$data['kategori'] 	  = $this->MArtikel->getArtikelByKategori($kategori)->result();
		$data['services']	  = $this->MFooter->getService();
		$data['konsentrasi']  = $this->MFooter->getKonsentrasi();
		$data['divisi']		  = $this->MFooter->getDivisi();
		$data['kontaks']	  = $this->MFooter->getKontak();
		$data['medsos']		  = $this->MFooter->getMedsos();
		if ($this->input->post('keyword')){
			$data['artikels'] = $this->mArtikel->cariDataArtikel();

		}
	
		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('artikel/index.php', $data);
		$this->load->view('template/footer.php', $data);
	}

	public function detailArtikel($id){
		$data['menu'] 			= ['',['','','','','',''],['aktif','',''],'','','',''];
		$data['title'] 			= 'DETAIL ARTIKEL';
		$data['detail_artikel'] = $this->MArtikel->getDetailArtikel($id);
		$data['services']	  	= $this->MFooter->getService();
		$data['konsentrasi']  	= $this->MFooter->getKonsentrasi();
		$data['divisi']		  	= $this->MFooter->getDivisi();
		$data['kontaks']	  	= $this->MFooter->getKontak();
		$data['artikel_lain']	= $this->MArtikel->getRandomArtikel();
		$data['AllSubKategori'] = $this->MArtikel->getAllSubKategori();
		$data['medsos']		  	= $this->MFooter->getMedsos();
		$subKategori 		  	= explode(',',$data['detail_artikel']->id_subkategori);
		$data['subKategori'] 	= [];
		foreach ($subKategori as $sk) {
			array_push($data['subKategori'],$this->MArtikel->getSubKategori($sk)[0]);
		}

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('artikel/detail.php', $data);
		$this->load->view('template/footer.php', $data);
	}

}


?>