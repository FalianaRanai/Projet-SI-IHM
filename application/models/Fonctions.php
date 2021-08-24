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

    public function insertProduit($nom,$prix,$image){
        $sql = "INSERT INTO Produit VALUES (NULL,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($prix),$this->db->escape($image));
        $this->db->query($sql);
    }

    public function insertCategory($nom){
        $sql = "INSERT INTO Categorie VALUES (NULL,%s)";
        $sql = sprintf($sql,$this->db->escape($nom));
        $this->db->query($sql);
    }

    public function insertCaisse($numero){
        $sql = "INSERT INTO Caisse VALUES (NULL,%s)";
        $sql = sprintf($sql,$this->db->escape($numero));
        $this->db->query($sql);
    }

    public function deleteProduit($id){
        $sql="DELETE FROM Produit WHERE IDProduit=%s";
        $sql = sprintf($sql,$this->db->escape($id));
        $this->db->query($sql);
    }
} 
?>