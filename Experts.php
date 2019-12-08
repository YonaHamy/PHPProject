<?php
/**
 * Created by PhpStorm.
 * User: Laboss
 * Date: 04/12/2019
 * Time: 11:01
 */

class Experts
{
    private $Id;
    private $Nom;
    private $Prenom;
    private $Qualification;
    private $Responsable;
    private $Departement;

    Public function __construct($Nom, $Prenom,$Qualification, $Responsable, $Departement)
    {

        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Qualification = $Qualification;
        $this->Responsable = $Responsable;
        $this->Departement = $Departement;

    }

    function get_Id()
    {
        return $this->Id;
    }
    function set_Id($Id)
    {
        $this->Id = $Id;
    }

    function get_Nom()
    {
        return $this->Nom;
    }
    function set_Nom($Nom)
    {
        $this->Nom = $Nom;
    }


    function get_Prenom()
    {
        return $this->Prenom;
    }
    function set_Prenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }


    function get_Qualification()
    {
        return $this->Qualification;
    }
    function set_Qualification($Qualification)
    {
        $this->Qualification = $Qualification;
    }


    function get_Responsable()
    {
        return $this->Responsable;
    }
    function set_Responsable($Responsable)
    {
        $this->Responsable = $Responsable;
    }


    function get_Departement()
    {
        return $this->Departement;
    }
    function set_Departement($Departement)
    {
        $this->Departement = $Departement;
    }
}