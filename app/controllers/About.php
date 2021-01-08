<?php

class About extends Controller {
	public function index($nama = 'Krisna Bayu Aditya Nurcahyo', $nim = '17051204044', $kelas = 'TI 2017 B')
	{
		$data['nama'] = $nama;
		$data['nim'] = $nim;
		$data['kelas'] = $kelas;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}