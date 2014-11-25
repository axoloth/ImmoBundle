<?php

namespace Axoloth\ImmoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticController extends Controller{
    
	public function indexAction(Request $request){
        return $this->render('AxolothImmoBundle:Static:index.html.twig', array());
    }
    
    
    
    public function agentImmobilierAction(Request $request){
    	return $this->render('AxolothImmoBundle:Static:notreMetier.html.twig', array());
    }
    
    
    public function honorairesAction(Request $request){
    	return $this->render('AxolothImmoBundle:Static:honoraires.html.twig', array());
    }
    
}
