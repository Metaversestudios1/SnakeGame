<?php
if (!function_exists('has_permission')) {
    function has_permission($permission_name) {
        $CI = &get_instance();
        $permissions = $CI->session->userdata('permissions');
        return in_array($permission_name, $permissions);
    }
}

?>