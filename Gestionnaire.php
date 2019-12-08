<?php
/**
 * Created by PhpStorm.
 * User: Laboss
 * Date: 08/12/2019
 * Time: 15:04
 */

class Gestionnaire
{

    private $pdo;

    Public function __construct($pdo)
    {
        $this->set_pdo($pdo);

    }

    function set_pdo($pdo){
        $this->pdo=$pdo;
    }

    public function addMission(Mission $Mission){

        $req = $this->pdo->prepare('INSERT INTO mission(Nom, Client, Experts, Prix, DateDebut, DateFin) VALUES(:Nom, :Client, :Experts, :Prix, :DateDebut, :DateFin)');

        $req->bindValue(':Nom', $Mission->get_Nom());
        $req->bindValue(':Client', $Mission->get_Client());
        $req->bindValue(':Experts', $Mission->get_Experts());
        $req->bindValue(':Prix', $Mission->get_Prix());
        $req->bindValue(':DateDebut', $Mission->get_DateDebut());
        $req->bindValue(':DateFin', $Mission->get_DateFin());


        $req->execute();
    }

    public function addClient(Client $Client){

        $req = $this->pdo->prepare('INSERT INTO client(Nom, Prenom, Mail, Entreprise, NumeroSIRET) VALUES(:Nom, :Prenom, :Mail, :Entreprise, :NumeroSIRET)');

        $req->bindValue(':Nom', $Client->get_Nom());
        $req->bindValue(':Prenom', $Client->get_Prenom());
        $req->bindValue(':Mail', $Client->get_Mail());
        $req->bindValue(':Entreprise', $Client->get_Entreprise());
        $req->bindValue(':NumeroSIRET', $Client->get_NumeroSIRET());


        $req->execute();
    }

    public function addExperts(Experts $Experts){

        $req = $this->pdo->prepare('INSERT INTO experts(Nom, Prenom, Qualification, Responsable, Departement) VALUES(:Nom, :Prenom, :Qualification, :Responsable, :Departement)');

        $req->bindValue(':Nom', $Experts->get_Nom());
        $req->bindValue(':Prenom', $Experts->get_Prenom());
        $req->bindValue(':Qualification', $Experts->get_Qualification());
        $req->bindValue(':Responsable', $Experts->get_Responsable());
        $req->bindValue(':Departement', $Experts->get_Departement());


        $req->execute();
    }

    public function addExternes(Externes $Externes){

        $req = $this->pdo->prepare('INSERT INTO externes(Nom, Prenom, Mail, Qualification, Entreprise, NumeroSIRET) VALUES(:Nom, :Prenom, :Mail, :Qualification, :Entreprise, :NumeroSIRET)');

        $req->bindValue(':Nom', $Externes->get_Nom());
        $req->bindValue(':Prenom', $Externes->get_Prenom());
        $req->bindValue(':Mail', $Externes->get_Mail());
        $req->bindValue(':Qualification', $Externes->get_Qualification());
        $req->bindValue(':Entreprise', $Externes->get_Entreprise());
        $req->bindValue(':NumeroSIRET', $Externes->get_NumeroSIRET());


        $req->execute();
    }
}
