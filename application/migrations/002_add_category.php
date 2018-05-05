<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Category extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'category_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100'
                        ),'details' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        )
                        ,'type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('Category');
        }

        public function down()
        {
                $this->dbforge->drop_table('Category');
        }
}