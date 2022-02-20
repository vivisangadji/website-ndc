<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Artikel extends CI_Controller{

	public function index($kategori){
		$menu 				  = ['aktif','',''];
		$menu[$kategori] 	  = 'aktif';
		$data['menu'] 		  = ['',['','','','','',''],$menu,'','','',''];
		$data['title'] 	      = 'ARTIKEL';
		$data['artikels'] 	  = $this->mArtikel->getArtikelByKategori($kategori)->result();
		$data['kategori'] 	  = $this->mArtikel->getArtikelByKategori($kategori)->result();
		$data['services']	  = $this->mFooter->getService();
		$data['konsentrasi']  = $this->mFooter->getKonsentrasi();
		$data['divisi']		  = $this->mFooter->getDivisi();
		$data['kontaks']	  = $this->mFooter->getKontak();
		$data['medsos']		  = $this->mFooter->getMedsos();
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
		$data['detail_artikel'] = $this->mArtikel->getDetailArtikel($id);
		$data['services']	  	= $this->mFooter->getService();
		$data['konsentrasi']  	= $this->mFooter->getKonsentrasi();
		$data['divisi']		  	= $this->mFooter->getDivisi();
		$data['kontaks']	  	= $this->mFooter->getKontak();
		$data['medsos']		  	= $this->mFooter->getMedsos();
		$data['artikel_lain']	= $this->mArtikel->getRandomArtikel();
		$data['AllSubKategori'] = $this->mArtikel->getAllSubKategori();
		$subKategori 		  	= explode(',',$data['detail_artikel']->id_subkategori);
		$data['subKategori'] 	= [];
		foreach ($subKategori as $sk) {
			array_push($data['subKategori'],$this->mArtikel->getSubKategori($sk)[0]);
		}

		$this->load->view('template/header.php', $data);
		$this->load->view('template/navbar.php', $data);
		$this->load->view('artikel/detail.php', $data);
		$this->load->view('template/footer.php', $data);
	}

}


?>