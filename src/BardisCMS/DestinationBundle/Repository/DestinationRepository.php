<?php

/*
 * Destination Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\DestinationBundle\Repository;

use Doctrine\ORM\EntityRepository;


class DestinationRepository extends EntityRepository
{
    
    public function getCategoryItems($categoryIds, $currentPageId, $publishStates, $currentpage, $totalpageitems)
    {
        
        if(!empty($categoryIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('DestinationBundle:Destination', 'p')
                ->innerJoin('p.categories', 'c')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':category'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.pageType', ':categorypagePageType'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('categorypagePageType', 'destination_cat_page')
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('DestinationBundle:Destination', 'p')
                ->innerJoin('p.categories', 'c')
                ->where($countqb->expr()->andX(
                    $countqb->expr()->in('c.id', ':category'),
                    $countqb->expr()->in('p.publishState', ':publishState'),
                    $countqb->expr()->neq('p.pageType', ':categorypagePageType'),
                    $countqb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('categorypagePageType', 'destination_cat_page')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());
        
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
            
        return  $pageList;
    }
	
    
    public function getSitemapList($publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
            
        $qb->select('DISTINCT p')
            ->from('DestinationBundle:Destination', 'p')
            ->where(
                $qb->expr()->in('p.publishState', ':publishState')
            )
            ->orderBy('p.title', 'ASC')
            ->setParameter('publishState', $publishStates)
        ;
                    
        $sitemapList = $qb->getQuery()->getResult();
        
        return  $sitemapList;
    } 
    
    
    public function getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems)
    {
        $pages      = null;
        $totalPages = 1;
        
        // Get paginated results
        if ((isset($currentpage)) && (isset($totalpageitems))) {
            if ($totalpageitems > 0) {    
                $startingItem   = (intval($currentpage) * $totalpageitems);
                $qb->setFirstResult($startingItem);
                $qb->setMaxResults($totalpageitems);
            }
        }
            
        $pages      = $qb->getQuery()->getResult();
        $totalPages = ceil($totalResultsCount / $totalpageitems); 
        $pageList   = array('pages' => $pages, 'totalPages' => $totalPages);
        
        return  $pageList;
    }
	
    
    public function getRelatedSpots($currentPageId, $publishStates)
    {   
        $relatedSpots = null;
		
        $qb = $this->_em->createQueryBuilder(); 
            
        $qb->select('DISTINCT s')
            ->from('SpotBundle:Spot', 's')
            ->innerJoin('s.spotDestinationFilters', 'd')
            ->where($qb->expr()->andX(
                $qb->expr()->in('d.destination', ':destination'),
                $qb->expr()->in('s.publishState', ':publishState'),
                $qb->expr()->eq('s.pagetype', ':pagetype')
            ))
            ->orderBy('s.date', 'DESC')
            ->setParameter('destination', $currentPageId)
            ->setParameter('publishState', $publishStates)
            ->setParameter('pagetype', 'spot_article')
        ;
                    
        $relatedSpots = $qb->getQuery()->getResult();
        
        return  $relatedSpots;
    }
	
	
	public function getDestinationHomeItems($publishStates)
    {
		$pagetype	= 'destination_cat_page';
        $qb         = $this->_em->createQueryBuilder();
            
        $qb->select('DISTINCT p')
            ->from('DestinationBundle:Destination', 'p')
            ->where($qb->expr()->andX(
                $qb->expr()->in('p.pageType', ':pagetype'),
                $qb->expr()->in('p.publishState', ':publishState')
            ))
            ->orderBy('p.date', 'DESC')
            ->setParameter('pagetype', $pagetype)
            ->setParameter('publishState', $publishStates)
        ;
        
		$pages		= $qb->getQuery()->getResult();
        $pageList	= array('pages' => $pages);
			
        return  $pageList;
    }  
}