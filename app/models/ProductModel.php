<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductModel extends Model
{
    protected $table = 'products';

    public function __construct()
    {
        parent::__construct();
    }

    // Get all products
    public function getAll()
    {
        return $this->db
            ->table($this->table)
            ->get_all();
    }

    // Get product by ID
    public function getById($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->get();
    }

    // Add product
    public function create($data)
    {
        return $this->db
            ->table($this->table)
            ->insert($data);
    }

    // Update product
    public function update($id, $data)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->update($data);
    }

    // Delete product
    public function delete($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->delete();
    }
}