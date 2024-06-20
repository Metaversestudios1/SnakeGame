<?php
class LoginModel extends CI_Model{
 function get_all_customer() {
    $this->db->where('deleted_at IS NULL');
    $query = $this->db->get('customers');
    return $query->result_array();
}


 function check_login($username,$password) {

// Query the admin table to check if the username and password match
$query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));

// If there is a row returned, the credentials are valid
if ($query->num_rows() > 0) {
    return $query->row();
} else {
    return false;
}
}
}

?>