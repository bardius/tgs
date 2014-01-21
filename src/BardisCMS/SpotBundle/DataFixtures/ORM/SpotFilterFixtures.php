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
use BardisCMS\SpotBundle\Entity\SpotFilter;

class SpotFilterFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $spotFilter1 = new SpotFilter();
        $spotFilter1->setTitle('Low Budjet');
        $spotFilter1->setFilterCategory('Budget');
		$manager->persist($spotFilter1);
		
        $manager->flush();
		
		$this->addReference('spotFilter1', $spotFilter1);
    }
	
	public function getOrder()
    {
        return 13;
    }

}