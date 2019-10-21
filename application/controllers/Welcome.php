<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
	}

	public function index()
	{
		$data['kelas'] = $this->siswa_model->tampilkan_kelas();
		$this->load->view('siswaview', $data);
	}

	public function carisiswa()
	{
		
	echo $this->siswa_model->daftar_siswa($this->input->post('siswa_id'));
		
	}
}
