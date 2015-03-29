<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sign_Up_Admin extends CI_Controller {
 
    public function index()
    {
        echo "Hello World";
    }

    public function take_admin_entries()
    {
       $this->load->database();
       $this->load->view('take_admin_entries');
    }

    public function insert_admin_data()
    {
       // $this->load->model('Sign_Upmodel');
        $this->load->database();
        $data = array( 
        'Name' => $this->input->post('name'),
        'Username' => $this->input->post('username'),
        'Password' => $this->input->post('pswd'),
        'E-mail' => $this->input->post('email'),
        'Contact' => intval($this->input->post('Contact number'))
        );

        $data1 = array(
        'Email' => $this->input->post('email'),
        'AccountNumber'=> intval($this->input->post('accnum')),
        );

        $this->db->insert('users', $data); 
        $this->db->insert('admin', $data1); 

        print_r("hello"); 
    }
}