<?php 

class Admin extends CI_Controller
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

         $data['kurir'] = $this->menu->getCountKurir();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/admin/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }



}
 ?>