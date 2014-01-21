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
use BardisCMS\DestinationBundle\Entity\DestinationCategory;

class DestinationCategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $destinationCategoryHome = new DestinationCategory();
        $destinationCategoryHome->setTitle('Destination Home');
		$manager->persist($destinationCategoryHome);
		
        $destinationCategoryNorthGreece = new DestinationCategory();
        $destinationCategoryNorthGreece->setTitle('North Greece');
        $destinationCategoryNorthGreece->setClass('north-greece');
		$manager->persist($destinationCategoryNorthGreece);
		
        $manager->flush();
		
		$this->addReference('destinationCategoryHome', $destinationCategoryHome);	
		$this->addReference('destinationCategoryNorthGreece', $destinationCategoryNorthGreece);
    }
	
	public function getOrder()
    {
        return 9;
    }

}