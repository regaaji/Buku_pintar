<?php 


/**
 * 
 */
class Home extends CI_Controller
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
			
			$data['new'] = $this->produk->get_new();
			$data['produk'] = $this->produk->get_produk();
			
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
	
	}


	public function detail($id_produk)
	{
			$data['judul'] = 'Buku Pintar';

			$this->load->model('Produk_model', 'produk');
			$data['detail'] = $this->produk->get_detail($id_produk);
			
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/detail', $data);
			$this->load->view('templates/footer');
	}

	public function beli($id_produk)
	{
			$data['judul'] = 'Buku Pintar';

			$this->load->model('Produk_model', 'produk');
			$data['detail'] = $this->produk->get_detail($id_produk);
			
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/beli', $data);
			$this->load->view('templates/footer');
	}

	public function keranjang()
	{
			$data['judul'] = 'Buku Pintar';
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/keranjang', $data);
			$this->load->view('templates/footer');
	}

	public function hapuskeranjang($id_produk)
	{
			$data['judul'] = 'Buku Pintar';
				$this->load->model('Produk_model', 'produk');
			$data['detail'] = $this->produk->get_detail($id_produk);
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/hapuskeranjang', $data);
			$this->load->view('templates/footer');
	}

	public function checkout()
	{
			$data['judul'] = 'Buku Pintar';
			$this->load->model('Produk_model', 'produk');
			$data['kurir'] = $this->produk->get_kurir();
			$this->load->view('templates/navbar', $data);
			$this->load->view('home/checkout', $data);
			$this->load->view('templates/footer');
	}

	public function nota($id_pembelian_barusan)
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->model('Produk_model', 'produk');
		$data['nota'] = $this->produk->get_pembelian($id_pembelian_barusan);
		$data['bukti'] = $this->produk->get_pembelian_produk($id_pembelian_barusan);
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/nota', $data);
		$this->load->view('templates/footer');
	}	

	public function konfirmasi($id_pembelian_barusan)
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->model('Produk_model', 'produk');
		$data['nota'] = $this->produk->get_pembelian($id_pembelian_barusan);
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/konfirmasi', $data);
		$this->load->view('templates/footer');
	}

	public function profil()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->model('Produk_model', 'produk');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/profil', $data);
		$this->load->view('templates/footer');
	}
}