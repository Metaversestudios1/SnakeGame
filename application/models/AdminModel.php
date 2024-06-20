<?php
class AdminModel extends CI_Model
{
    function get_all_users()
    {
        $this->db->where('deleted_at IS NULL');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function activate_entry($id, $table_name)
    {
        $this->db->where('id', $id);
        return $this->db->update($table_name, array('status' => 1)); // Update the status to 1
    }
    public function inactivate_entry($id, $table_name)
    {
        $this->db->where('id', $id);
        return $this->db->update($table_name, array('status' => 0)); // Update the status to 1
    }
    public function delete($id, $table_name)
    {
        $this->db->where('id', $id);
        return $this->db->update($table_name, array('deleted_At' => date('Y-m-d h:i A'))); // Update the status to 1
    }



    function insert_user($username,  $email, $contact_number, $password)
    {
        $data = array(
            'username' => $username,
            'contact_number' => $contact_number,
            'password' => $password,
            'email' => $email,
        );

        return $this->db->insert('user', $data);
    }
    function update_user($username,  $email, $contact_number, $password)
    {

        $data = array(
            'username' => $username,
            'contact_number' => $contact_number,
            'password' => $password,
            'email' => $email,
        );

        $user_id = $this->uri->segment(2); // Replace 123 with the actual ID of the user you want to update

        $this->db->where('id', $user_id);
        return $this->db->update('user', $data);
    }

    function get_single_subadmin($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('subadmin');
        if ($query->num_rows() > 0) {
            return $query->row(); // Returns a single row as an object
        } else {
            return null; // User with the given ID not found
        }
    }

    function insert_subadmin($username, $password, $permission)
    {
        $data = array(
            'username' => $username,
            'permissions' => $permission,
            'password' => $password,
            'admin_id' => $this->session->userdata('admin_id'),
        );

        return $this->db->insert('subadmin', $data);
    }
    function get_all_subadmin()
    {
        $this->db->where('deleted_at IS NULL');
        $query = $this->db->get('subadmin');
        return $query->result_array();
    }
    function update_subadmin($username, $password, $permission)
    {

        $data = array(
            'username' => $username,
            'permissions' => $permission,
            'password' => $password,
           // 'admin_id' => $this->session->userdata('admin_id'),
        );

        $user_id = $this->uri->segment(2); // Replace 123 with the actual ID of the user you want to update

        $this->db->where('id', $user_id);
        return $this->db->update('subadmin', $data);
    }
    public function insert_permission($name, $description)
    {
        $data = array(
            'name' => $name,
            'description' => $description,

        );

        return $this->db->insert('permissions', $data);
    }
    function update_permission($name, $description)
    {

        $data = array(
            'name' => $name,
            'description' => $description,

        );

        $permission_id = $this->uri->segment(2); // Replace 123 with the actual ID of the user you want to update

        $this->db->where('id', $permission_id);
        return $this->db->update('permissions', $data);
    }

    function get_single_permission($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('permissions'); // Assuming your table is named 'user'

        if ($query->num_rows() > 0) {
            return $query->row(); // Returns a single row as an object
        } else {
            return null; // User with the given ID not found
        }
    }
    function get_all_permission()
    {
        $this->db->where('deleted_at IS NULL');
        $query = $this->db->get('permissions');
        return $query->result_array();
    }
    public function get_all_subadmin_with_permission(){
        $this->db->select('subadmin.*, permissions.name as permission_name');
        $this->db->where('subadmin.deleted_at IS NULL');
        $this->db->from('subadmin');
        $this->db->join('permissions', 'subadmin.permissions = permissions.id');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_single_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user'); // Assuming your table is named 'user'

        if ($query->num_rows() > 0) {
            return $query->row(); // Returns a single row as an object
        } else {
            return null; // User with the given ID not found
        }
    }
}
