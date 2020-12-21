<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Beranda";
		if (isset($_POST['submit'])) {
			var_dump($_POST);
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'riyan.clsg11@gmail.com',    // Ganti dengan email gmail anda
				'smtp_pass' => '-$Clsg13$-',      // Ganti dengan Password gmail anda
				'smtp_port' => '465',
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];
			$this->load->library('email', $config);
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$to_email = ['riyan.clsg11@gmail.com', 'riyan@undiksha.ac.id'];
			$this->email->from($email, 'Pesan dari ' . $name);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			// send mail
			if ($this->email->send()) {
				$this->session->set_flashdata('berhasil', 'Email sukses dikirim');
				redirect('p');
			} else {
				$this->session->set_flashdata('gagal', 'Email gagal dikirim');
				redirect('p');
			}
		} else {
			$this->load->view('templates/header', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	public function usaha($id = '')
	{
		$data['title'] = "Daftar Kategori Pameran";
		$this->load->view('templates/header', $data);
		if ($id == "tenun") {
			$this->load->view('user/arthadharma/daftar-pameran', $data);
		} else if ($id == "silakarang") {
			$this->load->view('user/silakarang/daftar-pameran', $data);
		} else {
			redirect('p');
		}
		$this->load->view('templates/footer', $data);
	}
	public function produk($id = '')
	{
		$data['title'] = "Produk";
		$this->load->view('templates/header', $data);
		if ($id == "tenun") {
			$this->load->view('user/arthadharma/pameran', $data);
		} else if ($id == "silakarang") {
			$this->load->view('user/silakarang/pameran', $data);
		} else {
			redirect('p');
		}
		$this->load->view('templates/footer', $data);
	}
	public function proses_pembuatan($id = '')
	{
		$data['title'] = "Proses Pembuatan";
		$this->load->view('templates/header', $data);
		if ($id == "tenun") {
			$this->load->view('user/arthadharma/proses_pembuatan', $data);
		} else if ($id == "silakarang") {
			$this->load->view('user/silakarang/proses_pembuatan', $data);
		} else {
			redirect('p');
		}
		$this->load->view('templates/footer', $data);
	}
	public function dokumentasi($id = '')
	{
		$data['title'] = "Dokumentasi Lain";
		$this->load->view('templates/header', $data);
		if ($id == "tenun") {
			$this->load->view('user/arthadharma/dokumentasi', $data);
		} else if ($id == "silakarang") {
			$this->load->view('user/silakarang/dokumentasi', $data);
		} else {
			redirect('p');
		}
		$this->load->view('templates/footer', $data);
	}

}