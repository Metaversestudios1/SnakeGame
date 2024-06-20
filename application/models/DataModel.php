<?php
class DataModel extends CI_Model {

 function get_all_customer() {
    $this->db->where('deleted_at IS NULL');
    $query = $this->db->get('customers');
    return $query->result_array();
}


 function insert_customer($name,$email,$address) {
    $data = array(
        'name' => $name,
        'email' => $email,
        'address' => $address,
        'signup_date'=>date('Y-m-d h:i A')
    );
    return $this->db->insert('customers', $data);
}
function insert_game($time_limit,$entry_fee,$num_players,$profit_sharing) {
    $data = array(
        'time_limit' => $time_limit,
        'entry_fee' => $entry_fee,
        'num_players' => $num_players,
        'profit_sharing' => $profit_sharing,
    
    );
    return $this->db->insert('game_slots', $data);
}
function get_all_game() {
    $this->db->where('deleted_at IS NULL');
    $query = $this->db->get('game_slots');
    return $query->result_array();
}

function insert_store($name,$price,$expiry_date) {
    $data = array(
        'name' => $name,
        'price' => $price,
        'expiry_date' => $expiry_date,
       // 'profit_sharing' => $profit_sharing,
    
    );
    return $this->db->insert('store_items', $data);
}
function get_all_store() {
    $query = $this->db->get('store_items');
    return $query->result_array();
}



function insert_contact($name,$url) {
    $data = array(
        'website_name' => $name,
        'website_url' => $url,  
    );
    return $this->db->insert('contact_us', $data);
}
function get_all_contact() {
    $this->db->where('deleted_at IS NULL');
    $query = $this->db->get('contact_us');
    return $query->result_array();
}



function insert_term($title,$description) {
    $data = array(
        'title' => $title,
        'description' => $description,
    );
    return $this->db->insert('terms_conditions', $data);
}
function get_all_term() {
    $this->db->where('deleted_at IS NULL');
    $query = $this->db->get('terms_conditions');
    return $query->result_array();
}


public function activate_entry($id, $table_name) {
    $this->db->where('id', $id);
    return $this->db->update($table_name, array('status' => 1)); // Update the status to 1
}
public function inactivate_entry($id, $table_name) {
    $this->db->where('id', $id);
    return $this->db->update($table_name, array('status' => 0)); // Update the status to 1
}
public function delete($id, $table_name) {
    $this->db->where('id', $id);
    return $this->db->update($table_name, array('deleted_At' => date('Y-m-d h:i A'))); // Update the status to 1
}

}
?>