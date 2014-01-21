<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BardisCMS\SpotBundle\Entity\SpotDestinationFilter;

class SpotDestinationFilterFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $spotDestinationFilter = new SpotDestinationFilter();
        $spotDestinationFilter->setTitle('Halkidiki');
		$spotDestinationFilter->setDestination($manager->merge($this->getReference('destination1')));
		$manager->persist($spotDestinationFilter);
		
        $manager->flush();
		
		$this->addReference('spotDestinationFilter', $spotDestinationFilter);
    }
	
	public function getOrder()
    {
        return 12;
    }

}