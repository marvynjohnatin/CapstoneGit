<?php
class Accountings extends CI_Controller {

	public function studentlist()
	{
		$this->load->view('templates/header-2');
        $this->load->view('templates/navbar-accounting');
        $this->load->view('accounting/studentlist');
        $this->load->view('templates/footer');
	}

	public function account()
	{
		$this->load->view('templates/header-2');
        $this->load->view('templates/navbar-accounting');
        $this->load->view('accounting/account');
        $this->load->view('templates/footer');
	}

	public function payment()
	{
		$this->load->view('templates/header-2');
        $this->load->view('templates/navbar-accounting');
        $this->load->view('accounting/payment');
        $this->load->view('templates/footer');
	}
}
