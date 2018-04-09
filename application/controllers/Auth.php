<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class Auth extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Basemodel');
	}

	public function logout()
	{
			unset($_SESSION);
			session_destroy();
			redirect('visitez/index', 'refresh');
	}
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

		if($this->form_validation->run()==TRUE)
		{
			

			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$this->db->select('*');
			$this->db->from('membre');
			$this->db->where(array('username' => $username, 'password' => $password));
			$query= $this->db->get();

			$membre = $query->row();

			if($membre->email)
				{
					$this->session->set_flashdata("success", "vous étes connecté ");

					$_SESSION["user_logged"] = TRUE;
					$_SESSION['username'] = $membre->username;


					redirect("Home/generale" , "refresh");

				}
				else{
					$this->session->set_flashdata("error", "il n'y a aucune compte associée à votre login");
					redirect("auth/login", "refresh");
				}



		}

		$this->load->view('front/login');
	
	}
	public function register()
	{
		
		$this->load->view('front/header');
		if(isset($_POST['save']))
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password2', 'Confirm password', 'required|min_length[5] |matches[password]');
			$this->form_validation->set_rules('phone', 'phone', 'required');




			if($this->form_validation->run() == TRUE)
			{
				
				$data = array( 
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($_POST['password']),
					'genre' => $_POST['genre'],
					'phone' => $_POST['phone']
					);
				$this->db->insert('membre',$data);
				$this->session->set_flashdata("success", "votre compte a été crée avec succès");
				redirect("auth/register", "refresh");
			}

		}
				$this->load->view('front/register');

		
		
		$this->load->view('front/footer');
	}

	 public function send_email()
    {
    	$this->load->library("form_validation");
    	$this->form_validation->set_rules('user','user','required|alpha');
        $this->form_validation->set_rules('email','email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message','Message', 'required');
        

        if($this->form_validation->run() == FALSE)
        {
        	$data1['adresse'] = $this->Basemodel->get_adresse();
        	
        	$this->load->view("front/header");
        	$this->load->view("front/contact",$data1);
        	$this->load->view("front/footer");
        }
        else{
        	$data['adresse'] = $this->Basemodel->get_adresse();
        	$data["message"] = 'votre message a étè bien envoyé';

        	$this->load->library("email");
        	$this->email->from(set_value('user'), set_value("nom"));
        	$this->email->to('andrewsitraka@gmail.com');
        	$this->email->subject("message from our form");
        	$this->email->message(set_value("message"));
        	$this->email->send();

        	
        	
        	


        	$this->load->view("front/header");
        	$this->load->view("front/contact", $data);
        	$this->load->view("front/footer");
        }


    }



}
