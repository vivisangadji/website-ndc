<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class FooterAdmin extends CI_Controller {

	/*################# Service #####################*/
	public function service(){
		$data['title'] 	 = 'Service Footer';
		$data['services'] = $this->MFooter->getService();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/service/index');
		$this->load->view('admin/template/footer');
	}

	public function tambahService(){
		$data['title']  = 'Tambah Service';
		$this->form_validation->set_rules('service', 'Service', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/service/tambahService');
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->tambahService();
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/service'));
		}
	} 

	public function ubahService($id){
		$data['title']   = 'Ubah Data Service';
		$data['service'] = $this->MFooter->getDataServiceById($id);
		$this->form_validation->set_rules('service', 'Service', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/service/ubahService', $data);
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->ubahDataService($id);
			$this->session->set_flashdata('alert', 'Diubah');
			redirect(base_url('admin/service'));
		}
	}

	public function hapusService($id){
		$this->MFooter->hapusDataService($id);
		$this->session->set_flashdata('alert', 'Dihapus');
		redirect(base_url('admin/service'));
	}
	/*##################### end service ######################*/


	/*##################### konsentrasi ######################*/
	public function konsentrasi(){
		$data['title']  	   = 'Konsentrasi';
		$data['konsentrasi']   = $this->MFooter->getKonsentrasi();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/konsentrasi/index', $data);
		$this->load->view('admin/template/footer');	
	}

	public function tambahKonsentrasi(){
		$data['title']  = 'Tambah Konsentrasi';
		$this->form_validation->set_rules('konsentrasi', 'Konsentrasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/konsentrasi/tambahKonsentrasi');
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->tambahKonsentrasi();
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/konsentrasi'));
		}
	}

	public function ubahKonsentrasi($id){
		$data['title']       = 'Ubah Konsentrasi';
		$data['konsentrasi'] = $this->MFooter->getKonsentrasiById($id);
		$this->form_validation->set_rules('konsentrasi', 'Konsentrasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/konsentrasi/ubahKonsentrasi', $data);
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->ubahKonsentrasi($id);
			$this->session->set_flashdata('alert', 'Diubah');
			redirect(base_url('admin/konsentrasi'));
		}
	}

	public function hapusKonsentrasi($id){
		$this->MFooter->hapusKonsentrasi($id);
		$this->session->set_flashdata('alert', 'Dihapus');
		redirect(base_url('admin/konsentrasi'));
	}
	/*##################### end konsentrasi ###################*/
	


	/*##################### divisi ###################*/
	public function divisi(){
		$data['title']  = 'Divisi';
		$data['divisi'] = $this->MFooter->getDivisi();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/divisi/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahDivisi(){
		$data['title']  = 'Tambah Divisi';
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/divisi/tambahDivisi');
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->tambahDivisi();
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/divisi'));
		}
	}

	public function ubahDivisi($id){
		$data['title']       = 'Ubah Divisi';
		$data['divisi']      = $this->MFooter->getDivisiById($id);
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/divisi/ubahDivisi', $data);
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->ubahDivisi($id);
			$this->session->set_flashdata('alert', 'Diubah');
			redirect(base_url('admin/divisi'));
		}
	}

	public function hapusDivisi($id){
		$this->MFooter->hapusDivisi($id);
		$this->session->set_flashdata('alert', 'Dihapus');
		redirect(base_url('admin/divisi'));
	}
	/*##################### end divisi ###################*/



	/*##################### kontak & medsos ###################*/
	public function kontakMedsos(){
		$data['title']         = 'Kontak & Medsos';
		$data['kontak_medsos'] = $this->MFooter->getAllKontakMedsos();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/kontak_medsos/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambahKontakMedsos(){
		$data['title']  = 'Tambah Kontak Medsos';
		$this->form_validation->set_rules('nama', 'Field ini', 'required');
		$this->form_validation->set_rules('icon', 'Field ini', 'required');
		$this->form_validation->set_rules('url', 'Field url', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/kontak_medsos/tambahKontakMedsos');
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->tambahKontakMedsos();
			$this->session->set_flashdata('alert', 'Ditambahkan');
			redirect(base_url('admin/kontak_medsos'));
		}
	}

	public function ubahKontakMedsos($id){
		$data['title']  		= 'Ubah Kontak Medsos';
		$data['kontak_medsos']	= $this->MFooter->getKontakMedsosById($id);
		$this->form_validation->set_rules('nama', 'Field ini', 'required');
		$this->form_validation->set_rules('icon', 'Field ini', 'required');
		$this->form_validation->set_rules('url', 'Field url', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header', $data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/kontak_medsos/ubahKontakMedsos');
			$this->load->view('admin/template/footer');
		}else {
			$this->MFooter->ubahKontakMedsos($id);
			$this->session->set_flashdata('alert', 'Diubah');
			redirect(base_url('admin/kontak_medsos'));
		}
	}

	public function hapusKontakMedsos($id){
		$this->MFooter->hapusKontakMedsos($id);
		$this->session->set_flashdata('alert', 'Dihapus');
		redirect(base_url('admin/kontak_medsos'));
	}
	/*##################### end kontak & medsos ###################*/

}
