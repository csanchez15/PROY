<?php
class Auth extends CI_Model{
    public function __construct(){
        // parent::__construct();
        $this->load->database();
    }
    public function login($usr, $pass){
        $data = $this->db->get_where('usuarios',array('correo' => $usr,'contraseña' => $pass));
        if(!$data->result()){
            return false;
        }
        return $data->row();
    }
}
