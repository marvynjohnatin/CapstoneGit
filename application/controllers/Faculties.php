<?php
class Faculties extends CI_Controller {
	

	 public function loginfaculty(){
        $this->load->view('faculty/login');
        $facultynumber = $this->input->post('facultynumber');
        $password = $this->input->post('password');
        $faculty_id = $this->login_model->loginfaculty($facultynumber,$password);
        if($faculty_id){
            $user_data= array(
                'facultyid' =>  $faculty_id[0]['Id'],
                'fname' => $faculty_id[0]['fname'],
                'facultynumber' => $facultynumber,
                'accounttype' => 'Faculty',
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('login_success','Login Success');
            redirect('faculty/dashboard');
        }
        else{
            $this->session->set_flashdata('login_failed','Login Failed!');
        }
    }

    public function profile(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function subjects(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/subjects', $data);
        $this->load->view('templates/footer');
    }

        public function maintenance(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/maintenance', $data);
        $this->load->view('templates/footer');
    }

    public function subjectlist(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/subjectlist', $data);
        $this->load->view('templates/footer');
    }

    public function sectionlist(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/sectionlist', $data);
        $this->load->view('templates/footer');
    }

    public function studentlist(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->faculty_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-faculty');
        $this->load->view('faculty/studentlist', $data);
        $this->load->view('templates/footer');
    }

     public function logoutfaculty(){
        //killing session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('facultyid');
         $this->session->unset_userdata('facultynumber');
         $this->session->unset_userdata('fname');
         $this->session->unset_userdata('accounttype');
        //message for logging out
        $this->session->set_flashdata('logged_out','You account has been logged out!');
        //redirect to login
        redirect('faculties/login');
    }
}
