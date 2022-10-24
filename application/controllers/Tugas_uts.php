<?php
class Tugas_uts extends CI_Controller
{
	public function index()
	{
		$this->load->view('Tugas_uts/View-form');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
		'required' => 'Nama Siswa Harus diisi','min_lenght' => 'Nama siswa harus diisi']);
		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
		'required' => 'NIS Harus diisi','min_lenght' => 'NIS harus diisi']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[3]', [
		'required' => 'Kelas Harus diisi','min_lenght' => 'Tanggal Lahir harus diisi']);
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|min_length[3]', [
		'required' => 'Tanggal Lahir Harus diisi','min_lenght' => 'Tanggal Lahir harus diisi']);
		$this->form_validation->set_rules('tpt', 'Tempat Lahir', 'required|min_length[3]', [
		'required' => 'Tempat Lahir Harus diisi','min_lenght' => 'Tempat Lahir harus diisi']);
		$this->form_validation->set_rules('alm', 'Alamat', 'required|min_length[3]', [
		'required' => 'Alamat Harus diisi','min_lenght' => 'Alamat harus diisi']);
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|min_length[3]', [
		'required' => 'Jenis Kelamin Harus dipilih','min_lenght' => 'Jenis Kelamin harus dipilih']);
		$this->form_validation->set_rules('agama', 'Agama', 'required|min_length[1]', [
		'required' => 'Agama Harus dipilih','min_lenght' => 'Agama Harus dipilih']);
		
		if ($this->form_validation->run() != true) {
		 $this->load->view('Tugas_uts/View-form');
		 } else {
			 
		$data =[
				'nama' => $this->input->post('nama'),
				'nis' => $this->input->post('nis'),
				'kelas' => $this->input->post('kelas'),
				'tgl' => $this->input->post('tgl'),
				'tpt' => $this->input->post('tpt'),
				'alm' => $this->input->post('alm'),
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama')
		];
		$this->load->view('Tugas_uts/View-data', $data);
		}
	}
}	