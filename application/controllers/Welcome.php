<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('DataModel');
		
    }
	public function activate($id, $table_name) {
        if ($this->DataModel->activate_entry($id, $table_name)) {
            // Set a success message (optional)
            $this->session->set_flashdata('message', 'Entry activated successfully.');
        } else {
            // Set an error message (optional)
            $this->session->set_flashdata('message', 'Failed to activate entry.');
        }
		redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
	public function inactivate($id, $table_name) {
        if ($this->DataModel->inactivate_entry($id, $table_name)) {
            // Set a success message (optional)
            //$this->session->set_flashdata('message', 'Entry activated successfully.');
        } else {
            // Set an error message (optional)
            //$this->session->set_flashdata('message', 'Failed to activate entry.');
        }
		redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
	public function delete($id, $table_name) {
        if ($this->DataModel->delete($id, $table_name)) {
            // Set a success message (optional)
            $this->session->set_flashdata('message', 'Entry deleted successfully.');
        } else {
            // Set an error message (optional)
            $this->session->set_flashdata('message', 'Failed delete entry.');
        }
		redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
	public function add(){
	{
		$this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
            $this->load->view('add');
			$this->load->view('footer');
        } else {
            $name = $this->input->post('name');
			$email= $this->input->post('email');
			$address=$this->input->post('address');
            if (!empty($name)) {
                $this->DataModel->insert_customer($name,$email,$address);
				$this->session->set_flashdata('message', 'Record Inserted Successfully.');
        
                redirect('customer_list');
            } else {
                // Handle empty input case (should not happen due to form validation)
				$this->load->view('header');
                $this->load->view('add_game');
				$this->load->view('footer');
            }
		}
	}
	}
	public function customer_list()
	{
        $data['entries'] = $this->DataModel->get_all_customer();      
		$this->load->view('header');
		$this->load->view('customer_list',$data);
		$this->load->view('footer');
	}
	public function add_game(){
		{
			$this->form_validation->set_rules('time_limit', 'time slot', 'required');	
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('header');
				$this->load->view('add_game');
				$this->load->view('footer');
			} else {
				$time_limit = $this->input->post('time_limit');
				$entry_fee= $this->input->post('slot_fee');
				$num_players=$this->input->post('players_per_slot');
				$profit_sharing=$this->input->post('profit_sharing');
				if (!empty($time_limit)) {
					$this->DataModel->insert_game($time_limit,$entry_fee,$num_players,$profit_sharing);
					$this->session->set_flashdata('message', 'Record Inserted Successfully.');
        
					redirect('game_list');
				} else {
					// Handle empty input case (should not happen due to form validation)
					$this->load->view('header');
					$this->load->view('add_game');
					$this->load->view('footer');
				}
			}
		}
		}
		public function game_list()
		{
			$data['entries'] = $this->DataModel->get_all_game();      
			$this->load->view('header');
			$this->load->view('game_list',$data);
			$this->load->view('footer');
		}

		public function add_store(){
			{
				$this->form_validation->set_rules('name', 'Name', 'required');	
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('header');
					$this->load->view('add_store');
					$this->load->view('footer');
				} else {
					$name = $this->input->post('name');
					$price= $this->input->post('price');
					$expiry_date=$this->input->post('expiry_date');
				//	$profit_sharing=$this->input->post('profit_sharing');
					if (!empty($name)) {
						$this->DataModel->insert_store($name,$price,$expiry_date);
						$this->session->set_flashdata('message', 'Record Inserted Successfully.');
        
						redirect('store_list');
					} else {
						// Handle empty input case (should not happen due to form validation)
						$this->load->view('header');
						$this->load->view('add_store');
						$this->load->view('footer');
					}
				}
			}
			}
			public function store_list()
			{
				$data['entries'] = $this->DataModel->get_all_store();      
				$this->load->view('header');
				$this->load->view('store_list',$data);
				$this->load->view('footer');
			}

			public function add_term(){
				{
					$this->form_validation->set_rules('title', 'title', 'required');	
					if ($this->form_validation->run() == FALSE) {
						$this->load->view('header');
						$this->load->view('add_term');
						$this->load->view('footer');
					} else {
						$title = $this->input->post('title');
						$description= $this->input->post('description');
						if (!empty($title)) {
							$this->DataModel->insert_term($title,$description);
							$this->session->set_flashdata('message', 'Record Inserted Successfully.');
        
							redirect('term_list');
						} else {
							// Handle empty input case (should not happen due to form validation)
							$this->load->view('header');
							$this->load->view('add_term');
							$this->load->view('footer');
						}
					}
				}
				}
				public function term_list()
				{
					$data['entries'] = $this->DataModel->get_all_term();      
					$this->load->view('header');
					$this->load->view('term_list',$data);
					$this->load->view('footer');
				}
		
				public function add_contact(){
					{
						$this->form_validation->set_rules('name', 'Name', 'required');	
						if ($this->form_validation->run() == FALSE) {
							$this->load->view('header');
							$this->load->view('add_contact');
							$this->load->view('footer');
						} else {
							$name = $this->input->post('name');
							$url= $this->input->post('url');
							//$expiry_date=$this->input->post('expiry_date');
						//	$profit_sharing=$this->input->post('profit_sharing');
							if (!empty($name)) {
								$this->DataModel->insert_contact($name,$url);
								
								redirect('contact_list');
							} else {
								// Handle empty input case (should not happen due to form validation)
								$this->load->view('header');
								$this->load->view('add_contact');
								$this->load->view('footer');
							}
						}
					}
					}
					public function contact_list()
					{
						$data['entries'] = $this->DataModel->get_all_contact();      
						$this->load->view('header');
						$this->load->view('contact_list',$data);
						$this->load->view('footer');
					}
	
}
