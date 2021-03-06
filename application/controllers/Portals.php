<?php
class Portals extends CI_Controller
{
    public function login($page = 'login'){
        $data['title'] = $page;
        $this->load->view('portals/'.$page,$data);
        $studentnumber = $this->input->post('studentnumber');
        $password = $this->input->post('password');
        $student_id = $this->login_model->login($studentnumber,$password);
        if(isset($studentnumber)) {
            if ($student_id) {
                $user_data = array(
                    'studentid' => $student_id[0]['Id'],
                    'fname' => $student_id[0]['fname'],
                    'accounttype' => 'Student',
                    'studentnumber' => $studentnumber,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'Login Success');
                if ($student_id[0]['account_status'] == 'First') {
                    redirect('portals/accountsetupview');
                } else {
                    redirect('portals/dashboard');
                }
            } else {
                $this->session->set_flashdata('login_failed', 'Login Failed');
                redirect('login');
            }
        }
    }

    public function view(){
        //checking of login status
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        //getting details of student
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function accountsetupview(){
       $data = array('studentnumber'=>$this->session->userdata['studentnumber'] ,'id'=>$this->session->userdata['studentid']);
       $this->load->view('portals/accountsetup', $data);
    }

    public function accountsetup()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if($this->form_validation->run() === FALSE)
        {
            $data = array('studentnumber'=>$this->session->userdata['studentnumber'] ,'id'=>$this->session->userdata['studentid']);
            $this->load->view('portals/accountsetup', $data);
        }
        else
        {
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $this->login_model->updatepassword($id,$password);
            //killing session
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('studentid');
            $this->session->unset_userdata('studentnumber');
            $this->session->unset_userdata('fname');
            $this->session->unset_userdata('accounttype');
            redirect('login');

        }
    }

    public function viewgrades(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/grade',$data);
        $this->load->view('templates/footer');
    }

    public function viewenrollment(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/enrollment',$data);
        $this->load->view('templates/footer');
    }

    public function viewschedule(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/schedule',$data);
        $this->load->view('templates/footer');
    }

    public function viewaccount(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/account',$data);
        $this->load->view('templates/footer');
    }

    public function viewpayment(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/payment',$data);
        $this->load->view('templates/footer');
    }

     public function viewdetails(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/details',$data);
        $this->load->view('templates/footer');
    }

    public function viewgradeslist(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/gradelist',$data);
        $this->load->view('templates/footer');
    }

    public function viewmaintenance(){
        if(!isset($this->session->userdata['logged_in'])){
            die('Please log in');
        }
        $data['results'] = $this->student_model->get_details();
        if(empty($data['results']))
        {
            show_404();
        }
        $this->load->view('templates/header-2');
        $this->load->view('templates/navbar-portal');
        $this->load->view('portals/maintenance',$data);
        $this->load->view('templates/footer');
    }

    public function logout(){
        //killing session
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('studentid');
        $this->session->unset_userdata('studentnumber');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('accounttype');
        //message for logging out
        $this->session->set_flashdata('logged_out','You account has been logged out!');
        //redirect to login
        redirect('login');
    }

    public function test(){
       $this->load->view('portals/smsbalance');
    }
}