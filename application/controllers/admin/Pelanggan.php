<?php 

/**
 * 
 */
class Pelanggan extends CI_Controller
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
        $this->load->view('admin/pelanggan/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editpelanggan($id_pelanggan)
    {
    	$data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'menu');

         $data['edit'] = $this->menu->get_pelanggan($id_pelanggan);

         $this->form_validation->set_rules('username', 'Username', 'required');
         $this->form_validation->set_rules('email_pelanggan', 'Email', 'required');
         $this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required');
         $this->form_validation->set_rules('telepon_pelanggan', 'Telepon', 'required');
         $this->form_validation->set_rules('alamat_pelanggan', 'Alamat', 'required');
         $this->form_validation->set_rules('password_pelanggan', 'Password', 'required');
         
        if( $this->form_validation->run() === FALSE) {     
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/pelanggan/editpelanggan', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {        
             $data = [
        		'username' => $this->input->post('username', true),
        		'email_pelanggan' => $this->input->post('email_pelanggan', true),
        		'nama_pelanggan' => $this->input->post('nama_pelanggan', true),
        		'telepon_pelanggan' => $this->input->post('telepon_pelanggan', true),
        		'alamat_pelanggan' => $this->input->post('alamat_pelanggan', true),
        		'password_pelanggan' => $this->input->post('password_pelanggan', true)
        	];  

        	 $this->db->where('id_pelanggan', $this->input->post('id_pelanggan', true));
        	 $this->db->update('pelanggan', $data);
        	$this->session->set_flashdata('message', '<script>alert("Data Diubah");</script>');
        	redirect('admin/pelanggan'); 

        	} 

    }
}