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
        $menuSpots->setOrdering(2);
		$manager->persist($menuSpots);
		
        $menuEvents = new Menu();
		$menuEvents->setBlog($manager->merge($this->getReference('blogevents')));
        $menuEvents->setTitle('Events');
        $menuEvents->setMenuType('Blog');
        $menuEvents->setRoute('showPage');
        $menuEvents->setAccessLevel(0);
        $menuEvents->setParent(0);
        $menuEvents->setMenuGroup('Main Menu');
        $menuEvents->setPublishState(1);
        $menuEvents->setOrdering(3);
		$manager->persist($menuEvents);
		
        $menuNews = new Menu();
		$menuNews->setBlog($manager->merge($this->getReference('blognews')));
        $menuNews->setTitle('News');
        $menuNews->setMenuType('Blog');
        $menuNews->setRoute('showPage');
        $menuNews->setAccessLevel(0);
        $menuNews->setParent(0);
        $menuNews->setMenuGroup('Main Menu');
        $menuNews->setPublishState(1);
        $menuNews->setOrdering(4);
		$manager->persist($menuNews);
		
        $menuSamplePage1 = new Menu();
		$menuSamplePage1->setPage($manager->merge($this->getReference('page2')));
        $menuSamplePage1->setTitle('Sports');
        $menuSamplePage1->setMenuType('Page');
        $menuSamplePage1->setRoute('showPage');
        $menuSamplePage1->setAccessLevel(0);
        $menuSamplePage1->setParent(0);
        $menuSamplePage1->setMenuGroup('Main Menu');
        $menuSamplePage1->setPublishState(1);
        $menuSamplePage1->setOrdering(5);
		$manager->persist($menuSamplePage1);
		
        $menuSamplePage2 = new Menu();
		$menuSamplePage2->setPage($manager->merge($this->getReference('page1')));
        $menuSamplePage2->setTitle('E-Magazine');
        $menuSamplePage2->setMenuType('Page');
        $menuSamplePage2->setRoute('showPage');
        $menuSamplePage2->setAccessLevel(0);
        $menuSamplePage2->setParent(0);
        $menuSamplePage2->setMenuGroup('Main Menu');
        $menuSamplePage2->setPublishState(1);
        $menuSamplePage2->setOrdering(6);
		$manager->persist($menuSamplePage2);
		
        $menuContactPage = new Menu();
		$menuContactPage->setPage($manager->merge($this->getReference('pagecontact')));
        $menuContactPage->setTitle('Contact Us');
        $menuContactPage->setMenuType('Page');
        $menuContactPage->setRoute('showPage');
        $menuContactPage->setAccessLevel(0);
        $menuContactPage->setParent(0);
        $menuContactPage->setMenuGroup('Main Menu');
        $menuContactPage->setPublishState(1);
        $menuContactPage->setOrdering(7);
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
		$this->addReference('menuSamplePage2', $menuSamplePage1);
		$this->addReference('menuSamplePage', $menuSamplePage2);
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