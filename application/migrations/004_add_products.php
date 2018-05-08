<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'description' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'price' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'code' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                         'category_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ),'status' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1',
                                'default' => '1'
                        )
                        , 'uppdated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                ));
                $this->dbforge->add_key('id', TRUE);
                  $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE');
                $this->dbforge->create_table('products');
        }

        public function down()
        {
                $this->dbforge->drop_table('products');
        }
}