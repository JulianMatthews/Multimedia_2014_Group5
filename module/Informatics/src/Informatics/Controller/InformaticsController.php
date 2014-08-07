<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Informatics\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class InformaticsController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'message' => 'We are in the index action',
            'from' => 'This is from the index action'
        ));
    }
    
    public function aboutAction()
    {
        return new ViewModel(array(
            'message' => 'We are in the about action'
        ));
    }
    
    public function coursesAction()
    {
        return new ViewModel(array(
            'message' => 'We are in the courses action'
        ));
        
        
    }
    
    public function registerAction()
    {
        return new ViewModel(array(
            'message' => 'We are in the register action'
        ));
        
        
    }
    
    
    
}

