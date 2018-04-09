<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basemodel  extends CI_Model{

	public function slide() 
	{
		$query = $this->db->query("SELECT nom  FROM slides");
		return $query->result();
	}
	public function getSousCircuitByCircuitId($id)
	{
		$query = $this->db->query("SELECT id,nom,contenu FROM sous_circuit where id_circuit='$id'");
		return $query->result();

	}
	public function getSlideImageByCircuitId($id){
		$ret=$this->db->query("
			select photos_circuit.nom as nom from photos_circuit join sous_circuit on sous_circuit.id=photos_circuit.id_Scircuit where id_circuit='$id'
		");
		return $ret->result();
	}
	
	public function gallery()
	{
		$query= $this->db->query("SELECT nom FROM gallery");
		return $query->result();
	}
	public function galleryhasard()
	{
		$query= $this->db->query("SELECT nom FROM photos_circuit ORDER BY RAND()  LIMIT 12");
		return $query->result();
	}

	public function selectTcircuit()
	{
		$query= $this->db->query("SELECT * FROM circuit");
		return $query->result();

	}

	public function getSousCircuitByCircuitIdh()
	{
		$query = $this->db->query("SELECT id,nom,contenu FROM sous_circuit ORDER BY RAND()  LIMIT 6");
		return $query->result();

	}

	public function getsousone($record_id)
	{
		$query = $this->db->query("SELECT id,nom,contenu FROM sous_circuit where record_id='$id'");
		return $query->result();
	}
	public function getidcircuitdetail($id)
	{
		$query = $this->db->query("SELECT id, nom, contenu FROM sous_circuit where id_circuit='$id'");
		return $query->result();

	}
	public function getSouscircuitByid($id)
	{
		$query = $this->db->query("SELECT id, nom, contenu FROM  sous_circuit where id_circuit='$id'");
		return $query->result();
	}
	public function testrecuperation($id)
	{
		$query =$this->db->query("SELECT id ,nom, contenu FROM sous_circuit where id='$id'");
		return $query->result();
	}
	public function getnomphotosdetail($id)
	{

	$query =$this->db->query("select nom from photos_circuit  where id=(select max(id) as id from photos_circuit where id_Scircuit='$id')");
	return $query->result();
	}

	public function get_adresse()
	{
		$adresse = 'Adresse : Kiosque Artisanal chez MIMI Hôtel Analamandrorofo – Sambava (208) </br> 00261 32 04 636 29 </br> ort.sava.pca@gmail.com';
		return $adresse;
	}
	public function get_descortsava()
	{
		$ortsava="L’ORTSAVA a pour rôle de promouvoir les produits touristiques de la région SAVA. La région SAVA dispose des grands attirait touristique très importants. C’est un endroit plein de potentialité en activité relative à la nature telle que les découvertes des faunes et flores authentiques au monde ; 
 				 	Vu les potentialités que la région SAVA possèdent, le tourisme devrait constituer un levier du développement et mérite d’être connu dans les quatre coins du monde. Mais ce n'est pas encore le cas jusqu'à présent. Donc l’initiative de créer une application sur la promotion sera un leurs effort crucial pour pouvoir promouvoir sa destination et  concurrencer le système de marketing moderne actuel.";
		return $ortsava;
	}

	public function get_motpresident()
	{
		$ortsava="Tout le circuit se déroule dans les collines environnant la ville de Vohémar. Les zébus y paissent tranquillement au milieu d’une végétation rare, faite d’herbes rases, de buissons et de cactus. La vue s’étend sur des kilomètres et vous marcherez à votre rythme et dans le calme d’une nature encore préservée. L’arrivée au Lac Vert est magnifique et le contraste entre l’eau turquoise du lac et celle très bleue de la mer est étonnant. Le lac n’est qu’à 300 mètres de la mer mais reste un lac d’eau douce dans lequel vivent des crocodiles* et où les oiseaux nichent tout autour, dans les grands arbres qui le bordent.  ";
		return $ortsava;
	}

}