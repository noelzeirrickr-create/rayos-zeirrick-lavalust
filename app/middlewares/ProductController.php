<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load ProductModel
        $this->call->model('ProductModel');
    }

    /**
     * Display all products
     */
    public function index()
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $data['products'] = $this->ProductModel->getAll();

        $this->call->view('products/index', $data);
    }

    /**
     * Show create product form
     */
    public function create()
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $this->call->view('products/create');
    }

    /**
     * Save new product
     */
    public function store()
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $product_name = $this->io->post('product_name');
        $description  = $this->io->post('description');
        $price        = $this->io->post('price');
        $quantity     = $this->io->post('quantity');

        // Simple validation
        if (
            empty($product_name) ||
            empty($price) ||
            $quantity === ''
        ) {
            $this->session->set_flashdata(
                'error',
                'Please fill in all required fields.'
            );

            redirect('products/create');
        }

        $data = [
            'product_name' => $product_name,
            'description'  => $description,
            'price'        => $price,
            'quantity'     => $quantity,
        ];

        $this->ProductModel->create($data);

        $this->session->set_flashdata(
            'success',
            'Product added successfully.'
        );

        redirect('products');
    }

    /**
     * Show edit product form
     */
    public function edit($id)
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $product = $this->ProductModel->getById($id);

        if (!$product) {
            $this->session->set_flashdata(
                'error',
                'Product not found.'
            );

            redirect('products');
        }

        $data['product'] = $product;

        $this->call->view('products/edit', $data);
    }

    /**
     * Update product
     */
    public function update($id)
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $product_name = $this->io->post('product_name');
        $description  = $this->io->post('description');
        $price        = $this->io->post('price');
        $quantity     = $this->io->post('quantity');

        if (
            empty($product_name) ||
            empty($price) ||
            $quantity === ''
        ) {
            $this->session->set_flashdata(
                'error',
                'Please fill in all required fields.'
            );

            redirect('products/edit/' . $id);
        }

        $data = [
            'product_name' => $product_name,
            'description'  => $description,
            'price'        => $price,
            'quantity'     => $quantity,
        ];

        $this->ProductModel->update($id, $data);

        $this->session->set_flashdata(
            'success',
            'Product updated successfully.'
        );

        redirect('products');
    }

    /**
     * Delete product
     */
    public function delete($id)
    {
        // Protect page
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }

        $product = $this->ProductModel->getById($id);

        if (!$product) {
            $this->session->set_flashdata(
                'error',
                'Product not found.'
            );

            redirect('products');
        }

        $this->ProductModel->delete($id);

        $this->session->set_flashdata(
            'success',
            'Product deleted successfully.'
        );

        redirect('products');
    }
}