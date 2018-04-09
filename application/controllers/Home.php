<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class Home extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Crudmodel');

        if(!isset($_SESSION['user_logged']))
        {
            $this->session->set_flashdata("error", "veillez vous connecté d'abord"); 
           
            redirect("Auth/login");
        }
    }

	public function indexback()
	{
		
		$this->load->model('Crudmodel');
		$records = $this->Crudmodel->getRecords();
		$getRecordSc = $this->Crudmodel->getRecordSc();
		

		$this->load->view('back/asset/header'); 

		$this->load->view('back/index' , ['records' => $records, 'getRecordSc' => $getRecordSc]); 

		$this->load->view('back/asset/footer'); 
	}  

   
	public function create()
	{
		$this->load->view('back/asset/create');
	}

	public function save()
	{
		
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('localisation', 'localisation', 'required');
		if($this->form_validation->run())
                {
                	$data= $this->input->post();
                	$this->load->model('Crudmodel');
                	if($this->Crudmodel->saveRecord($data))
                	{
                		$this->session->set_flashdata('response', 'Ajout avec succès');
                	}
                	else{
                		$this->session->set_flashdata('response','ajout échoué');
                	}
                	return redirect('Home/indexback');
                }
                else
                {
                      $this->load->view('create');
                }
	}
public function quit()
{
    return redirect('Mycontroller/index');
}
    
	public function edit($id)
	{
		$this->load->model('Crudmodel');
         $data['recuperation']= $this->Crudmodel->get_Circuitbyid($id);
		$this->load->view('admin/header');
		$this->load->view('admin/edit_Circuit',$data);
	}
	
	

	public function update($record_id)
	{
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('localisation', 'localisation', 'required');
		if($this->form_validation->run())
                {
                	$data= $this->input->post();
                	$this->load->model('Crudmodel');
                	if($this->Crudmodel->UpdateRecords($record_id ,$data))
                	$this->session->set_flashdata('response', 'Mise à jour avec succès');
                	}
                	else{
                		$this->session->set_flashdata('response','erreur de mise à jour');
                	}
                	return redirect('Home/indexback');
    }
    public function deleteCircuit($record_id)
    {
    	$this->load->model('Crudmodel');
    	if($this->Crudmodel->deleteRecord($record_id))
    	{
    		$this->session->set_flashdata('response','supression avec succes');
    	}
    	else
    	{
    		$this->session->set_flashdata('response','supression echouée');
    	}
    	return redirect('Home/tableV');

    }
   

   // sous circuit

    public function editeritineraire($record_id)
    {
        
        $data['scircuit']= $this->Crudmodel->getItineraire();
        $this->load->view('back/asset/header');
        $this->load->view('back/itineraire/itineraire_edit',$data);
         $this->load->view('back/asset/footer');

    }


    public function telecharger()
    {
        $this->load->model('Main_m');
        $data['idsouscircuit']= $this->Main_m->getidSouscircuit();
        $this->load->view('back/asset/header');
        $this->load->view('back/asset/upload',$data);
         $this->load->view('back/asset/footer');
         $this->load->model('main_m');
    }


    public  function save1()
    {
        $this->load->model('Main_m');
        $this->load->model('Crudmodel');
        $url = $this->do_upload();
        $nom = $_POST['nom'];
        $id_Scircuit = $_POST['id_Scircuit'];
        $this->Main_m->saveimbd($url,$nom,$id_Scircuit);
    }

  
    public function pop()
    {
        $this->load->view('front/header');
        $this->load->view('front/testpop');
        $this->load->view('front/footer');
    }

