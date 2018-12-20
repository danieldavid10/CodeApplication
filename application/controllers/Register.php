<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }

    public function index()
    {
        $this->load->view('register');
        // $query = $this->db->get('users'); // Nombre de la tabla
        // var_dump($query->result());
    }
    
    public function create(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $confirm_pass = $this->input->post('confirm_pass');
    }
}