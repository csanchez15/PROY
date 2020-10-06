<?php
if(!function_exists('getUpdateUserRules')){
    function getUpdateUserRules(){
        return array(

            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'valid_email' => 'El %s tiene que contener una direccion valida',
                )
            ),
          
        
            array(
                'field' => 'fech',
                'label' => 'Fecha de Asesoria',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
           
         
            array(
                'field' => 'notas',
                'label' => 'Notas',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                    'max_length' => 'El %s es demasiado grande',
                )
            ),
            
        );
    }
}
if(!function_exists('getCreateUserRules')){
    function getCreateUserRules(){
        return array(
            array(
                'field' => 'correo',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    'valid_email' => 'El %s tiene que contener una direccion valida',
                )
            ),
            array(
                'field' => 'curso',
                'label' => 'Curso',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                    
                    
                )
            ),
        
            array(
                'field' => 'fech',
                'label' => 'Fecha de Asesoria',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerido.',
                )
            ),
           
            array(
                'field' => 'sec',
                'label' => 'Seccion',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'El %s es requerida.',
                )
            ),
            array(
                'field' => 'notas',
                'label' => 'Notas',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'La %s es requerida.',
                    'max_length' => 'El %s es demasiado grande',
                )
            ),
            
        );
    }
}
