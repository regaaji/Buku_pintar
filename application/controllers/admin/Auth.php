<?php 
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Page';
            $this->load->view('admin/templates/auth_header', $data);
            $this->load->view('admin/auth/login');
            $this->load->view('admin/templates/auth_footer');
        } else {
            //validasi loginnya
            $this->_login();
        }
    }


    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        //jika adminya ada
        if ($admin) {
            //return var_dump($admin);
            //jika adminya aktif
            if ($admin['id_admin'] == 1) {
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'username' => $admin['username'],
                        'id_admin' => $admin['id_admin'],
                        'nama_lengkap' => $admin['nama_lengkap']
                    ];

                    $this->session->set_userdata($data);
                   
                    if ($admin['id_admin'] == 1) {
                        //return var_dump($this->session->userdata($data));
                       
                        redirect('admin/admin');
                
                    } else {

                        redirect('admin/assas');
                    }
                } else {
                    $this->session->set_flashdata('message', '<script>alert("Password salah");</script>');
                    redirect('admin/auth');
                }
            } else {
                $this->session->set_flashdata('message', '<script>alert("Username tidak aktif");</script>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<script>alert("Username tidak ada!");</script>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_admin');

        $this->session->set_flashdata('message', '<script>alert("Kamu berhasil logout!");</script>');
        redirect('admin/auth');
    }

}
 ?>