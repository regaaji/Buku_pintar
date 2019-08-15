<?php 

/**
 * 
 */
class Tentang extends CI_Controller
{
	
	public function index()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->view('templates/navbar', $data);
		$this->load->view('tentang/index');			
		$this->load->view('templates/footer');	
	}
}