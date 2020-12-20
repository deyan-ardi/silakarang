<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Beranda";
		$this->load->view('templates/header',$data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function usaha(){
		$data['title'] = "Daftar Kategori Pameran";
		$this->load->view('templates/header', $data);
		$this->load->view('user/daftar-pameran', $data);
		$this->load->view('templates/footer', $data);
	}
	public function produk()
	{
		$data['title'] = "Produk";
		$this->load->view('templates/header', $data);
		$this->load->view('user/pameran', $data);
		$this->load->view('templates/footer', $data);
	}
	public function proses_pembuatan(){
		$data['title'] = "Proses Pembuatan";
		$this->load->view('templates/header', $data);
		$this->load->view('user/proses_pembuatan', $data);
		$this->load->view('templates/footer', $data);
	}
	public function dokumentasi()
	{
		$data['title'] = "Dokumentasi Lain";
		$this->load->view('templates/header', $data);
		$this->load->view('user/dokumentasi', $data);
		$this->load->view('templates/footer', $data);
	}
}