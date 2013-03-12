<?php

namespace CMS\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function indexAction($path)
    {
        $menus = array (
                'home' => 'Home',
                'project' => 'Project',
                'service' => 'Service',
                'download' => 'Downloads',
                'about' => 'About',
                'contact' => 'Contact Us'
        );
        $active = null;
        foreach ( $menus as $key => $value ) {
            if ($path == $key) {
                $active = $key;
            }
        }
        
        return $this->render ( 'CMSWebBundle:Menu:index.html.twig', array (
                'menus' => $menus,
                'active' => $active
        ) );
        //return $this->render('CMSWebBundle:Menu:index.html.twig');
    }
}
