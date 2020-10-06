<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'nombre_usuario' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE,
                        ),
                        'correo' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'contraseña' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                         ),
                         'status' => array(
                                 'type' => 'TINYINT',
                                'constraint' => '1',
                       
                         ),
                        'rango' => array(
                         'type' => 'TINYINT',
                           'constraint' => '1',
                           'null' => TRUE,
            ),
                ));

                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('usuarios');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuarios');
        }
}