<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}


	public function send_email()
	{
		$config  = array('protocol' => 'smtp',
			'smtp_host' => 'ssl:/smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' =>'andrysitraka.apsesame2013@gmail.com',
			'smtp_pass' => 'mavieamoi',
			'mailtype' => 'html',
			'charset' => 'iso-8856-1',
			'wordwrap' => TRUE
			);
		$this->load->library('email',$config);
		$this->email->from('andrysitraka.apsesame2013@gmail.com','admin');
		$this->email->to('andrewsitraka@gmail.com');
		$this->email->subject('Email test');
		$this->email->message('testing the  email class');
		$this->email->set_newline('\r\n'); 


		$resultat = $this->email->send();
		$this->email->print_debugger();

	}
};?>