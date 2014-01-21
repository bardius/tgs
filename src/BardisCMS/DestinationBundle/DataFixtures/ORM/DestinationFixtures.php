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
use BardisCMS\DestinationBundle\Entity\Destination;

class DestinationFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $destinationhome = new Destination();
        $destinationhome->setDate(new \DateTime());
        $destinationhome->setTitle('Destinations');
        $destinationhome->setAuthor($manager->merge($this->getReference('admin')));
        $destinationhome->setAlias('list');
        $destinationhome->setShowPageTitle(1);
        $destinationhome->setPublishState(1);		
        $destinationhome->setIntrotext('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.');
        $destinationhome->setPagetype('destination_home');
		$manager->persist($destinationhome);
		
        $destinationnorthgreece = new Destination();
        $destinationnorthgreece->setDate(new \DateTime());
        $destinationnorthgreece->setTitle('North Greece');
        $destinationnorthgreece->setAuthor($manager->merge($this->getReference('admin')));
        $destinationnorthgreece->setAlias('north-greece');
        $destinationnorthgreece->setShowPageTitle(1);
        $destinationnorthgreece->setPublishState(1);
        $destinationnorthgreece->setIntrotext('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.');
        $destinationnorthgreece->setPagetype('destination_cat_page');
        $destinationnorthgreece->addCategory($manager->merge($this->getReference('destinationCategoryHome')));
        $destinationnorthgreece->addCategory($manager->merge($this->getReference('destinationCategoryNorthGreece')));
		$manager->persist($destinationnorthgreece);
		
        $destination1 = new Destination();
        $destination1->setDate(new \DateTime());
        $destination1->setTitle('Halkidiki');
        $destination1->setAuthor($manager->merge($this->getReference('admin')));
        $destination1->setAlias('halkidiki');
        $destination1->setShowPageTitle(1);
        $destination1->setPublishState(1);
        $destination1->setIntrotext('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.');
        $destination1->setPagetype('destination_article');
        $destination1->addCategory($manager->merge($this->getReference('destinationCategoryNorthGreece')));
        $destination1->addTag($manager->merge($this->getReference('destinationTagSurf')));
		$manager->persist($destination1);
		
        $manager->flush();
		
		$this->addReference('destinationhome', $destinationhome);		
		$this->addReference('destinationnorthgreece', $destinationnorthgreece);
		$this->addReference('destination1', $destination1);
    }
	
	public function getOrder()
    {
        return 11;
    }

}