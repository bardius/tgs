<?php
/*
 * Settings Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace BardisCMS\SettingsBundle\Services;

use Doctrine\ORM\EntityManager;
use BardisCMS\SettingsBundle\Entity\Settings;

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