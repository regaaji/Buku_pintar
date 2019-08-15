<?php 


/**
 * 
 */
class Kategori extends CI_Controller
{
	
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Produk_model');
    }

	public function index()
	{
		
		$data['judul'] = 'Buku Pintar';

		$this->load->model('Produk_model', 'produk');
		$data['produk'] = $this->produk->get_produk();
		$this->load->view('templates/navbar', $data);
		$this->load->view('kategori/index', $data);
		$this->load->view('templates/footer');
	
	}

	public function jenis_kategori($id_kategori)
	{
		$data['judul'] = 'Buku Pintar';

		$this->load->model('Produk_model', 'produk');
		
		$data['jenis'] = $this->produk->get_jenis($id_kategori);
		$data['kategori'] = $this->produk->get_kategori($id_kategori);

		$this->load->view('templates/navbar', $data);
		$this->load->view('kategori/jenis', $data);
		$this->load->view('templates/footer');
	}
}