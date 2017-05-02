<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');		
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if($this->form_validation->run()==false)
		{
			$this->load->view('login_view');
		}
		else
		{
			redirect('Pegawai','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id'=>$row->id,
					'username'=> $row->username
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function daftar()
	{
		# code...
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'NAME','required|callback_cekDbDaftar');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         //$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) 
         {
             $this->load->view('login_view');
         }
         else
         {
 			 $this->load->model('User'); //call model
             $data['nama']   =    $this->input->post('nama');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
 			
             $this->User->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('register_sukses',$pesan);
		}
	}
	public function cekDbDaftar()
	{
		$this->load->model('user');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$result = $this->user->cekDaftar($username);
		if($result){
			$this->form_validation->set_message('cekDbDaftar',"Login Gagal Username dan Password tidak valid");
			return false;
		}else{
			
			return true;
		}
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

 ?>