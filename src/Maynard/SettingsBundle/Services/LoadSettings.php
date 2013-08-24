<?php
/*
 * Settings Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\SettingsBundle\Services;

use Doctrine\ORM\EntityManager;
use Maynard\SettingsBundle\Entity\Settings;

class LoadSettings
{
    private $em;
    private $conn;
 
    public function __construct(EntityManager $em) {
        $this->em = $em;
        $this->conn = $em->getConnection();
    }
 
    public function loadSettings()
    {
        $settings = $this->em->getRepository('SettingsBundle:Settings')->findAll();
        
        if(empty($settings))
        {
            return null;
        }
        else
        {
            return $settings[0];            
        }
    }
}