<?php
/*
 * Destination Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\DestinationBundle\Listener;

use Doctrine\ORM\Event\OnFlushEventArgs;

class TagTimestampListener
{
    public function onFlush(OnFlushEventArgs $args)
    {
		$em = $args->getEntityManager();
		$uow = $em->getUnitOfWork();

		$entities = array_merge(
			$uow->getScheduledEntityInsertions(),
			$uow->getScheduledEntityUpdates()
		);

		foreach ($entities as $entity) {
			if (!(get_class($entity) == 'BardisCMS\DestinationBundle\Entity\DestinationTag')) {
				continue;
			}
			
			$taggedEntities = array(
				array( 'taggedDestination' => $entity->getDestinations(), 'classMetadata' => 'BardisCMS\DestinationBundle\Entity\Destination')
			);
			
			
			foreach ($taggedEntities as $taggedEntity) {
				
				foreach ($taggedEntity['taggedDestination'] as $taggedPage) {
				
					$taggedPage->setDateLastModified($entity->getDateLastModified());
					
					$em->persist($taggedPage);
					$md = $em->getClassMetadata($taggedEntity['classMetadata']);
					$uow->recomputeSingleEntityChangeSet($md, $taggedPage);
				}
			}
		}
    }
}