<?php
/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Listener;

use Doctrine\ORM\Event\OnFlushEventArgs;

class SpotFilterTimestampListener
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
			if (!(get_class($entity) == 'BardisCMS\SpotBundle\Entity\SpotFilter')) {
				continue;
			}
			
			$taggedEntities = array(
				array( 'taggedSpot' => $entity->getSpots(), 'classMetadata' => 'BardisCMS\SpotBundle\Entity\Spot')
			);
			
			foreach ($taggedEntities as $taggedEntity) {
				
				foreach ($taggedEntity['taggedSpot'] as $taggedSpot) {
				
					$taggedSpot->setDateLastModified($entity->getDateLastModified());
					
					$em->persist($taggedSpot);
					$md = $em->getClassMetadata($taggedEntity['classMetadata']);
					$uow->recomputeSingleEntityChangeSet($md, $taggedSpot);
				}
			}
		}
    }
}