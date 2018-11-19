<?php
class Model_Principal extends CI_Model
{
    public function AfficherTousLesUtilisateurs()
    {
        $sql = $this->db->query("select idUser, nomUser, statutUser from user");
        return $sql->result();
    }
    public function AfficherLesRegionsParIdUser($user)
    {
        $requeteU = $this->db->query("select statutUser from user
        where nomUser='".$user."'
        and statutUser='".$statut."'");
        $statut = $requeteU->result()[0]->statutUser;
        return $sql->result();
        if($statut == "admin")
        {
            $req = $this->db->query("select * from region");
            return $sql->result();
        }
        else
        {
            $req = $this->db->query("select * from region
            where nomRegion = 'Bourgogne'");
            return $sql->result();
        }
    }
    public function AfficherLesVillesParIdRegion($idRegion)
    {
        $sql = $this->db->query("select idVille, nomVille, scoreVille 
        from ville
        where numRegion ='".$idRegion."'");
        return $sql->result();
    }
}
?>