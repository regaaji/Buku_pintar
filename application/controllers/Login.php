<?php 


 class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->view('templates/navbar', $data);
		$this->load->view('login/index');			
		$this->load->view('templates/footer');	
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password_pelanggan', 'Password', 'required');
		 
		if( $this->form_validation->run() === FALSE ){
				$data['judul'] = 'E-Laundry | Masuk';

			$this->load->view('templates/navbar', $data);
			$this->load->view('login/index');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');

			$cek = $this->Daftar_model->cekUsername($username);
			if ( $cek->num_rows() === 1 ) {
				$password_pelanggan = $this->input->post('password_pelanggan');

				if ( password_verify($password_pelanggan, $cek->row()->password_pelanggan) ) {
	
					 $session['username'] = $cek->row()->username;
					 $session['email_pelanggan'] = $cek->row()->email_pelanggan;
					 $session['telepon_pelanggan'] = $cek->row()->telepon_pelanggan;
					 $session['alamat_pelanggan'] = $cek->row()->alamat_pelanggan;
					 $session['nama_pelanggan'] = $cek->row()->nama_pelanggan;
					 $session['id_pelanggan'] = $cek->row()->id_pelanggan;
					 $session['masuk_in'] = TRUE;


					// $data_session = array(
					// 	'nama_lengkap' => $cek->row()->nama_lengkap,
					// 	'logged_in' => TRUE 
					// );


					$this->session->set_userdata($session);
				   redirect('home/index');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Password Salah
                    </div>');
					//$this->session->set_data('message', 'Salah');
					redirect('login/index');
				}
			} else {
				//$this->session->set_flashdata('message', 'Gagal');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                     Anda telah gagal masuk
                    </div>');
				redirect('login/index');
			}
		}
	}

	public function daftar()
	{
		$data['judul'] = 'Buku Pintar';
		$this->load->view('templates/navbar', $data);
		$this->load->view('login/daftar');			
		$this->load->view('templates/footer');	
	}

	public function proses_daftar()
	{
		$this->form_validation->set_rules('nama_pelanggan', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password_pelanggan', 'Password', 'required');
		$this->form_validation->set_rules('email_pelanggan', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telepon_pelanggan', 'Telepon', 'required|numeric');
		$this->form_validation->set_rules('alamat_pelanggan', 'Alamat', 'required');
 
		if( $this->form_validation->run() === FALSE ){
			$data['judul'] = 'E-Laundry | Daftar';
			$this->load->view('templates/navbar', $data);
			$this->load->view('login/daftar');			
			$this->load->view('templates/footer');	
		} else {
			$data = [
				'nama_pelanggan' => $this->input->post('nama_pelanggan', true),
				'username' => $this->input->post('username', true),
				'password_pelanggan' => password_hash($this->input->post('password_pelanggan'), PASSWORD_DEFAULT),
				'email_pelanggan' => $this->input->post('email_pelanggan'),
				'telepon_pelanggan' => $this->input->post('telepon_pelanggan', true),
				'alamat_pelanggan' => $this->input->post('alamat_pelanggan', true)

			];

			$insert = $this->Daftar_model->daftar($data);

			if ( $insert ) {
				$this->session->set_flashdata('flash', 'Ditambahkan');
				//echo "<script>alert();</script>";
				redirect('login/index');
			} else {
				echo "<script>
				alert('Terjadi kesalahan saat daftar');
				document.location.href = 'login/daftar'; 
				</script>";
			}

		}

		
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('home/index');
	}
}