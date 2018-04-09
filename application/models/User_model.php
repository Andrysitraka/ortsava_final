<?php
 
class User_model extends CI_Model
{
    protected $table = 'user';
        
        public function userLogin($email,$mdp) {
            
            return $this->db->select('email_user,mdp_user')
                        ->from($this->table)
                        ->where('email_user', $email)
                        ->where('mdp_user', $mdp)
                        ->get()
                        ->result();
        }
        
}
 
?>