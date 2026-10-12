<?php
<<<<<<< HEAD

=======
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
<<<<<<< HEAD
   public function __construct()
{
    parent::__construct();

    // Load Session Library
    $this->call->library('session');

    // Load Product Model
    $this->call->model('ProductModel');
}

    /**
     * Display all products
     */
    public function index()
    {
        $data['products'] = $this->ProductModel->getAll();

        $this->call->view('products/index', $data);
    }

    /**
     * Show create product form
     */
    public function create()
    {
        $this->call->view('products/create');
    }

    /**
     * Save new product
     */
    public function store()
    {
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
=======
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function before_action()
    {
        if (!$this->session->userdata('authenticated')) {
            $this->response->redirect(site_url('login'));
        }
    }

    public function index()
    {
        $this->call->view('products/index', [
            'products' => $this->ProductModel->get_all_products(),
            'username' => $this->session->userdata('username'),
            'success'  => $this->session->flashdata('success'),
            'error'    => $this->session->flashdata('error')
        ]);
    }

    public function create()
    {
        $this->call->view('products/create', [
            'error' => $this->session->flashdata('error')
        ]);
    }

    public function store()
    {
        $productName = trim(
            (string) $this->request->post('product_name', '')
        );

        $description = trim(
            (string) $this->request->post('description', '')
        );

        $price = $this->request->post('price');
        $quantity = $this->request->post('quantity');

        if (
            $productName === '' ||
            !is_numeric($price) ||
            !is_numeric($quantity) ||
            (float) $price < 0 ||
            (int) $quantity < 0
        ) {
            $this->session->set_flashdata(
                'error',
                'Please provide valid product information.'
            );

            $this->response->redirect(
                site_url('products/create')
            );
        }

        $this->ProductModel->create_product([
            'product_name' => $productName,
            'description'  => $description,
            'price'        => number_format(
                (float) $price,
                2,
                '.',
                ''
            ),
            'quantity'     => (int) $quantity
        ]);
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1

        $this->session->set_flashdata(
            'success',
            'Product added successfully.'
        );

<<<<<<< HEAD
        redirect('products');
    }

    /**
     * Show edit product form
     */
    public function edit($id)
    {
        $product = $this->ProductModel->getById($id);
=======
        $this->response->redirect(site_url('products'));
    }

    public function edit($id)
    {
        $product = $this->ProductModel->get_product($id);
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1

        if (!$product) {
            $this->session->set_flashdata(
                'error',
                'Product not found.'
            );

<<<<<<< HEAD
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
=======
            $this->response->redirect(site_url('products'));
        }

        $this->call->view('products/edit', [
            'product' => $product
        ]);
    }

    public function update($id)
    {
        if (!$this->ProductModel->get_product($id)) {
            $this->session->set_flashdata(
                'error',
                'Product not found.'
            );

            $this->response->redirect(site_url('products'));
        }

        $productName = trim(
            (string) $this->request->post('product_name', '')
        );

        $description = trim(
            (string) $this->request->post('description', '')
        );

        $price = $this->request->post('price');
        $quantity = $this->request->post('quantity');

        if (
            $productName === '' ||
            !is_numeric($price) ||
            !is_numeric($quantity) ||
            (float) $price < 0 ||
            (int) $quantity < 0
        ) {
            $this->session->set_flashdata(
                'error',
                'Please provide valid product information.'
            );

            $this->response->redirect(
                site_url('products/edit/' . (int) $id)
            );
        }

        $this->ProductModel->update_product($id, [
            'product_name' => $productName,
            'description'  => $description,
            'price'        => number_format(
                (float) $price,
                2,
                '.',
                ''
            ),
            'quantity'     => (int) $quantity
        ]);
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1

        $this->session->set_flashdata(
            'success',
            'Product updated successfully.'
        );

<<<<<<< HEAD
        redirect('products');
    }

    /**
     * Delete product
     */
    public function delete($id)
    {
        $product = $this->ProductModel->getById($id);

        if (!$product) {
=======
        $this->response->redirect(site_url('products'));
    }

    public function delete($id)
    {
        if (!$this->ProductModel->get_product($id)) {
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
            $this->session->set_flashdata(
                'error',
                'Product not found.'
            );

<<<<<<< HEAD
            redirect('products');
        }

        $this->ProductModel->delete($id);
=======
            $this->response->redirect(site_url('products'));
        }

        $this->ProductModel->delete_product($id);
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1

        $this->session->set_flashdata(
            'success',
            'Product deleted successfully.'
        );

<<<<<<< HEAD
        redirect('products');
=======
        $this->response->redirect(site_url('products'));
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
    }
}