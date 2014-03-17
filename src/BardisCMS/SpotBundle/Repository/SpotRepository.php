<?php

/*
 * Spot Bundle
 * This file is part of the BardisCMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */

namespace BardisCMS\SpotBundle\Repository;

use Doctrine\ORM\EntityRepository;


class SpotRepository extends EntityRepository
{
    
    public function getSpotDestinationItems($spotdestinationIds, $currentPageId, $publishStates, $currentpage, $totalpageitems)
    {
        
        if(!empty($spotdestinationIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotDestinationFilters', 'c')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':spotdestination'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestinationIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotDestinationFilters', 'c')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':spotdestination'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestinationIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());
        
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
            
        return  $pageList;
    }  
    
    
    public function getFilteredSpotDestinationItems($spotdestinationIds, $currentPageId, $publishStates, $currentpage, $totalpageitems, $filterIds)
    {
        
        if(!empty($spotdestinationIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotDestinationFilters', 'c')
                ->innerJoin('p.spotFilters', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':spotdestination'),
                    $qb->expr()->in('t.id', ':spotfilter'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage'),
                    $qb->expr()->eq('p.pagetype', ':pagetype')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestinationIds)
                ->setParameter('spotfilter', $filterIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('pagetype', 'spot_article')
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotDestinationFilters', 'c')
                ->innerJoin('p.spotFilters', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':spotdestination'),
                    $qb->expr()->in('t.id', ':spotfilter'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage'),
                    $qb->expr()->eq('p.pagetype', ':pagetype')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestinationIds)
                ->setParameter('spotfilter', $filterIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('pagetype', 'spot_article')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());
        
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
            
        return  $pageList;
    }
    
    
    public function getFilteredItems($filterIds, $currentPageId, $publishStates, $currentpage, $totalpageitems)
    {   
        
        if(!empty($filterIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotFilters', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('t.id', ':spotfilter'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->eq('p.pagetype', ':pagetype'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotfilter', $filterIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('pagetype', 'spot_article')
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotFilters', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('t.id', ':spotfilter'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->eq('p.pagetype', ':pagetype'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotfilter', $filterIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('pagetype', 'spot_article')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());
            
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
        
        return  $pageList;
    }
    
    
    public function getAllItems($currentPageId, $publishStates, $currentpage, $totalpageitems)
    {
        
        $qb         = $this->_em->createQueryBuilder();            
        $countqb    = $this->_em->createQueryBuilder();
        
        $qb->select('DISTINCT p')
            ->from('SpotBundle:Spot', 'p')
            ->where($qb->expr()->andX(
                $qb->expr()->in('p.publishState', ':publishState'),
                $qb->expr()->eq('p.pagetype', ':pagetype'),
                $qb->expr()->neq('p.id', ':currentPage')
            ))
            ->orderBy('p.spotOrder', 'ASC')
            ->setParameter('publishState', $publishStates)
            ->setParameter('pagetype', 'spot_article')
            ->setParameter('currentPage', $currentPageId)
        ;
                
        $countqb->select('COUNT(DISTINCT p.id)')
            ->from('SpotBundle:Spot', 'p')
            ->where($countqb->expr()->andX(
                $countqb->expr()->in('p.publishState', ':publishState'),
                $countqb->expr()->eq('p.pagetype', ':pagetype'),
                $countqb->expr()->neq('p.id', ':currentPage')
            ))
            ->orderBy('p.spotOrder', 'ASC')
            ->setParameter('publishState', $publishStates)
            ->setParameter('pagetype', 'spot_article')
            ->setParameter('currentPage', $currentPageId)
        ;
            
        $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());
        
        $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        
        return  $pageList;
    }
    
    
    public function getHomepageItems($publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('DISTINCT p')
            ->from('SpotBundle:Spot', 'p')
            ->where($qb->expr()->andX(
                $qb->expr()->in('p.featuredSpot', ':featuredSpot'),
                $qb->expr()->in('p.publishState', ':publishState')
            ))
            ->orderBy('p.pageOrder', 'ASC')
            ->setParameter('featuredSpot', 1)
            ->setParameter('publishState', $publishStates);
                    
        $pages = $qb->getQuery()->getResult();
        return  $pages;
    } 
    
    
    public function getSpotListItem($publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('DISTINCT p')
            ->from('SpotBundle:Spot', 'p')
            ->where($qb->expr()->andX(
                $qb->expr()->in('p.pagetype', ':spotType'),
                $qb->expr()->in('p.publishState', ':publishState')
            ))
            ->orderBy('p.pageOrder', 'ASC')
            ->setParameter('spotType', 'spot_home')
            ->setParameter('publishState', $publishStates);
                    
        $pages = $qb->getQuery()->getResult();
        return  $pages;
    }  
    
    
    public function getSitemapList($publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
            
        $qb->select('DISTINCT p')
            ->from('SpotBundle:Spot', 'p')
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
	
	
    public function getRelatedSpots($spotdestination, $currentPageId, $publishStates)
    {   
		$pages = null;
		
        if(!empty($spotdestination))
        {
            $qb = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('SpotBundle:Spot', 'p')
                ->where($qb->expr()->andX(
                    $qb->expr()->eq('p.relatedDestination', ':spotdestination'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestination)
                ->setParameter('publishState', $publishStates)
                ->setParameter('currentPage', $currentPageId)
            ;

			$pages = $qb->getQuery()->getResult();
        }
            
        return  $pages;
    }  
	
	
    public function getAssociatedSpots($spotdestinationIds, $currentPageId, $publishStates)
    {   
		$pages = null;
		
        if(!empty($spotdestinationIds))
        {
            $qb = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('SpotBundle:Spot', 'p')
                ->innerJoin('p.spotDestinationFilters', 'c')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':spotdestination'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage')
                ))
                ->orderBy('p.spotOrder', 'ASC')
                ->setParameter('spotdestination', $spotdestinationIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('currentPage', $currentPageId)
            ;

			$pages = $qb->getQuery()->getResult();
        }
            
        return  $pages;
    }  
}