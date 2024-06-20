<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

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

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Load the URL helper
        $this->load->model('AdminModel');
        $this->load->library('form_validation');
        $this->check_login();
    }
    function check_login(){
        if (!$this->session->userdata('admin_id')) {
            // User is not logged in, redirect to login page
            redirect('login');
        }
    }
    public function activate($id, $table_name)
    {
        if ($this->AdminModel->activate_entry($id, $table_name)) {
            // Set a success message (optional)
            $this->session->set_flashdata('success_message', 'Entry activated successfully.');
        } else {
            // Set an error message (optional)
            $this->session->set_flashdata('danger_message', 'Failed to activate entry.');
        }
        redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
    public function inactivate($id, $table_name)
    {
        if ($this->AdminModel->inactivate_entry($id, $table_name)) {
            // Set a success message (optional)
            $this->session->set_flashdata('success_message', 'Entry inactivated successfully.');
        } else {
            // Set an error message (optional)
            $this->session->set_flashdata('danger_message', 'Failed to activate entry.');
        }
        redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
    public function delete($id, $table_name)
    {
        if ($this->AdminModel->delete($id, $table_name)) {
            // Set a success message (optional)
            $this->session->set_flashdata('success_message', 'Entry deleted successfully.');
        } else {
            // Set an error message (optional)
            $this->session->set_flashdata('danger_message', 'Failed delete entry.');
        }
        redirect($_SERVER['HTTP_REFERER']); // Redirect to the list page
    }
    public function user_list()
    {
        // print_r($this->session->userdata('admin_id'));exit;
        $data['entries'] = $this->AdminModel->get_all_users();
        $this->load->view('header');

        $this->load->view('admin/user_list', $data);
        $this->load->view('footer');
    }
    public function add_user()
    {
         if (!empty($this->uri->segment(2))) {

            $data['user'] = $this->AdminModel->get_single_user($this->uri->segment(2));
            $this->form_validation->set_rules('username', 'Name', 'required');
        
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/add_user',$data);
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $contact_number = $this->input->post('contact_number');
                $password = $this->input->post('password');
                if (!empty($username)) {
                    $this->AdminModel->update_user($username, $email, $contact_number,$password);
                    $this->session->set_flashdata('success_message', 'User Updated Successfully.');

                    redirect('user_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/add_user');
                    $this->load->view('footer');
                }
            }
        } else {
            $this->form_validation->set_rules('username', 'Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/add_user');
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $contact_number = $this->input->post('contact_number');
                $password = $this->input->post('password');
                if (!empty($username)) {
                    $this->AdminModel->insert_user($username, $email, $contact_number,$password);
                    $this->session->set_flashdata('message', 'Record Inserted Successfully.');
                    redirect('user_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/add_user');
                    $this->load->view('footer');
                }
            }
        }
        // exit();
    }


    public function subuser_list()
    {
        $data['entries'] = $this->AdminModel->get_all_users();
        $this->load->view('header');

        $this->load->view('admin/user_list', $data);
        $this->load->view('footer');
    }
    public function subadmin()
    {
        $data['permission'] = $this->AdminModel->get_all_permission();
        if (!empty($this->uri->segment(2))) {

            $data['subadmin'] = $this->AdminModel->get_single_subadmin($this->uri->segment(2));
            $this->form_validation->set_rules('username', 'Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/subadmin',$data);
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $permission = $this->input->post('permissions');
                
                if (!empty($username)) {
                    $this->AdminModel->update_subadmin($username, $password, $permission);
                    $this->session->set_flashdata('success_message', 'User Updated Successfully.');

                    redirect('subadmin_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/subadmin',$data);
                    $this->load->view('footer');
                }
            }
        } else {
            $this->form_validation->set_rules('username', 'Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/subadmin',$data);
                $this->load->view('footer');
            } else {
                $username = $this->input->post('username');
                $permission = $this->input->post('permissions');
                $password = $this->input->post('password');
                if (!empty($username)) {
                    $this->AdminModel->insert_subadmin($username, $password, $permission);
                    $this->session->set_flashdata('message', 'subadmin inserted Inserted Successfully.');
                    redirect('subadmin_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/subadmin',$data);
                    $this->load->view('footer');
                }
            }
        }
        // exit();
    }
    public function subadmin_list(){
        $data['entries'] = $this->AdminModel->get_all_subadmin_with_permission();
        $this->load->view('header');
        $this->load->view('admin/subadmin_list',$data);
        $this->load->view('footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        // Redirect to the login page or any other page
        redirect(base_url());
    }



    public function permission_list()
    {
        // print_r($this->session->userdata('admin_id'));exit;
        $data['entries'] = $this->AdminModel->get_all_permission();
        $this->load->view('header');

        $this->load->view('admin/permission_list', $data);
        $this->load->view('footer');
    }
    public function permission()
    {
        if (!empty($this->uri->segment(2))) {

            $data['permission'] = $this->AdminModel->get_single_permission($this->uri->segment(2));
            $this->form_validation->set_rules('name', 'Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/permission',$data);
                $this->load->view('footer');
            } else {
                $name = $this->input->post('name');
                $description = $this->input->post('description');
             
                if (!empty($name)) {
                    $this->AdminModel->update_permission($name, $description);
                    $this->session->set_flashdata('success_message', 'Permission update Successfully.');

                    redirect('permission_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/permission');
                    $this->load->view('footer');
                }
            }
        } else {
            $this->form_validation->set_rules('name', 'Name', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('header');
                $this->load->view('admin/permission');
                $this->load->view('footer');
            } else {
                $name = $this->input->post('name');
                $description = $this->input->post('description');
             
                if (!empty($name)) {
                    $this->AdminModel->insert_permission($name, $description);
                    $this->session->set_flashdata('success_message', 'Permission Inserted Successfully.');
                    redirect('permission_list');
                } else {
                    // Handle empty input case (should not happen due to form validation)
                    $this->load->view('header');
                    $this->load->view('admin/permission');
                    $this->load->view('footer');
                }
            }
        }
        // exit();
    }
}
