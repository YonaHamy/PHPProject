<?php
/**
 * Created by PhpStorm.
 * User: Laboss
 * Date: 04/12/2019
 * Time: 11:05
 */

class Mission
{
    private $Id;
    private $Nom;
    private $Client;
    private $Experts;
    private $Prix;
    private $DateDebut;
    private $DateFin;


    Public function __construct($Nom, $Client, $Experts,$Prix, $DateDebut, $DateFin)
    {

        $this->Nom = $Nom;
        $this->Client = $Client;
        $this->Experts = $Experts;
        $this->Prix = $Prix;
        $this->DateDebut = $DateDebut;
        $this->DateFin = $DateFin;

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


    function get_Client()
    {
        return $this->Client;
    }
    function set_Client($Client)
    {
        $this->Client = $Client;
    }


    function get_Experts()
    {
        return $this->Experts;
    }
    function set_Experts($Experts)
    {
        $this->Experts = $Experts;
    }


    function get_Prix()
    {
        return $this->Prix;
    }
    function set_Prix($Prix)
    {
        $this->Prix = $Prix;
    }


    function get_DateDebut()
    {
        return $this->DateDebut;
    }
    function set_DateDebut($DateDebut)
    {
        $this->DateDebut = $DateDebut;
    }


    function get_DateFin()
    {
        return $this->DateFin;
    }
    function set_DateFin($DateFin)
    {
        $this->DateFin = $DateFin;
    }
}