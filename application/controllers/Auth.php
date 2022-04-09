<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {

        $data = [
            'title' => 'Login Page'
        ];

        if ($this->session->userdata('email')) {
            redirect(base_url('main'));
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth_index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Model_auth->findUser(['email' => $email]);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                if ($user['active'] == 1) {
                    if ($user['role'] == 'Root') {
                        $data = [
                            'email' => $user['email'],
                            'role' => $user['role']
                        ];
                        $this->session->set_userdata($data);
                        redirect(base_url('main'));
                    }
                    $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill" /></svg><div>Your Account <strong>Dosent Have Role!</strong></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect(base_url('auth'));
                }
                $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill" /></svg><div>Your Account Is<strong>Not Active</strong></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect(base_url('auth'));
            }
            $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill" /></svg><div><strong>Wrong Password!</strong></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect(base_url('auth'));
        }
        $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill" /></svg><div>Email Is <strong>Not Registered!</strong></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect(base_url('auth'));
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('flash', '<div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg><div>You Have Been <strong>Logged Out!</strong></div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect(base_url('auth'));
    }
}
