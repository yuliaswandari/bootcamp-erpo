<?php 
 
class M_login extends CI_Model{	
	function auth_user($username,$password){
        $query=$this->db->query("SELECT * FROM t_user WHERE user_username='$username' AND user_password= to_base64('$password') LIMIT 1");
        return $query;
    }
 
   
    
 
}