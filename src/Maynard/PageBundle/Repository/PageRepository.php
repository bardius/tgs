<?php
/*
 * Page Bundle
 * This file is part of the maynard malone CMS.
 *
 * (c) George Bardis <george@bardis.info>
 *
 */
namespace Maynard\PageBundle\Repository;

use Doctrine\ORM\EntityRepository;


class PageRepository extends EntityRepository
{
    
    public function getCategoryItems($categoryIds, $currentPageId, $publishStates, $currentpage, $totalpageitems)
    {        
        $pageList = null;
        
        if(!empty($categoryIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.categories', 'c')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':category'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage'),
                    $qb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $qb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.categories', 'c')
                ->where($countqb->expr()->andX(
                    $countqb->expr()->in('c.id', ':category'),
                    $countqb->expr()->in('p.publishState', ':publishState'),
                    $countqb->expr()->neq('p.id', ':currentPage'),
                    $countqb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $countqb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult()); 
        
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
        
        return  $pageList;
    } 
    
    
    public function getTaggedCategoryItems($categoryIds, $currentPageId, $publishStates, $currentpage, $totalpageitems, $tagIds)
    {
        $pageList = null;
        
        if(!empty($categoryIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.categories', 'c')
                ->innerJoin('p.tags', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('c.id', ':category'),
                    $qb->expr()->in('t.id', ':tag'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage'),
                    $qb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $qb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('tag', $tagIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
                
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.categories', 'c')
                ->innerJoin('p.tags', 't')
                ->where($countqb->expr()->andX(
                    $countqb->expr()->in('c.id', ':category'),
                    $countqb->expr()->in('t.id', ':tag'),
                    $countqb->expr()->in('p.publishState', ':publishState'),
                    $countqb->expr()->neq('p.id', ':currentPage'),
                    $countqb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $countqb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('category', $categoryIds)
                ->setParameter('tag', $tagIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult());    
                    
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
            
        return  $pageList;
    } 
    
    
    public function getTaggedItems($tagIds, $currentPageId, $publishStates, $currentpage, $totalpageitems)
    {   
        $pageList = null;
        
        if(!empty($tagIds))
        {
            $qb         = $this->_em->createQueryBuilder();            
            $countqb    = $this->_em->createQueryBuilder();
            
            $qb->select('DISTINCT p')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.tags', 't')
                ->where($qb->expr()->andX(
                    $qb->expr()->in('t.id', ':tag'),
                    $qb->expr()->in('p.publishState', ':publishState'),
                    $qb->expr()->neq('p.id', ':currentPage'),
                    $qb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $qb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('tag', $tagIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
              
            $countqb->select('COUNT(DISTINCT p.id)')
                ->from('PageBundle:Page', 'p')
                ->innerJoin('p.tags', 't')
                ->where($countqb->expr()->andX(
                    $countqb->expr()->in('t.id', ':tag'),
                    $countqb->expr()->in('p.publishState', ':publishState'),
                    $countqb->expr()->neq('p.id', ':currentPage'),
                    $countqb->expr()->neq('p.pagetype', ':homepagePageType'),
                    $countqb->expr()->neq('p.pagetype', ':categorypagePageType')
                ))
                ->orderBy('p.date', 'DESC')
                ->setParameter('tag', $tagIds)
                ->setParameter('publishState', $publishStates)
                ->setParameter('homepagePageType', 'homepage')
                ->setParameter('categorypagePageType', 'category_page')
                ->setParameter('currentPage', $currentPageId)
            ;
            
            $totalResultsCount = intval($countqb->getQuery()->getSingleScalarResult()); 
        
            $pageList = $this->getPaginatedResults($qb, $totalResultsCount, $currentpage, $totalpageitems);
        }
            
        return  $pageList;
    }  
    
    
    public function getHomepageItems($categoryIds, $currentPageId, $publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
        
        $qb->select('DISTINCT p')
            ->from('PageBundle:Page', 'p')
            ->innerJoin('p.categories', 'c')
            ->where($qb->expr()->andX(
                $qb->expr()->in('c.id', ':category'),
                $qb->expr()->in('p.publishState', ':publishState'),
                $qb->expr()->neq('p.id', ':currentPage')
            ))
            ->orderBy('p.pageOrder', 'ASC')
            ->setParameter('category', $categoryIds)
            ->setParameter('publishState', $publishStates)
            ->setParameter('currentPage', $currentPageId)
        ;
                    
        $pages = $qb->getQuery()->getResult();
        
        return  $pages;
    }    
    
    
    public function getSitemapList($publishStates)
    {            
        $qb = $this->_em->createQueryBuilder();
            
        $qb->select('DISTINCT p')
            ->from('PageBundle:Page', 'p')
            ->where(
                $qb->expr()->in('p.publishState', ':publishState')
            )
            ->orderBy('p.id', 'ASC')
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
}