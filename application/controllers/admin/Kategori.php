<?php 

/**
 * 
 */
class Kategori extends CI_Controller
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
        $this->load->view('admin/kategori/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambahkategori()
    {
    	$data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'menu');

          $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/kategori/tambahkategori', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
        	$data = [
        		'nama_kategori' => $this->input->post('nama_kategori', true)
        	];  

        	$this->db->insert('kategori', $data);
        	$this->session->set_flashdata('message', '<script>alert("Data Ditambahkan");</script>');
        	redirect('admin/kategori');
        }
    }

    public function editkategori($id_kategori)
    {
    	$data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'admin');

         $data['edit'] = $this->admin->get_edit_kategori($id_kategori);


        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/kategori/editkategori', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
                 
             $data = [
        		'nama_kategori' => $this->input->post('nama_kategori', true)
        	];  

        	 $this->db->where('id_kategori', $this->input->post('id_kategori', true));
        	 $this->db->update('kategori', $data);
        	$this->session->set_flashdata('message', '<script>alert("Data Diubah");</script>');
        	redirect('admin/kategori');   
        }  
    }

    public function hapuskategori($id_kategori)
    {
        //$this->db->where('id', $id);
        $this->db->delete('kategori', ['id_kategori' => $id_kategori]);
         $this->session->set_flashdata('message', '<script>alert("Data berhasil dihapus")</script>');
        redirect('admin/kategori/');
    }
}