/*  Admin */
    public function adminlaunch()
    {
        $this->load->model('Crudmodel');
        $data['affich_all_circuit'] = $this->Crudmodel->getCircuitM();
       
        $this->load->view('admin/header');
        $this->load->view('admin/index',$data);
    }


     public function generale()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/insertion');
    }

     public function chartV()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/chart');
    }

     public function tableV()
    {
        $this->load->model('Crudmodel');
        $data['affich_all_circuit'] = $this->Crudmodel->getCircuitM();
        $data['affich_all_sous_circuit'] = $this->Crudmodel->getSous_CircuitMM();

        $this->load->view('admin/header');
        $this->load->view('admin/table',$data);
    }

    public function gestiongallery()
    {
        $this->load->model('Crudmodel');
        $data['affiche']= $this->Crudmodel->getAlphotos();
        $this->load->view('admin/header');
        $this->load->view('admin/gallery',$data);

    }

    public function ajoutimage()
    {
        
        $this->load->model('Crudmodel');
        $data['recuperIDsouscircuit'] = $this->Crudmodel->getidsous_circuit();
        $this->load->view('admin/header');
        $this->load->view('admin/uploadimage',$data);
    }

    public function gestionslide()
    {
        $this->load->model('Crudmodel');
         $data['affiche']= $this->Crudmodel->getAllslide();
        $this->load->view('admin/header');
        $this->load->view('admin/slide',$data);
    }

    public function gestionemail()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/mailbox');
    }

    public function editesousCircuit1($id)
    {


        $data['recuperation']= $this->Crudmodel->getSous_Circuitbyid($id);
        $this->load->view('admin/header');
        $this->load->view('admin/editesouscircuit',$data);
        
    }


     public function editCircuit1($id)
    {


        $data['recuperation']= $this->Crudmodel->get_Circuitbyid($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit_Circuit',$data);
        
    }

    public function editesousCircuit()
    {


        $data['recuperation']= $this->Crudmodel->getSous_CircuitMM();
        $this->load->view('admin/header');
        $this->load->view('admin/editesouscircuit',$data);
        
    }




    public function updateSousCircuti($id)
    {
            $this->form_validation->set_rules('nom', 'nom', 'required');
            $this->form_validation->set_rules('contenu', 'Contenu', 'required');
            $this->form_validation->set_rules('phone', 'phone contact', 'required|min_length[5]');
            $this->form_validation->set_rules('email', 'email', 'required|min_length[5]');
        if($this->form_validation->run())
                {
                    $data= $this->input->post();
                    $this->load->model('Crudmodel');
                    if($this->Crudmodel->updateSousCircuti($id ,$data))
                    $this->session->set_flashdata('response', 'Mise à jour avec succès');
                    }
                    else{
                        $this->session->set_flashdata('response','erreur de mise à jour');
                    }
                    return redirect('Home/tableV');
    }



    public function updateCircuti($id)
    {
            $this->form_validation->set_rules('nom', 'nom', 'required');
            $this->form_validation->set_rules('localisation', 'localisation', 'required');
            
        if($this->form_validation->run())
                {
                    $data= $this->input->post();
                    $this->load->model('Crudmodel');
                    if($this->Crudmodel->updateCircuti($id ,$data))
                    $this->session->set_flashdata('response', 'Mise à jour avec succès');
                    }
                    else{
                        $this->session->set_flashdata('response','erreur de mise à jour');
                    }
                    return redirect('Home/tableV');
    }


         public function deleteSousCircuit($record_id)
    {
        $this->load->model('Crudmodel');
        if($this->Crudmodel->deleteRecordS($record_id))
        {
            $this->session->set_flashdata('response','supression avec succes');
        }
        else
        {
            $this->session->set_flashdata('response','supression echouée');
        }
        return redirect('Home/tableV');

    }


         public function deleteslide($record_id)
            {
                $this->load->model('Crudmodel');
                if($this->Crudmodel->deleteslide($record_id))
                {
                    $this->session->set_flashdata('response','supression avec succes');
                }
                else
                {
                    $this->session->set_flashdata('response','supression echouée');
                }
                return redirect('Home/gestionslide');

            }


            public function deletegallery($record_id)
            {
                $this->load->model('Crudmodel');
                if($this->Crudmodel->deletegallery($record_id))
                {
                    $this->session->set_flashdata('response','supression avec succes');
                }
                else
                {
                    $this->session->set_flashdata('response','supression echouée');
                }
                return redirect('Home/gestiongallery');

            }


    public function addsouscircuitView()
    {
        $this->load->model('Crudmodel');
        $this->load->view('admin/header');
        $this->load->view('admin/ajouter_souscircuit');
    }



   public function Additineraire()
    {
        
        $this->load->view('admin/header');
        if(isset($_POST['save']))
        {
            $this->form_validation->set_rules('nom', 'nom', 'required');
            $this->form_validation->set_rules('contenu', 'contenu', 'required');
            $this->form_validation->set_rules('phone', 'phone', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('Id_circuit', 'Id_circuit', 'required');




            if($this->form_validation->run() == TRUE)
            {
                
                $data = array( 
                    'nom' => $_POST['nom'],
                    'contenu' => $_POST['contenu'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'Id_circuit' => $_POST['Id_circuit']
                    );
                $this->db->insert('sous_circuit',$data);
                $this->session->set_flashdata("success", "itineraire ajouté  avec succès");
                redirect("Home/Additineraire", "refresh");
            }

        }
                $this->load->view('admin/ajouter_souscircuit');   
        
    }


    public function AddCircuit()
    {
        
        $this->load->view('admin/header');
        if(isset($_POST['save']))
        {
            $this->form_validation->set_rules('nom', 'nom', 'required');
            $this->form_validation->set_rules('localisation', 'localisation', 'required');
            if($this->form_validation->run() == TRUE)
            {
                
                $data = array( 
                    'nom' => $_POST['nom'],
                    'localisation' => $_POST['localisation']
                
                  
                    );
                $this->db->insert('circuit',$data);
                $this->session->set_flashdata("success", "itineraire ajouté  avec succès");
                redirect("Home/AddCircuit", "refresh");
            }

        }
                $this->load->view('admin/ajouter_circuit');   
        
    }


    /* table slide* */
    public function uploaderror()
    {
        echo "string";
    }


 public function do_upload()
{
  $url = "/images/imagesScircuit/";
  $image=basename($_FILES['nom']['name']);
  $image=str_replace(' ','|',$image);
  $type = explode(".",$image);
  $type = $type[count($type)-1];
  if (in_array($type,array('jpg','jpeg','png','gif')))
  {
    $tmppath="images/imagesScircuit/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
    if(is_uploaded_file($_FILES["nom"]["tmp_name"]))
    {
      move_uploaded_file($_FILES['nom']['tmp_name'],$tmppath);
      return $tmppath; // returns the url of uploaded image.
    }
  }
  else
  {
    redirect(base_url() . 'index.php/Home/gestiongallery', 'refresh');// redirect to show file type not support message
  }
}


function image_upload()
{
  $data ['nom']= $this->do_upload();
  $data ['alt']= $this->input->post('alt');
  $data ['id_Scircuit']= $this->input->post('id_Scircuit');
  $this->db->insert('photos_circuit', $data);
  redirect(base_url() . 'index.php/Home/ajoutimage', 'refresh');// Redirect to Success page
}



 public function do_uploadslide()
{
  $url = "/images/slide";
  $image=basename($_FILES['nom']['name']);
  $image=str_replace(' ','|',$image);
  $type = explode(".",$image);
  $type = $type[count($type)-1];
  if (in_array($type,array('jpg','jpeg','png','gif')))
  {
    $tmppath="images/slide/".uniqid(rand()).".".$type; // uniqid(rand()) function generates unique random number.
    if(is_uploaded_file($_FILES["nom"]["tmp_name"]))
    {
      move_uploaded_file($_FILES['nom']['tmp_name'],$tmppath);
      return $tmppath; // returns the url of uploaded image.
    }
  }
  else
  {
   // redirect(base_url() . 'index.php/Home/gestiongallery', 'refresh');// redirect to show file type not support message
  }
}

function image_uploadslide()
{
  $data ['nom']= $this->do_uploadslide();
  $this->db->insert('slides', $data);
  redirect(base_url() . 'index.php/Home/ajoutimage', 'refresh');// Redirect to Success page
}

    





    
}