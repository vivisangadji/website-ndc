<?php 

class SejarahAdmin extends CI_Controller {

	public function index(){
		$data['title'] = 'Sejarah';
		$data['sejarah'] = $this->MSejarah->getSejarah();

		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/template/navbar');
		$this->load->view('admin/sejarah/index',$data);
		$this->load->view('admin/template/footer');
	}

	public function tambahSejarah(){
		$data['title'] = 'Tambah Sejarah';
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/sejarah/tambahSejarah');
			$this->load->view('admin/template/footer');
		} else {
			$this->MSejarah->tambahSejarah();
			$this->session->set_flashdata('alert','Ditambahkan');
			redirect(base_url('admin/sejarah' ));
		}
	}

	public function ubahSejarah($id){
		$data['title'] = 'Ubah Sejarah';
		$data['sejarah'] = $this->MSejarah->getSejarahById($id);
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/template/header',$data);
			$this->load->view('admin/template/navbar');
			$this->load->view('admin/sejarah/ubahSejarah',$data);
			$this->load->view('admin/template/footer');
		} else {
			$this->MSejarah->ubahSejarah();
			$this->session->set_flashdata('alert','Diubah');
			redirect(base_url('admin/sejarah' ));
		}
	}

	public function hapusSejarah($id){
		$this->MSejarah->hapusSejarah($id);
		$this->session->set_flashdata('alert','Dihapus');
		redirect(base_url('admin/sejarah'));
	}

}