<?php
class Categorie extends CI_Model 
{
    public function __construct()
    {
        $this->load->database();
    } // __construct

    public function retournerCategorie($pNoCategorie=FALSE)
    {
        if ($pNoCategorie==FALSE)
        {
            $requete = $this->db->get('CATEGORIE');
            return $requete->result_array();
        }// retour d'un tableau associatif
            $requete = $this->db->get_where('CATEGORIE',array('NUMEROCATEGORIE'=>$pNoCategorie));
            return $requete->row(); // retour d'une seule ligne !
    }
}