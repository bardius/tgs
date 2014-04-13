<?php
/*
 * ContentBlock Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\ContentBlockBundle\Listener;

use Doctrine\ORM\Event\OnFlushEventArgs;

class TimestampListener
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
			if (!(get_class($entity) == 'BardisCMS\ContentBlockBundle\Entity\ContentBlock')) {
				continue;
			}
			
			$contentBlockSlots = array(
				array( 'contentBlockSlot' => $entity->getMaincontents(), 'classMetadata' => 'BardisCMS\PageBundle\Entity\Page'),
				array( 'contentBlockSlot' => $entity->getSecondarycontents(), 'classMetadata' => 'BardisCMS\PageBundle\Entity\Page'),
				array( 'contentBlockSlot' => $entity->getExtracontents(), 'classMetadata' => 'BardisCMS\PageBundle\Entity\Page'),
				array( 'contentBlockSlot' => $entity->getModalcontents(), 'classMetadata' => 'BardisCMS\PageBundle\Entity\Page'),
				array( 'contentBlockSlot' => $entity->getBannercontents(), 'classMetadata' => 'BardisCMS\PageBundle\Entity\Page'),
				array( 'contentBlockSlot' => $entity->getBlogMaincontents(), 'classMetadata' => 'BardisCMS\BlogBundle\Entity\Blog'),
				array( 'contentBlockSlot' => $entity->getBlogExtracontents(), 'classMetadata' => 'BardisCMS\BlogBundle\Entity\Blog'),
				array( 'contentBlockSlot' => $entity->getBlogModalcontents(), 'classMetadata' => 'BardisCMS\BlogBundle\Entity\Blog'),
				array( 'contentBlockSlot' => $entity->getBlogBannercontents(), 'classMetadata' => 'BardisCMS\BlogBundle\Entity\Blog'),
				array( 'contentBlockSlot' => $entity->getDestinationMaincontents(), 'classMetadata' => 'BardisCMS\DestinationBundle\Entity\Destination'),
				array( 'contentBlockSlot' => $entity->getDestinationSecondarycontents(), 'classMetadata' => 'BardisCMS\DestinationBundle\Entity\Destination'),
				array( 'contentBlockSlot' => $entity->getDestinationModalcontents(), 'classMetadata' => 'BardisCMS\DestinationBundle\Entity\Destination'),
				array( 'contentBlockSlot' => $entity->getDestinationBannercontents(), 'classMetadata' => 'BardisCMS\DestinationBundle\Entity\Destination'),
				array( 'contentBlockSlot' => $entity->getSpotMaincontents(), 'classMetadata' => 'BardisCMS\SpotBundle\Entity\Spot'),
				array( 'contentBlockSlot' => $entity->getSpotSecondarycontents(), 'classMetadata' => 'BardisCMS\SpotBundle\Entity\Spot'),
				array( 'contentBlockSlot' => $entity->getSpotBannercontents(), 'classMetadata' => 'BardisCMS\SpotBundle\Entity\Spot'),
				array( 'contentBlockSlot' => $entity->getSpotModalcontents(), 'classMetadata' => 'BardisCMS\SpotBundle\Entity\Spot')
			);
			
			
			foreach ($contentBlockSlots as $contentBlockSlot) {
				
				foreach ($contentBlockSlot['contentBlockSlot'] as $contentBlockHolder) {
				
					$contentBlockHolder->setDateLastModified($entity->getDateLastModified());
					
					$em->persist($contentBlockHolder);
					$md = $em->getClassMetadata($contentBlockSlot['classMetadata']);
					$uow->recomputeSingleEntityChangeSet($md, $contentBlockHolder);
				}
			}
		}
    }
}