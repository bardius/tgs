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
use BardisCMS\SpotBundle\Entity\Spot;

class SpotFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $spothome = new Spot();
        $spothome->setDate(new \DateTime());
        $spothome->setTitle('Spots');
        $spothome->setAuthor($manager->merge($this->getReference('admin')));
        $spothome->setAlias('list');
        $spothome->setShowPageTitle(1);
        $spothome->setPublishState(1);		
        $spothome->setIntrotext('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.');
        $spothome->setPagetype('spot_home');
		$manager->persist($spothome);
		
        $testspot1 = new Spot();
        $testspot1->setDate(new \DateTime());
        $testspot1->setTitle('Test spot page 1');
        $testspot1->setAuthor($manager->merge($this->getReference('admin')));
        $testspot1->setAlias('test-spot-page-1');
        $testspot1->setShowPageTitle(1);
        $testspot1->setPublishState(1);
        $testspot1->setFeaturedSpot(1);
        $testspot1->setMapLatitude(52.1111);
        $testspot1->setMapLongitude(31.1111);		
        $testspot1->setIntrotext('Lorem ipsum dolor sit amet');
        $testspot1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.');
        $testspot1->setPagetype('spot_article');
        $testspot1->addSpotDestinationFilter($manager->merge($this->getReference('spotDestinationFilter')));
        $testspot1->addSpotFilter($manager->merge($this->getReference('spotFilter1')));
		$manager->persist($testspot1);
		
        $testspot2 = new Spot();
        $testspot2->setDate(new \DateTime());
        $testspot2->setTitle('Test spot page 2');
        $testspot2->setAuthor($manager->merge($this->getReference('admin')));
        $testspot2->setAlias('test-spot-page-2');
        $testspot2->setShowPageTitle(1);
        $testspot2->setPublishState(1);
        $testspot2->setFeaturedSpot(1);
        $testspot2->setMapLatitude(52.1111);
        $testspot2->setMapLongitude(31.1111);		
        $testspot2->setIntrotext('Lorem ipsum dolor sit amet 2');
        $testspot2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports 2.');
        $testspot2->setPagetype('spot_article');
        $testspot2->addSpotDestinationFilter($manager->merge($this->getReference('spotDestinationFilter')));
        $testspot2->addSpotFilter($manager->merge($this->getReference('spotFilter1')));
		$manager->persist($testspot2);
		
        $manager->flush();
		
		$this->addReference('spothome', $spothome);		
		$this->addReference('testspot1', $testspot1);	
		$this->addReference('testspot2', $testspot2);
    }
	
	public function getOrder()
    {
        return 14;
    }

}