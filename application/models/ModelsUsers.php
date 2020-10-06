<?php
class ModelsUsers extends CI_Model{
    public function __construct(){
        // parent::__construct();
        $this->load->database();
    }

    public function save($clientes){
    
        $this->db->trans_start();

            $this->db->insert('asesoria',$clientes);
            



        $this->db->trans_complete();
        return !$this->db->trans_status() ? false : true;
    }


public function getUsers(){

    $sql = $this->db->order_by('id','DESC')->get('asesoria');
    return $sql->result();

}
public function getPaginate($limit,$offset){
    $sql = $this->db->order_by('id','DESC')->get('asesoria',$limit,$offset);
    return $sql->result();
}

public function updateUser($id,$clientesup){
    $this->db->where('id',$id);
    $this->db->update('asesoria',$clientesup);
}
public function deleteUser($id){
    $this->db->where('id',$id);
    $this->db->delete('asesoria');
}

public function getUser($id){
    // SELECT *
    // FROM usuarios 
    // JOIN medicos 
    //     ON usuarios.id = clientes.id_usuario
    // WHERE usuarios.id = $id LIMIT 1
   
    $user = $this->db->get_where('asesoria',array('id' => $id),1);
    return $user->row_array();
}


}
