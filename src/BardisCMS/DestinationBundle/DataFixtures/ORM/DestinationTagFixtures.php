<?php

/*
 * Destination Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\DestinationBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BardisCMS\DestinationBundle\Entity\DestinationTag;

class DestinationTagFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $destinationTagSurf = new DestinationTag();
        $destinationTagSurf->setTitle('Surf');
        $destinationTagSurf->setStyleColor('green');
        $destinationTagSurf->setTagCategory('sports');
		$manager->persist($destinationTagSurf);
		
        $manager->flush();
		
		$this->addReference('destinationTagSurf', $destinationTagSurf);
    }
	
	public function getOrder()
    {
        return 10;
    }

}