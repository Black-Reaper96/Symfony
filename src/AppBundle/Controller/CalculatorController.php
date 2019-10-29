<?php
namespace AppBundle\Controller;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends Controller{
    public function indexAction($age){
        $currentYear=date('Y');
        return new Response('<html><body>Año actual: ' . $currentYear . '<br/>Año de nacimiento: ' . ($currentYear - $age) . '</body></html>');
    }
}
