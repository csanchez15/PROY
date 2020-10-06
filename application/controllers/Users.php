<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','email','pagination'));
        $this->load->helper(array('users/users_rules','string'));
        $this->load->model('ModelsUsers');
    }

public function index($offset = 0){
    
    $data = $this->ModelsUsers->getUsers();
   
        $config['base_url'] = base_url('users/index');
        $config['per_page'] = 3;
        $config['total_rows'] = count($data);

        $config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close'] 	= '</ul></nav></div>';
        $config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] 	= '</span></li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] 	= '</span></li>';
        $config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] 	= '</span></li>';

        $this->pagination->initialize($config);

        $page = $this->ModelsUsers->getPaginate($config['per_page'],$offset);
        
        $this->getTemplate($this->load->view('admin/show_users',array('data' => $page),true));

        

}



    public function update(){


        //evitar entrardas po url

            if($this->input->server('REQUEST_METHOD')== 'POST'){

                $correo = $this->input->post('correo');
                $id = $this->input->post('id');
                $curso = $this->input->post('curso');
                $fechase = $this->input->post('fech');
                $seccion = $this->input->post('sec');
                $notas = $this->input->post('notas');


        $this->form_validation->set_rules(getUpdateUserRules());

        if($this->form_validation->run() === FALSE){
            $view = $this->load->view('admin/edit_user','',true);
            $this->getTemplate($view);
        }else{
          
            $asesoriaup =array (

              
              
                'correo1' =>$correo,
                'id' =>$id,                
                'id_curso' =>$curso,
                'dia' =>$fechase,
                'id_seccion' =>$seccion,
                'notas' =>$notas,



            );
            $this->ModelsUsers->updateUser($id,$asesoriaup);
            $this->session->set_flashdata('msg','La asesoria Nº '.$id.' fue actualizada correctamente');
            redirect('users');
        }

    }else{

            show_404();

    }




   }



   public function create(){

    $vista = $this->load->view ('admin/create_user','',true);

    
    $this->getTemplate($vista);



   }


   
   // añadir

   public function store(){

    
        $correo = $this->input->post('correo');
        $curso = $this->input->post('curso');
        $fechase = $this->input->post('fech');
        $seccion = $this->input->post('sec');
        
        $notas = $this->input->post('notas');


        $this->form_validation->set_rules(getCreateUserRules());
        if ($this->form_validation->run()==FALSE){

                $this->output->set_status_header(400);
    
        }else{
            
            //insercion de datos :D


            $clientes =array (

             
                'correo1' =>$correo,
                'id_curso' =>$curso,
                'dia' =>$fechase,
                'id_seccion' =>$seccion,
                'notas' =>$notas,




            );

            if (!$this->ModelsUsers->save($clientes)){

                $this->output->set_status_header(500);

            }else{


        
                 $this->sendEmail($clientes);
                  $this->session->set_flashdata('msg','La asesoria a sido registrada correctamente');
                  redirect(base_url('users'));
            }


        }

        $vista =$this->load->view('admin/create_user','',true);
        $this->getTemplate($vista);

   }
   

   //editar :D

   public function edit($id = 0){
    $user = $this->ModelsUsers->getUser($id);

   // echo'<pre>';
    //var_dump($user);
    //echo'</pre>';
        $view = $this->load->view('admin/edit_user',array('user' => $user),true);
        $this->getTemplate($view);

}


public function delete(){

    $id = $this->input->post('id',true);

    if(empty($id)){

        $this->output
        ->set_status_header(400)
        ->set_output(json_encode(array('msg'=>'El id no puede ser vacio')));

    }else{
        $this->ModelsUsers->deleteUser($id);
        $this->output
            ->set_status_header(200);
    }
}



public function sendEmail($clientes){

    $this->email->from('bienestar Universitario@autonoma.edu.pe', 'Autonoma del Peru');
    $this->email->to($clientes['correo1']);

    $this->email->subject('Asesoria Programada');

    $vista = $this->load->view('emails/welcome2',$clientes,TRUE);

    $this->email->message($vista);

    $this->email->send();


  

}








   public function getTemplate($view){
    $data = array(
        'head' => $this->load->view('layout/head','',TRUE),
        'nav' => $this->load->view('layout/nav','',TRUE),
        'aside' => $this->load->view('layout/aside','',TRUE),
        'content' => $view,
        'footer' => $this->load->view('layout/footer','',TRUE),
    );

    $this->load->view('dashboard',$data);
}
   
   
}
    
