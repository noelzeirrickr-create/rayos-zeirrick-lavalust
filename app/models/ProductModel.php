<?php

class ProductModel
{
    protected $db;

    public function __construct()
    {
        $this->db = db();
    }

    public function getAll()
    {
        return $this->db
            ->table('products')
            ->get();
    }

    public function getById($id)
    {
        return $this->db
            ->table('products')
            ->where('id', $id)
            ->get();
    }

    public function create($data)
    {
        return $this->db
            ->table('products')
            ->insert($data);
    }

    public function update($id, $data)
    {
        return $this->db
            ->table('products')
            ->where('id', $id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this->db
            ->table('products')
            ->where('id', $id)
            ->delete();
    }
}