<?php
<<<<<<< HEAD

=======
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
<<<<<<< HEAD

        // Load Session Library
        $this->call->library('session');

        // Load Users Model
        $this->call->model('UsersModel');
    }

    // Display Login Page
    public function login()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('products');
            return;
        }

        $data['error'] = $this->session->flashdata('error');

        $this->call->view('login', $data);
    }

    // Process Login
    public function authenticate()
    {
        $username = trim((string) $this->io->post('username', ''));
        $password = (string) $this->io->post('password', '');

        // Validate input
        if ($username === '' || $password === '') {
            $this->session->set_flashdata(
                'error',
                'Please enter your username and password.'
            );

            redirect('login');
            return;
        }

        // Find user through the model
        $user = $this->UsersModel->findByUsername($username);

        // Verify credentials
        $isActive = $user['is_active'] ?? 1;

        if (
            !$user ||
            !password_verify($password, $user['password']) ||
            (int) $isActive !== 1
=======
        $this->call->model('UserModel');
    }

    public function login()
    {
        if ($this->session->userdata('authenticated')) {
            $this->response->redirect(site_url('products'));
        }

        $this->call->view('auth/login', [
            'error' => $this->session->flashdata('error')
        ]);
    }

    public function authenticate()
    {
        $username = trim(
            (string) $this->request->post('username', '')
        );

        $password = (string) $this->request->post(
            'password',
            ''
        );

        $user = $this->UserModel->find_by_username($username);

        if (
            !$user ||
            !password_verify($password, $user['password'])
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
        ) {
            $this->session->set_flashdata(
                'error',
                'Invalid username or password.'
            );

<<<<<<< HEAD
            redirect('login');
            return;
        }

        // Regenerate session ID after successful login
        $this->session->regenerate_on_login();

        // Create login session
        $this->session->set_userdata([
            'user_id'   => $user['id'],
            'username'  => $user['username'],
            'logged_in' => true
        ]);

        // Redirect to Product Management
        redirect('products');
    }

    // Logout
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
=======
            $this->response->redirect(site_url('login'));
        }

        if (
            isset($user['is_active']) &&
            (int) $user['is_active'] !== 1
        ) {
            $this->session->set_flashdata(
                'error',
                'This account is inactive.'
            );

            $this->response->redirect(site_url('login'));
        }

        $this->session->regenerate_on_login(true);

        $this->session->set_userdata([
            'authenticated' => true,
            'user_id'       => (int) $user['id'],
            'username'      => $user['username'],
            'role'          => $user['role'] ?? 'user'
        ]);

        $this->response->redirect(site_url('products'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->response->redirect(site_url('login'));
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
    }
}