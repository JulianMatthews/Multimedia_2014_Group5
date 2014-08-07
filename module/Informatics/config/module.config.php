<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//handles routes as well as our controllers
return array(
     'controllers' => array(
         'invokables' => array(
             'Informatics\Controller\Informatics' => 'Informatics\Controller\InformaticsController', //add new controllers here 
         ),
     ),

     // The following section is new and should be added to your file
     'router' => array(
         'routes' => array(
             'informatics' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/informatics[/][:action]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                     ),
                     'defaults' => array(
                         'controller' => 'Informatics\Controller\Informatics',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'informatics' => __DIR__ . '/../view',
         ),
     ),
 );

