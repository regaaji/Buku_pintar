<?php 

class Produk extends CI_Controller
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
        $this->load->view('admin/produk/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function editproduk($id_produk)
    {
    	$data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'admin');

         $data['edit'] = $this->admin->get_edit_produk($id_produk);


        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kategori_id', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required');
        $this->form_validation->set_rules('stok_produk', 'Stok', 'required');
       // $this->form_validation->set_rules('foto_produk', 'Foto Produk', 'required');
        $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('detail_produk', 'Detail Produk', 'required');
         
        if( $this->form_validation->run() === FALSE) {    
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/produk/editproduk', $data);
        $this->load->view('admin/templates/footer', $data);
        } else {
                   $config['upload_path']           = './assets/img/foto_produk';
                   $config['allowed_types']        = 'jpg|png|jpeg';
                   $config['max_size']             = 7000;
                   $config['max_width']            = 2024;
                   $config['max_height']           = 2068;
                       // $config['overwrite'] = true;  
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   if($_FILES ['foto_produk']['name']){
                    if (!$this->upload->do_upload('foto_produk')){
                        $this->form_validation->set_rules('foto_produk', 'Gambar', 'required');
                        $error = array('error' => $this->upload->display_errors());
                        return var_dump($error);
                        redirect('admin/produk/');

                            //  $this->Barang_model->ubahDataBarang();
                            //  $this->session->set_flashdata('flash', 'Diubah');
                            // redirect('admin/barang/index');

                    } else {
                        $data = $this->upload->data();

                        $filename = $data['file_name'];
                        $this->admin->updateproduk($id_produk, $filename);
                        redirect('admin/produk/');
                    }

                } else {

                    $this->admin->ubahproduk();
                    $this->session->set_flashdata('message', '
                        <script>alert("Data berhasil diubah")</script>
                        ');
                    redirect('admin/produk/');
                }
                
        }  
    }

    public function detailproduk()
    {
        $this->load->model('Admin_model', 'admin');
         echo json_encode($this->admin->getById($_POST['id_produk']));
    }

    public function tambahproduk()
    {
        $data['title'] = 'Admin Buku Pintar';
       

         $this->load->model('Admin_model', 'admin');

         $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kategori_id', 'Nama Kategori', 'required');
        $this->form_validation->set_rules('nama_penulis', 'Nama Penulis', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga Produk', 'required|numeric');
        $this->form_validation->set_rules('stok_produk', 'Stok', 'required|numeric');
       //$this->form_validation->set_rules('foto_produk', 'Foto Produk', 'required');
        $this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('detail_produk', 'Detail Produk', 'required');

        if( $this->form_validation->run() === FALSE) {  
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/produk/tambahproduk', $data);
        $this->load->view('admin/templates/footer', $data);
       } else {
            
                   $config['upload_path']           = './assets/img/foto_produk';
                   $config['allowed_types']        = 'jpg|png';
                   $config['max_size']             = 7000;
                   $config['max_width']            = 2024;
                   $config['max_height']           = 2068;
                       // $config['overwrite'] = true;  
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);

                   if($_FILES ['foto_produk']['name']){
                    if (!$this->upload->do_upload('foto_produk')){
                        $this->form_validation->set_rules('foto_produk', 'Gambar', 'required');
                        $error = array('error' => $this->upload->display_errors());
                        return var_dump($error);
                        redirect('admin/produk/');

                            //  $this->Barang_model->ubahDataBarang();
                            //  $this->session->set_flashdata('flash', 'Diubah');
                            // redirect('admin/barang/index');

                    } else {
                        $data = $this->upload->data();

                        $filename = $data['file_name'];
                        $this->admin->addproduk($filename);
                        $this->session->set_flashdata('message', '
                        <script>alert("Data berhasil ditambahkan")</script>
                        ');
                        redirect('admin/produk/');
                    }
               }     
       }
    }


    public function hapusproduk($id_produk)
    {
        //$this->db->where('id', $id);
        $this->db->delete('produk', ['id_produk' => $id_produk]);
         $this->session->set_flashdata('message', '<script>alert("Data berhasil dihapus")</script>');
        redirect('admin/produk/');
    }

 } 