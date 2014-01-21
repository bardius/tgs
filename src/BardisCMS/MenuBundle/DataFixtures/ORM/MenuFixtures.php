<?php

/*
 * Menu Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\MenuBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BardisCMS\MenuBundle\Entity\Menu;

class MenuFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $menuHome = new Menu();
		$menuHome->setPage($manager->merge($this->getReference('homepage')));
        $menuHome->setTitle('Homepage');
        $menuHome->setMenuType('Page');
        $menuHome->setRoute('showPage');
        $menuHome->setAccessLevel(0);
        $menuHome->setParent(0);
        $menuHome->setMenuGroup('Main Menu');
        $menuHome->setPublishState(1);
        $menuHome->setOrdering(0);
		$manager->persist($menuHome);
		
        $menuSamplePage = new Menu();
		$menuSamplePage->setPage($manager->merge($this->getReference('page1')));
        $menuSamplePage->setTitle('Test Page 1');
        $menuSamplePage->setMenuType('Page');
        $menuSamplePage->setRoute('showPage');
        $menuSamplePage->setAccessLevel(0);
        $menuSamplePage->setParent(0);
        $menuSamplePage->setMenuGroup('Main Menu');
        $menuSamplePage->setPublishState(1);
        $menuSamplePage->setOrdering(1);
		$manager->persist($menuSamplePage);
		
        $menuDestinations = new Menu();
		$menuDestinations->setDestination($manager->merge($this->getReference('destinationhome')));
        $menuDestinations->setTitle('Destinations');
        $menuDestinations->setMenuType('Destination');
        $menuDestinations->setRoute('showPage');
        $menuDestinations->setAccessLevel(0);
        $menuDestinations->setParent(0);
        $menuDestinations->setMenuGroup('Main Menu');
        $menuDestinations->setPublishState(1);
        $menuDestinations->setOrdering(1);
		$manager->persist($menuDestinations);
		
        $menuSpots = new Menu();
		$menuSpots->setSpot($manager->merge($this->getReference('spothome')));
        $menuSpots->setTitle('Spots');
        $menuSpots->setMenuType('Spot');
        $menuSpots->setRoute('showPage');
        $menuSpots->setAccessLevel(0);
        $menuSpots->setParent(0);
        $menuSpots->setMenuGroup('Main Menu');
        $menuSpots->setPublishState(1);
        $menuSpots->setOrdering(1);
		$manager->persist($menuSpots);
		
        $menuNews = new Menu();
		$menuNews->setBlog($manager->merge($this->getReference('blognews')));
        $menuNews->setTitle('News');
        $menuNews->setMenuType('Blog');
        $menuNews->setRoute('showPage');
        $menuNews->setAccessLevel(0);
        $menuNews->setParent(0);
        $menuNews->setMenuGroup('Main Menu');
        $menuNews->setPublishState(1);
        $menuNews->setOrdering(1);
		$manager->persist($menuNews);
		
        $menuEvents = new Menu();
		$menuEvents->setBlog($manager->merge($this->getReference('blogevents')));
        $menuEvents->setTitle('Events');
        $menuEvents->setMenuType('Blog');
        $menuEvents->setRoute('showPage');
        $menuEvents->setAccessLevel(0);
        $menuEvents->setParent(0);
        $menuEvents->setMenuGroup('Main Menu');
        $menuEvents->setPublishState(1);
        $menuEvents->setOrdering(1);
		$manager->persist($menuEvents);
		
        $menuContactPage = new Menu();
		$menuContactPage->setPage($manager->merge($this->getReference('pagecontact')));
        $menuContactPage->setTitle('Contact Page');
        $menuContactPage->setMenuType('Page');
        $menuContactPage->setRoute('showPage');
        $menuContactPage->setAccessLevel(0);
        $menuContactPage->setParent(0);
        $menuContactPage->setMenuGroup('Main Menu');
        $menuContactPage->setPublishState(1);
        $menuContactPage->setOrdering(5);
		$manager->persist($menuContactPage);
		
        $menuSitemapPage = new Menu();
		$menuSitemapPage->setPage($manager->merge($this->getReference('pagesitemap')));
        $menuSitemapPage->setTitle('Sitemap');
        $menuSitemapPage->setMenuType('Page');
        $menuSitemapPage->setRoute('showPage');
        $menuSitemapPage->setAccessLevel(0);
        $menuSitemapPage->setParent(0);
        $menuSitemapPage->setMenuGroup('Footer Menu');
        $menuSitemapPage->setPublishState(1);
        $menuSitemapPage->setOrdering(0);
		$manager->persist($menuSitemapPage);
		
        $manager->flush();
		
		$this->addReference('menuHome', $menuHome);
		$this->addReference('menuSamplePage', $menuSamplePage);
		$this->addReference('menuDestinations', $menuDestinations);
		$this->addReference('menuSpots', $menuSpots);
		$this->addReference('menuNews', $menuNews);	
		$this->addReference('menuEvents', $menuEvents);		
		$this->addReference('menuContactPage', $menuContactPage);
		$this->addReference('menuSitemapPage', $menuSitemapPage);
    }
	
	public function getOrder()
    {
        return 16;
    }

}