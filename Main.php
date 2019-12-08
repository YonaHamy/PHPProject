<?php
/**
 * Created by PhpStorm.
 * User: Laboss
 * Date: 04/12/2019
 * Time: 11:54
 */
include '../db.php';

require('Client.php');
require('Externes.php');
require('Mission.php');


$Client1 = new Client ('0',"Hamy","Yona","Test","test@gmail.com","Entreprise1","99");

$Externe1 = new Externes('3',"Hamy","Yona","Test","test","Entreprise2","999");

$Mission = new Mission('9',"Tester XXX","Hanoy","W/Y/Z","1000","10/02","10/06");

