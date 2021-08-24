<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fonctions extends CI_Model{
    public function getProduit(){
        $query=$this->db->query("SELECT * FROM Produit");
        $retour=array();
        foreach ($query->result_array() as $one) {
			$retour[] = $one;
		}
		return $retour;
    }
    
    public function getCaise(){
        $query=$this->db->query("SELECT * FROM Caisse");
        $retour=array();
        foreach($query->result_array() as $one) {
            $retour[]=$one;
        }
        return $retour;
    }

    public function getCategory(){
        $query=$this->db->query("SELECT * FROM Categorie");
        $retour=array();
        foreach($query->result_array() as $one) {
            $retour[]=$one;
        }
        return $retour;
    }
    
    public function checkAdmin($nom,$mdp){
        $retour=array();
        $sql="SELECT * FROM Admin WHERE Username=%s AND Password=SHA1(%s)";
        $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }
} 
?>