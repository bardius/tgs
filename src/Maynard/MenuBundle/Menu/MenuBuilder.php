<?php

namespace Maynard\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManager;
use Maynard\PageBundle\Entity\Page;
use Maynard\BlogBundle\Entity\Blog;
use Maynard\RecipeBundle\Entity\Recipe;


class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param Request $request
     * @param EntityManager $em
     * @param String $menugroup
     * @param String $cssClass
     * @param String $menuItemDecorator
     */
    public function createMenu(Request $request, EntityManager $em, $menugroup, $cssClass, $menuItemDecorator)
    {       
        $repo = $em->getRepository('MenuBundle:Menu');
        $menudata = $repo->findBy(array("menuGroup" => $menugroup), array("ordering" => "ASC"));
        
        $menudata = array_values($menudata);
        $menudata = $this->buildTree($menudata);
        
        $menu = $this->factory->createItem($menugroup);
        $menu->setChildrenAttribute('class', $cssClass);
        
        $menu->setCurrentUri($request->getRequestUri());
        
        $this->menuItemlevel = 0;
        $this->setupMenuItem($menu, $menudata, $em, $menuItemDecorator);
        
        return $menu;
    }
    
    /**
    * @param Array $elements
    * @param String $parentId
    **/
    public function buildTree(array &$elements, $parent = '0') {
       $branch = array();

       foreach ($elements as $element) {
           if ($element->getParent() == $parent) {
               $children = $this->buildTree($elements, $element->getId());
               if ($children) {
                   $element->children = $children;
               }
               else
               {
                   $element->children = null;
               }
               $branch[$element->getId()] = $element;
               //unset($elements[$element->getId()]);
           }
       }
       return $branch;
   }
   
   /**
   * @param MenuItem $menu
   * @param Array $menudata
   * @param EntityManager $em
   * @param String $menuItemDecorator
   **/
   public function setupMenuItem($menu, $menudata, EntityManager $em, $menuItemDecorator)
   {
        $menuItemCounter = 0;
        
        foreach($menudata as $menuItem)
        {
            $menuType           = $menuItem->getMenuType();
            $getPageFunction    = 'get'.$menuType;
            
            $menuItemCounter++;
            
            // @TODO: here we must add proper acl for each menu item
            if ($menuItem->getPublishstate() != '0') 
            {
                $urlParams = $menuItem->getMenuUrlExtras();
                if (!empty($urlParams))
                {
                   $urlParams = '/'.urlencode($urlParams); 
                }
                
                switch ($menuType) {
                    
                    case 'http':
                        $menu->addChild($menuItem->getTitle(), array(
                            'uri' => $menuItem->getExternalUrl()
                        ));
                        $menu[$menuItem->getTitle()]->setLinkAttribute('target', '_blank');
                        $menu[$menuItem->getTitle()]->setLinkAttribute('rel', 'nofollow');
                        break;
                    
                    case 'url':
                        $menu->addChild($menuItem->getTitle(), array(
                            'uri' => $menuItem->getExternalUrl()
                        ));
                        break;
                    
                    case 'seperator':
                        $menu->addChild($menuItem->getTitle());
                        $menu[$menuItem->getTitle()]->setLabelAttribute('class', 'divider');
                        break;
                    
                    case 'Page':
                        $alias = $this->getPageAlias($menuItem->$getPageFunction(), $em, $menuType);
                        if(null === $alias) {
                            $menu->addChild($menuItem->getTitle(), array('uri' => '/'.$menuItem->getRoute().'/'.$menuItem->$getPageFunction().$urlParams));
                        } else {
                            $menu->addChild($menuItem->getTitle(), array('uri' => '/'.$alias.$urlParams));
                        }
                        break;                        
                   
                    case 'Blog':
                    case 'Recipe':
                    case 'Product':
                        $alias = $this->getPageAlias($menuItem->$getPageFunction(), $em, $menuType);
                        if(null === $alias) {
                            $menu->addChild($menuItem->getTitle(), array('uri' => '/'.strtolower($menuType).'/'.$menuItem->getRoute().'/'.$menuItem->$getPageFunction().$urlParams));
                        } else {
                            $menu->addChild($menuItem->getTitle(), array('uri' => '/'.strtolower($menuType).'/'.$alias.$urlParams));
                        }   
                        break;
                    
                    default:
                        $menu->addChild($menuItem->getTitle());
                        $menu[$menuItem->getTitle()]->setLabelAttribute('class', 'divider');                        
                    
                }
                
                $menu[$menuItem->getTitle()]->setAttribute('class', 'item'.$menuItemCounter.' level'.$this->menuItemlevel);
                $menu[$menuItem->getTitle()]->setLinkAttribute('class', 'item'.$menuItemCounter.' level'.$this->menuItemlevel);
                $menu[$menuItem->getTitle()]->setLinkAttribute('title', $menuItem->getTitle());
                                
                if($menuItemDecorator == 'main')
                {   
                    if($menuItem->getMenuImage() != null)
                    {
                        $menu[$menuItem->getTitle()]->setLabelAttribute('style', 'background-image:url("'.$menuItem->getMenuImage().'");');
                    }

                    if ($menuItem->children != null)
                    {
                        $menu[$menuItem->getTitle()]->setAttribute('class', 'item'.$menuItemCounter.' level'.$this->menuItemlevel.' has-dropdown');
                        $this->menuItemlevel = $this->menuItemlevel + 1;
                        //$menu[$menuItem->getTitle()]->setAttribute('flyout-toggle', true);
                        $menu[$menuItem->getTitle()]->setChildrenAttribute('class', 'dropdown level'.$this->menuItemlevel);
                        $this->setupMenuItem($menu[$menuItem->getTitle()], $menuItem->children, $em, $menuItemDecorator);
                        $this->menuItemlevel = $this->menuItemlevel - 1;
                    }               
                }
                else
                {
                    if ($menuItem->children != null)
                    {
                        $this->menuItemlevel = $this->menuItemlevel + 1;
                        $menu[$menuItem->getTitle()]->setAttribute('class', 'item'.$menuItemCounter.' level'.$this->menuItemlevel);
                        $this->setupMenuItem($menu[$menuItem->getTitle()], $menuItem->children, $em, $menuItemDecorator);
                        $this->menuItemlevel = $this->menuItemlevel - 1;
                    }
                }     
            }
        }
   }
   
    /**
    * @param Integer $pageId
    * @param EntityManager $em
    */
    public function getPageAlias($pageId, EntityManager $em, $menuType)
    {   
	$repo = $em->getRepository($menuType.'Bundle:'.$menuType);
        $page = $repo->findOneById($pageId);
	
	$pageAlias = $page->getAlias();
		
        return $pageAlias;
    }

}