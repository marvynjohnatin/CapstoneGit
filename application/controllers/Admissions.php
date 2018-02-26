<?php
class Admissions extends CI_Controller {

    public function viewcreatestudent()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar-admission');
        $this->load->view('admission/createstudent');
    }

    public function createstudent()
    {
        $this->admission_model->createstudent();
        redirect('admission/addstudent');
    }

    public function viewpendingstudent()
    {
        $data['results'] = $this->admission_model->getpendingstudents();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar-admission');
        $this->load->view('admission/activatestudent',$data);
    }
}
