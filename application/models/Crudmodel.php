<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel  extends CI_Model{
	public function getRecords()
	{
		$query = $this->db->get('circuit');
		return $query->result();
	}

	public function getRecordSc()
	{
		$query = $this->db->get('sous_circuit');
		return $query->result();
	}
	public function saveRecord($data)
	{
		return $this->db->insert('circuit',$data);
	}
	public function getAllRecords($record_id)
	{
		$query = $this->db->get_where('circuit',array('id'=> $record_id));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	}

	public function getAllRecordsnnn($record_id)
	{
		$query = $this->db->get_where('sous_circuit',array('id'=> $record_id));
		if($query->num_rows() >0)
		{
			return $query->row();
		}
	}


	public function updateRecords($record_id, $data)
	{
		return $this->db->where('id', $record_id)->update('circuit', $data);
	}
	public function deleteRecord($record_id)
	{
		return $this->db->delete('circuit', array('id' => $record_id));
	}

	


	//table sous circuit

	public function getItineraire()
	{
		$query = $this->db->query("SELECT id, nom, contenu, phone, email, id_circuit  FROM sous_circuit");
		return $query->result();
	}
	public function insertcontact($data)
	{
		return $this->db->insert('contact',$data);

	}

	//function pour le back end


	public function getCircuitM()
	{
		$query = $this->db->query("SELECT id, nom, localisation  FROM  circuit");
		return $query->result();
	}

	public function getSous_CircuitMM()
	{
		$query = $this->db->query("SELECT id, nom,contenu,phone,email    FROM  sous_circuit ");
		return $query->result();
	}

	public function getSous_Circuitbyid($id)
	{
		$query = $this->db->query("SELECT id, nom,contenu,phone,email    FROM  sous_circuit where id='$id'");
		return $query->result();
	}

	public function get_Circuitbyid($id)
	{
		$query = $this->db->query("SELECT id, nom,localisation   FROM circuit where id='$id'");
		return $query->result();
	}


	


	public function getContenuSousCircuit()
	{
		$query = $this->db->query("SELECT id, nom,contenu,phone,email    FROM  sous_circuit");
		return $query->result();
	}

	public function testrecuperation($id)
	{
		$query =$this->db->query("SELECT id ,nom, contenu , phone,  email FROM sous_circuit where id='$id'");
		return $query->result();
	}
	

	public function updateSousCircuti($record_id, $data)
	{
		return $this->db->where('id', $record_id)->update('sous_circuit', $data);
	}


	public function updateCircuti($record_id, $data)
	{
		return $this->db->where('id', $record_id)->update('circuit', $data);
	}


	public function deleteRecordS($record_id)
	{
		return $this->db->delete('sous_circuit', array('id' => $record_id));
	}


	public function savesouscircuit($data)
	{
		return $this->db->insert('sous_circuit',$data);
	}

	//table slide */

	public function getAlphotos()
	{
		$query = $this->db->query("SELECT id, alt, nom, id_Scircuit from photos_circuit");
		return $query->result();
	}
	public function getidsous_circuit()
	{
		$query = $this->db->query("SELECT id , nom from sous_circuit");
		return $query->result();
	}

	public function getAllslide()
	{
		$query = $this->db->query("SELECT id , nom from slides");
		return $query->result();
	}

	public function deleteslide($record_id)
	{
		return $this->db->delete('slides', array('id' => $record_id));
	}
	public function deletegallery($record_id)
	{
		return $this->db->delete('photos_circuit', array('id' => $record_id));
	}

}