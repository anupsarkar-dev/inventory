<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'fname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'uname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),

                        'mobile' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                         'pass' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),'type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),'status' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1',
                                'default' => '1'
                        )
                        , 'uppdated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('Users');
        }

        public function down()
        {
                $this->dbforge->drop_table('Users');
        }
}