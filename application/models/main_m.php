<?php 
/**
* 
*/
class Main_m extends CI_Model
{
	
	function __construct()
	{
		
	}

	public function saveimbd($id,$nom, $url,$id_Scircuit)
	{
		$this->db->set('nom',$nom);
		$this->db->set('image',$url);
		$this->db->set('id_Scircuit',$id_Scircuit);
		$this->db->insert('photos_circuit');

	}
	public function getidSouscircuit()
	{
		$query = $this->db->query("SELECT id  FROM sous_circuit where id=$id");
		return $query->result();
	}
}