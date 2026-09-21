<?php

class Add_is_active_to_users_table {

    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        if (!$this->_lava->dbforge->table_exists('users')) {
            return;
        }

        if (!$this->_lava->dbforge->column_exists('users', 'is_active')) {
            $this->_lava->dbforge->add_column('users', [
                'is_active' => [
                    'type'       => 'TINYINT',
                    'constraint' => 1,
                    'unsigned'   => TRUE,
                    'null'       => FALSE,
                    'default'    => 1,
                ],
            ]);
        }
    }

    public function down()
    {
        if ($this->_lava->dbforge->table_exists('users')) {
            $this->_lava->dbforge->drop_column('users', 'is_active');
        }
    }
}