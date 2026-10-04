<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['error'] = '';

        if ($this->form_validation->submitted()) {
            $email = trim($this->io->post('email'));
            $role = $this->io->post('role');

            if (in_array($role, ['user', 'admin'], true)) {
                $user = $this->db->raw(
                    'SELECT id, email, role, is_active FROM users WHERE email = ? LIMIT 1',
                    [$email]
                )->fetch(PDO::FETCH_ASSOC);

                if (!$user || !(int) $user['is_active']) {
                    $data['error'] = 'Account not found or inactive.';
                } elseif ($user['role'] !== $role) {
                    $data['error'] = 'This account is not authorized for the selected role.';
                } else {
                    $this->session->regenerate_on_login();
                    $this->session->set_userdata([
                        'user_id' => $user['id'],
                        'user_email' => $user['email'],
                        'user_role' => $user['role']
                    ]);
                    header('Location: ' . site_url('/products'));
                    exit;
                }
            } else {
                $data['error'] = 'Please select a valid role.';
            }
        }

        $this->call->view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        header('Location: ' . site_url('/login'));
        exit;
    }

}