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

    public function activatestudent($offset = 0)
    {
        $this->session->unset_userdata('studentid');
        $search = $this->input->get('search');
        $config['base_url'] =base_url("admissions/activatestudent/");
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');
        if(!isset($search)) {
            $config['total_rows'] = $this->admission_model->numberpending();
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getpendingstudents($config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admission');
            $this->load->view('admission/activatestudent', $data);
        }
        else{
            if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
            $config['total_rows'] = $this->admission_model->numbersearched($search);
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getsearchedstudents($search,$config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admission');
            $this->load->view('admission/activatestudent', $data);
        }
    }

    public function activate($offset = 0)
    {
        if(!isset($this->session->userdata['studentid'])) {
            $studentid = $this->input->post('studentid');
            $user_data = array(
                'studentid' => $studentid
            );
            $this->session->set_userdata($user_data);
        }
        if(!isset($this->session->userdata['studentid']))
        {
            redirect('admission/activatestudent');
        }
        $search = $this->input->get('search');
        $config['base_url'] =base_url("admissions/activate/");
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');
        if(!isset($search)) {
            $config['total_rows'] = $this->admission_model->numberofparents();
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getparents($config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admission');
            $this->load->view('admission/activate', $data);
        }
        else{
            if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
            $config['total_rows'] = $this->admission_model->numbersearchedparent($search);
            $this->pagination->initialize($config);
            $data['results'] = $this->admission_model->getsearchedparent($search,$config['per_page'],$offset);
            $this->load->view('templates/header');
            $this->load->view('templates/navbar-admission');
            $this->load->view('admission/activate', $data);
        }
    }

    public function activating(){
        $parentid = $this->input->post('parentid');
        $studentid = $this->session->userdata['studentid'];
        if(!isset($parentid))
        {
            redirect('admission/activatestudent');
        }
        $data['parent'] = $this->admission_model->getparentactivation($parentid);
        $data['student'] = $this->admission_model->getstudentactivation($studentid);
        $ch = curl_init();
        $parameters = array(
        'apikey' => 'af1ea6834291b8b3e73494d4c5db6bbd', //Your API KEY
        'number' => $data['parent'][0]['contactno'],
        'message' => 'Your account is now activated! Credentials For your account is Username:'.$data['parent'][0]['username'].' Password:'.
                      $data['parent'][0]['password']. ' and for '. $data['student'][0]['fname'].' Username:'. $data['student'][0]['studentnumber'].
                      ' Password: '. $data['student'][0]['password']. ' Log in at localhost/Capstone1/login',
        'sendername' => 'SJACADEMY'
        );
        curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $output = curl_exec( $ch );
        curl_close ($ch);
        //Show the server response
        $obj = json_decode($output, true);
        $status = $obj[0]['status'];
        if($status = 'Pending')
        {
            $this->admission_model->activatestudentrecord($studentid);
            die('Success!');
        }
    }

}
