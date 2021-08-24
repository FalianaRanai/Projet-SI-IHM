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

    public function checkUser($nom,$mdp){
        $retour=array();
        $sql="SELECT * FROM Utilisateur WHERE Username=%s AND Password=SHA1(%s)";
        $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($mdp));
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
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


    public function insertCategorie($nomCategorie)
    {
        $sql="INSERT INTO Categorie VALUES(NULL, '%s')";
        $sql = sprintf($sql, $nomCategorie);
        $this->db->query($sql);
    }

    public function deleteCategorie($idCategorie)
    {
        $sql="DELETE FROM Categorie WHERE IDCategorie='%s'";
        $sql = sprintf($sql, $idCategorie);
        $this->db->query($sql);
    }

    public function updateCategorie($idCategorie, $nomCategorie)
    {
        $sql="UPDATE Categorie SET NomCategorie='%s' WHERE IDCategorie='%s'";
        $sql = sprintf($sql, $nomCategorie, $idCategorie);
        $this->db->query($sql);
    }

    public function insertProduit($nomProduit, $prix, $idcategorie, $source)
    {
        $sql="INSERT INTO Produit VALUES(NULL, '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql, $nomProduit, $prix, $source, $idcategorie);
        $this->db->query($sql);
    }

    public function deleteProduit($idProduit)
    {
        $sql="DELETE FROM Produit WHERE IDProduit='%s'";
        $sql = sprintf($sql, $idProduit);
        $this->db->query($sql);
    }

    public function updateProduit($idProduit, $nomProduit, $prix, $idcategorie, $source)
    {
        $sql="UPDATE Produit SET NomProduit='%s', Prix='%s', Source='%s', IDCategorie='%s' WHERE IDProduit='%s'";
        $sql = sprintf($sql, $nomProduit, $prix, $source, $idcategorie, $idProduit);
        $this->db->query($sql);
    }
} 
?>