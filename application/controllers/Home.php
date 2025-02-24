<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
    }

    public function index() {
        $this->load->view('portfolio/home');
    }

    public function contact() {
        $this->load->view('portfolio/contact');
    }

    public function submit() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
        } else {
            $data = [
                'name'    => $this->input->post('name', TRUE),
                'email'   => $this->input->post('email', TRUE),
                'subject' => $this->input->post('subject', TRUE),
                'message' => $this->input->post('message', TRUE),
            ];

            if ($this->Contact_model->insert_contact($data)) {
                echo json_encode(['status' => 'success', 'message' => 'Message stored successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Database insert failed.']);
            }
        }
    } 
}
