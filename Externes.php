<?php
/**
 * Created by PhpStorm.
 * User: Laboss
 * Date: 04/12/2019
 * Time: 11:05
 */

class Externes
{
    private $Id;
    private $Nom;
    private $Prenom;
    private $Mail;
    private $Qualification;
    private $Entreprise;
    private $NumeroSIRET;

    Public function __construct($Nom, $Prenom, $Mail,$Qualification, $Entreprise, $NumeroSIRET)
    {

        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Mail = $Mail;
        $this->Qualification = $Qualification;
        $this->Entreprise = $Entreprise;
        $this->NumeroSIRET = $NumeroSIRET;

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


    function get_Mail()
    {
        return $this->Mail;
    }
    function set_Mail($Mail)
    {
        $this->Mail = $Mail;
    }


    function get_Qualification()
    {
        return $this->Qualification;
    }
    function set_Qualification($Qualification)
    {
        $this->Qualification = $Qualification;
    }


    function get_Entreprise()
    {
        return $this->Entreprise;
    }
    function set_Entreprise($Entreprise)
    {
        $this->Entreprise = $Entreprise;
    }


    function get_NumeroSIRET()
    {
        return $this->NumeroSIRET;
    }
    function set_NumeroSIRET($NumeroSIRET)
    {
        $this->NumeroSIRET = $NumeroSIRET;
    }
}