<?php

/*
 * User Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace Application\Sonata\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sonata\UserBundle\Admin\Model\UserAdmin as BaseUserAdmin;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setCreated_at(new \DateTime());
        $admin->setUpdated_at(new \DateTime());
        $admin->setUsername('administrator');
        $admin->setUsername_canonical('administrator');
        $admin->setEmail('george@bardis.info');
        $admin->setEmail_canonical('george@bardis.info');
        $admin->setEnabled(1);
        $admin->setSalt('9jhl6ucm3wo4w4kc80w4444kw08s4sg');
        $admin->setPassword('gK/EOnx7yyY4iQTeta/8Pp87E6DW2IMmUe4fiweTZDQ7cjKSvZgeFtFQoNk3HHcGtXwDFzHbzujCu85mGeC1ww==');
		$admin->setRoles('a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}');
		$manager->persist($admin);
		
        $manager->flush();
		
		$this->addReference('admin', $admin);
    }
	
	public function getOrder()
    {
        return 0;
    }

}