<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'user_id' => array(
                        'type' => 'INT',
                        'constraint' => 10,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE
                ),
                'user_name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => FALSE
                ),
                'email' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                        'null' => FALSE,
                ),
                'password' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'null' => FALSE,
                ),   
                'starus' => array(
                    'type' => 'TINYINT',
                    'constraint' => '1',
                    'null' => FALSE,
                ),
            ));
            $this->dbforge->add_key('user_id', TRUE);
            $this->dbforge->create_table('users');
        }

        public function down()
        {
            $this->dbforge->drop_table('users');
        }
}