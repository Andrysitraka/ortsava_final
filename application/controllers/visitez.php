<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class visitez extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Basemodel');
	}

	public function index()
	{
		$data['slides']=$this->Basemodel->slide();
		$data['gethasard']=$this->Basemodel->getSousCircuitByCircuitIdh();
		$data['getdescortsava']=$this->Basemodel->get_descortsava();
		$this->load->view('front/header');
		$this->load->view('index',$data);
		$this->load->view('front/footer');
	}
	public function apropos()
	{
		$data['gethasard']=$this->Basemodel->getSousCircuitByCircuitIdh();
		$data['get_motpresident']=$this->Basemodel->get_motpresident();
		$this->load->view('front/header');
		$this->load->view('front/about',$data);
		$this->load->view('front/footer');
	}
	public function circuit($id)
	{
		$data['circuit']=$this->Basemodel->getSousCircuitByCircuitId($id);
		$data['slides']=$this->Basemodel->slide();

		$this->load->view('front/header');
		$this->load->view('front/circuit',$data);
		$this->load->view('front/footer');
	}
	public function circuit_detail($id)
	{
		
		$data['gethasard']=$this->Basemodel->getSousCircuitByCircuitIdh();
		$data['detail']=$this->Basemodel->getidcircuitdetail($id);
		$data['test']=$this->Basemodel->testrecuperation($id);
		$data['nomphotos']=$this->Basemodel->getnomphotosdetail($id);
		$this->load->view('front/header');
		$this->load->view('front/circuit_detail',$data);
		$this->load->view('front/footer');
	}
	public function contact()
    {
        $data['adresse'] = $this->Basemodel->get_adresse();
        $this->load->view('front/header');
        $this->load->view('front/contact',$data); 
        $this->load->view('front/footer');
    }
    
    public function send()
    {
    	$this->load->library('form_validation');

        $this->form_validation->set_rules('user','user', trim|required);
        $this->form_validation->set_rules('email','email', trim|required|valid_email);
        $this->form_validation->set_rules('message','Message', trim|required|valid_email);

        if ($this->form_validation->run()== FALSE) {
          $this->load->view('front/contact');
        }

        else
        {
            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $message = $this->input->post('message');



            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from($email);
            $this->email->to('andrewsitraka@gmail.com');
            $this->email->subject('this is an email test');
            $this->email->message('it is an email woerk');

            $path = $this->config->item('server_root');
            $file = $path . '/CodeIgniter-3.1.5/yourinfo.txt';

            if($this->email->send())
            {
                echo "message envoyer";
            }
            else
            {
                show_error($this->email->print_debugger());
            }
        }
    }

   
	public function gallery()
	{
		
		$data['galleryhasard']=$this->Basemodel->galleryhasard();
		$this->load->view('front/header');
		$this->load->view('front/gallery',$data);
		$this->load->view('front/footer');
	}

	public function backindex()
	{
		$data['tcircuit']=$this->Basemodel->selectTcircuit();
		$this->load->view('back/asset/header');
		$this->load->view('back/index',$data);
		$this->load->view('back/asset/footer');		
	}

	

	
}
