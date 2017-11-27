<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('facebook');
		$this->load->helper('url');
		$this->load->model('welcome_model');
	}

	public function index()
	{

			

		if($this->session->userdata('login') == true){
			redirect('welcome/profile');
			
		}
		
		
		if ($this->facebook->logged_in())
		{
			$user = $this->facebook->user();
			
			if ($user['code'] === 200)
			{
				$this->session->set_userdata('login',true);
				$this->session->set_userdata('user_profile',$user['data']);

				redirect('welcome/profile');
			}

		}
		
		 else {
	
			$contents['link'] = $this->facebook->login_url();
		
			$this->load->view('login_view',$contents);
		
	
		}
	}
	
	public function profile(){
		if($this->session->userdata('login') != true){
			redirect('');
		}
		$contents['user_profile'] = $this->session->userdata('user_profile');
		$this->load->view('welcome_view',$contents);
		
	}

	public function home(){
		$data['page'] = 'home';
		$this->load->view('welcome_view',$data);
		unset($data);
	}

	public function proses_simpan()
	{	
		$id = $this->input->post('idFB');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$tlp= $this->input->post('tlp');
		$gender= $this->input->post('gender');
		$alamat= $this->input->post('alamat');
	
		$data = array(
			'id_facebook' => $id,
			'nama' => $nama,
			'email' => $email,
			'tlp' => $tlp,
			'gender' => $gender,
			'alamat' => $alamat
			);

		$this->welcome_model->simpan($data);
		redirect('welcome/home');
		unset($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('');
		
	}
	
	
	
}
