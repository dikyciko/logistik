<?php

class Data_Jabatan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}
	
	public function index() 
	{
		$data['title'] = "Data Jabatan";
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/jabatan/data_jabatan', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data() 
	{
		$data['title'] = "Tambah Data Jabatan";
		
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/jabatan/tambah_dataJabatan', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$sertifikasi	= $this->input->post('sertifikasi');
			$welfare		= $this->input->post('welfare');
			$expensive		= $this->input->post('expensive');
			$provesion		= $this->input->post('provesion');
			$ops 			= $this->input->post('ops');
			$pass 			= $this->input->post('pass');
			$tunjangan		= $this->input->post('tunjangan');
			$data = array(
				'nama_jabatan' 	=> $nama_jabatan,
				'sertifikasi' 	=> $sertifikasi,
				'welfare' 		=> $welfare,
				'expensive' 	=> $expensive,
				'provesion'		=> $provesion,
				'ops'			=> $ops,
				'ops'			=> $pass,
				'tunjangan'		=> $tunjangan,
			);

			$this->ModelPenggajian->insert_data($data, 'data_jabatan');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_jabatan');
		}
	}

	public function update_data($id) 
	{
		$where = array('id_jabatan' => $id);
		$data['jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan= '$id'")->result();
		$data['title'] = "Update Data Jabatan";
		
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/jabatan/update_dataJabatan', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_jabatan');
			$nama_jabatan	= $this->input->post('nama_jabatan');
			$sertifikasi	= $this->input->post('sertifikasi');
			$welfare		= $this->input->post('welfare');
			$expensive		= $this->input->post('expensive');
			$provesion		= $this->input->post('provesion');
			$ops 			= $this->input->post('ops');
			$pass 			= $this->input->post('pass');
			$tunjangan 		= $this->input->post('tunjangan');

			$data = array(
				'nama_jabatan' 	=> $nama_jabatan,
				'sertifikasi' 	=> $sertifikasi,
				'welfare' 		=> $welfare,
				'expensive' 	=> $expensive,
				'provesion'		=> $provesion,
				'ops'			=> $ops,
				'pass'			=> $pass,
				'tunjangan'		=> $tunjangan,
			);

			$where = array(
				'id_jabatan' => $id
			);

			$this->ModelPenggajian->update_data('data_jabatan', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_jabatan');
		}
	}

	public function _rules() {
		$this->form_validation->set_rules('nama_jabatan','Nama Jabatan','required');
		$this->form_validation->set_rules('sertifikasi','Sertifikasi','required');
		$this->form_validation->set_rules('welfare','Welfare','required');
		$this->form_validation->set_rules('expensive','Expensive','required');
		$this->form_validation->set_rules('provesion','Provesion','required');
		$this->form_validation->set_rules('ops','Ops','required');
		$this->form_validation->set_rules('pass','Pass','required');
		$this->form_validation->set_rules('tunjangan','Tunjangan','required');

	}

	public function delete_data($id) {
		$where = array('id_jabatan' => $id);
		$this->ModelPenggajian->delete_data($where, 'data_jabatan');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_jabatan');
	}
}

?>