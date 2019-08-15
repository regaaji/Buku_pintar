<?php 

/**
 * 
 */
class Pembelian extends CI_Controller
{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
    }

    public function index()
    {

        $data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'menu');


        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/pembelian/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function detailpembelian($id_pembelian)
    {
    	$data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'menu');
         $data['detail'] = $this->menu->get_pembelian($id_pembelian);
         $data['pecah'] = $this->menu->get_id_pembelian($id_pembelian);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/pembelian/editpembelian', $data);
        $this->load->view('admin/templates/footer', $data);
    }

     public function hapuspembelian($id_pembelian)
    {
        //$this->db->where('id', $id);
        $this->db->delete('pembelian', ['id_pembelian' => $id_pembelian]);
        $this->db->delete('pembelian_produk', ['id_pembelian' => $id_pembelian]);
         $this->session->set_flashdata('message', '<script>alert("Data berhasil dihapus")</script>');
        redirect('admin/pembelian/');
    }
}