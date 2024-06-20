<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
		$this->load->model('LoginModel');
        $this->load->library('form_validation');
		$this->check_login();
		
    }
	function check_login(){
        if ($this->session->userdata('admin_id')) {
            // User is not logged in, redirect to login page
            redirect('user_list');
        }
    } 
	
 	public function login(){
        $this->form_validation->set_rules('username', 'Name', 'required');	
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('login-default');
						$this->load->view('login');						
				} else {				
					$username = $this->input->post('username');
					$password= $this->input->post('password');
				
					if (!empty($username)) {						
						$result = $this->LoginModel->check_login($username,$password);
						if($result){
							$this->session->set_userdata(array(
								'admin_id' => $result->id,
								'admin_username' => $result->username
							));
						$this->session->set_flashdata('success_message', 'Login Successfully.');
						redirect('user_list');
						}else{
							$this->session->set_flashdata('danger_message', 'Username and Password is wrong.');
						    redirect(base_url());
						}
					} else {
						$this->load->view('login-default');
						$this->load->view('login');
						
					}
				}

    }	
				
				
				
	
}
