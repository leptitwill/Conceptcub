<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partenaire_model extends CI_Model
{
	protected $table = 'partenaire';

	public function lister_partenaire()
	{
		$this->db->where('estSupprime', 0);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function selectionner_partenaire($id)
	{
		$this->db->where('idPartenaire',$id);
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function ajouter_partenaire($nom, $logo)
	{
		$this->db->set('nom', $nom);
		$this->db->set('logo', $logo);
		$this->db->set('dateAjout', 'NOW()', false);
		
		return $this->db->insert($this->table);
	}

	public function modifier_partenaire($id, $nom, $logo)
	{
		$data = array(
					'nom' => $nom,
					'logo' => $logo,
				);

		$this->db->where('idPartenaire',$id);
		$this->db->update($this->table,  $data);
	}

	public function supprimer_partenaire($id)
	{
		$data = array(
					'estSupprime' => 1
				);

		$this->db->where('idPartenaire',$id);
		$this->db->update($this->table,  $data);
	}
}