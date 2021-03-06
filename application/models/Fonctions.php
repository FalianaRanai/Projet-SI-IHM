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
    
    public function getCaisse(){
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
        $sql = sprintf($sql, $this->db->escape($nomCategorie));
        $this->db->query($sql);
    }

    public function deleteCategorie($idCategorie)
    {
        $sql="DELETE FROM Categorie WHERE IDCategorie='%s'";
        $sql = sprintf($sql, $this->db->escape($idCategorie));
        $this->db->query($sql);
    }

    public function updateCategorie($idCategorie, $nomCategorie)
    {
        $sql="UPDATE Categorie SET NomCategorie='%s' WHERE IDCategorie='%s'";
        $sql = sprintf($sql, $this->db->escape($nomCategorie), $this->db->escape($idCategorie));
        $this->db->query($sql);
    }

    public function insertProduit($nomProduit, $prix, $idcategorie, $source)
    {
        $sql="INSERT INTO Produit VALUES(NULL, '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql, $this->db->escape($nomProduit), $this->db->escape($prix), $this->db->escape($source), $this->db->escape($idcategorie));
        $this->db->query($sql);
    }

    public function deleteProduit($idProduit)
    {
        $sql="DELETE FROM Produit WHERE IDProduit='%s'";
        $sql = sprintf($sql, $this->db->escape($idProduit));
        $this->db->query($sql);
    }

    public function updateProduit($idProduit, $nomProduit, $prix, $idcategorie, $source)
    {
        $sql="UPDATE Produit SET NomProduit='%s', Prix='%s', Source='%s', IDCategorie='%s' WHERE IDProduit='%s'";
        $sql = sprintf($sql, $this->db->escape($nomProduit), $this->db->escape($prix), $this->db->escape($source), $this->db->escape($idcategorie), $this->db->escape($idProduit));
        $this->db->query($sql);
    }

    public function findProduit($idproduit){
        $sql = "SELECT * FROM Produit WHERE IDProduit=%s";
        $sql = sprintf($sql, $this->db->escape($idproduit));
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }

    public function findProduitByCat($categorie){
        $sql="SELECT * FROM Produit WHERE IDCategorie=%s";
        $sql=sprintf($sql,$this->db->escape($categorie));
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }

    public function inscription($username,$mdp){
        $sql = "INSERT INTO Utilisateur VALUES(NULL,%s,SHA1(%s))";
        $sql = sprintf($sql,$this->db->escape($username),$this->db->escape($mdp));
        $this->db->query($sql);
    }

    public function getCategoryId($idProduit){
        $sql="SELECT c.NomCategorie  FROM Categorie c, Produit p WHERE c.IDCategorie=p.IDCategorie AND p.IDProduit=%s";
        $sql=sprintf($sql,$this->db->escape($idProduit));
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one){
            $retour[]=$one;
        }
        return $retour;
    }
    public function getAchat(){
        $query=$this->db->query("SELECT * FROM Achat");
        $retour=array();
        foreach($query->result_array() as $one) {
            $retour[]=$one;
        }
        return $retour;
    }

    public function getAchatCaisse($idCaisse){
        $sql="SELECT * FROM Achat WHERE IDCaisse=%s";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }

    public function getSommeCaisse($idCaisse){
        
        $sql="SELECT SUM(p.prix) as somme FROM Achat a, Produit p WHERE a.IDProduit=p.IDProduit AND a.IDCaisse='%s'";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }

    public function getSommeAll(){
        $sql="SELECT SUM(p.prix) as somme FROM Achat a, Produit p WHERE a.IDProduit=p.IDProduit";
        $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;
    }

    public function insertAchat($IDCaisse,$IDProduit,$IDQuantite){
        $sql = "INSERT INTO Achat VALUES(NULL,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($IDCaisse),$this->db->escape($IDProduit),$this->db->escape($IDQuantite));
        $this->db->query($sql);
    }

    public function getNomCaisse($idCaisse){
        $sql="SELECT * FROM caisse WHERE IDCaisse=%s";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $query=$this->db->query($sql);
        $retour=array();
        foreach($query->result_array() as $one){
            $retour[]=$one;
        }
        return $retour;
    }

    public function getNomProduit($idCaisse){
        $sql="SELECT p.* FROM produit p, achat a WHERE p.IDProduit=a.IDProduit AND a.IDCaisse=%s";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
        $query=$this->db->query($sql);
        $retour=array();
        foreach($query->result_array() as $one){
            $retour[]=$one;
        }
        return $retour;
    }

    public function updateStock($nomProduit,$quantite,$avant){
        $final=$avant-$quantite;
        $sql="UPDATE Produit SET Stock=%s WHERE NomProduit=%s";
        $sql = sprintf($sql, $this->db->escape($final), $this->db->escape($nomProduit));
        $this->db->query($sql);
    }

    public function deleteAchat($idAchat){
        $sql="DELETE FROM Achat WHERE IDAchat=%s";
        $sql = sprintf($sql, $this->db->escape($idAchat));
        $this->db->query($sql);
    }

    public function insertAchate($idcaisse,$idproduit,$quantite,$utilisateur){
        $sql="INSERT INTO Achat VALUES(NULL, '%s', '%s', '%s', '%s')";
        $sql=sprintf($sql,$idcaisse,$idproduit,$quantite,$utilisateur);
        $this->db->query($sql);
    }

    public function getBasket()
    {
        $sql = "SELECT a.IDAchat, c.NumeroCaisse, p.NomProduit, p.Source, p.prix, a.Quantite, (a.Quantite*p.prix) as total, p.Stock FROM Achat a JOIN Caisse c ON c.IDCaisse = a.IDCaisse JOIN Produit p ON p.IDProduit = a.IDProduit";
         $query=$this->db->query($sql);
        $retour=array();
        foreach ($query->result_array() as $one) {
            $retour[] = $one;
        }
        return $retour;

    }
} 
?>