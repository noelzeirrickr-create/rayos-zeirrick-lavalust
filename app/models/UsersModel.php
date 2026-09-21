<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersModel extends Model {

    protected $table = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function all() {
        return $this->db->table($this->table)->get_all();
    }

    public function findByUsername(string $username) {
        return $this->db
            ->table($this->table)
            ->where('username', $username)
            ->get();
    }

}
?>