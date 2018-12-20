<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->library(array('form_validation'));
    }

    public function index()
    {
        $this->load->view('register');
    }
    
    public function create(){
        // $confirm_pass = $this->input->post('confirm_pass');
        $validations = array(
            array(
                'field' => 'username',
                'label' => 'User Name',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'The %s. is required.!',
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'The %s. is required.!',
                    'valid_email'=> 'The %s. is invalid.!'
                ),
            ),
                array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'The %s. is required.!',
                ),
            )
        );
        $this->form_validation->set_rules($validations);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        }
        else {
            $user_data = array(
                'user_name' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'status' => 1
            );
            if (!$this->User->create($user_data)) {
                $data['msg'] = 'Error on save';
                $this->load->view('register',$data);
            }
            else {
                $data['msg'] = 'Successful!!';
                $this->load->view('register',$data);
            }
        }

               
            
    }
}