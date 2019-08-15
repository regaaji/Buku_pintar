<?php 

class Kurir extends CI_Controller
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
        $this->load->view('admin/kurir/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }


    public function editkurir($id_kurir)
    {
        $data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'admin');

         $data['edit'] = $this->admin->get_edit_kurir($id_kurir);


        $this->form_validation->set_rules('nama_kurir', 'Nama Kurir', 'required');
        $this->form_validation->set_rules('tarif_kurir', 'Tarif', 'required|numeric');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/kurir/editkurir', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
                 
             $data = [
                'nama_kurir' => $this->input->post('nama_kurir', true),
                'tarif_kurir' => $this->input->post('tarif_kurir', true)
            ];  

             $this->db->where('id_kurir', $this->input->post('id_kurir', true));
             $this->db->update('kurir', $data);
            $this->session->set_flashdata('message', '<script>alert("Data Diubah");</script>');
            redirect('admin/kurir');   
        }  
    }

    public function tambahkurir()
    {
        $data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'menu');

          $this->form_validation->set_rules('nama_kurir', 'Nama Kurir', 'required');
          $this->form_validation->set_rules('tarif_kurir', 'Tarif Kurir', 'required|numeric');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/kurir/tambahkurir', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
            $data = [
                'nama_kurir' => $this->input->post('nama_kurir', true),
                'tarif_kurir' => $this->input->post('tarif_kurir', true)
            ];  

            $this->db->insert('kurir', $data);
            $this->session->set_flashdata('message', '<script>alert("Data Ditambahkan");</script>');
            redirect('admin/kurir');
        }
    }


    public function hapuskurir($id_kurir)
    {
        //$this->db->where('id', $id);
        $this->db->delete('kurir', ['id_kurir' => $id_kurir]);
         $this->session->set_flashdata('message', '<script>alert("Data berhasil dihapus")</script>');
        redirect('admin/kurir/');
    }
}
 ?>