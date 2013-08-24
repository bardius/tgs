<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/maynard')) {
                if (0 === strpos($pathinfo, '/admin/maynard/page/page')) {
                    // admin_maynard_page_page_list
                    if ($pathinfo === '/admin/maynard/page/page/list') {
                        return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_list',  '_route' => 'admin_maynard_page_page_list',);
                    }

                    // admin_maynard_page_page_create
                    if ($pathinfo === '/admin/maynard/page/page/create') {
                        return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_create',  '_route' => 'admin_maynard_page_page_create',);
                    }

                    // admin_maynard_page_page_batch
                    if ($pathinfo === '/admin/maynard/page/page/batch') {
                        return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_batch',  '_route' => 'admin_maynard_page_page_batch',);
                    }

                    // admin_maynard_page_page_edit
                    if (preg_match('#^/admin/maynard/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_page_edit')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_edit',));
                    }

                    // admin_maynard_page_page_delete
                    if (preg_match('#^/admin/maynard/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_page_delete')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_delete',));
                    }

                    // admin_maynard_page_page_show
                    if (preg_match('#^/admin/maynard/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_page_show')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_show',));
                    }

                    // admin_maynard_page_page_export
                    if ($pathinfo === '/admin/maynard/page/page/export') {
                        return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_export',  '_route' => 'admin_maynard_page_page_export',);
                    }

                    // admin_maynard_page_page_duplicate
                    if (preg_match('#^/admin/maynard/page/page/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_page_duplicate')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\PageAdminController::duplicateAction',  '_sonata_admin' => 'sonata.admin.pages',  '_sonata_name' => 'admin_maynard_page_page_duplicate',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/blog/blog')) {
                    // admin_maynard_blog_blog_list
                    if ($pathinfo === '/admin/maynard/blog/blog/list') {
                        return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::listAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_list',  '_route' => 'admin_maynard_blog_blog_list',);
                    }

                    // admin_maynard_blog_blog_create
                    if ($pathinfo === '/admin/maynard/blog/blog/create') {
                        return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::createAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_create',  '_route' => 'admin_maynard_blog_blog_create',);
                    }

                    // admin_maynard_blog_blog_batch
                    if ($pathinfo === '/admin/maynard/blog/blog/batch') {
                        return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_batch',  '_route' => 'admin_maynard_blog_blog_batch',);
                    }

                    // admin_maynard_blog_blog_edit
                    if (preg_match('#^/admin/maynard/blog/blog/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_blog_blog_edit')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::editAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_edit',));
                    }

                    // admin_maynard_blog_blog_delete
                    if (preg_match('#^/admin/maynard/blog/blog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_blog_blog_delete')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_delete',));
                    }

                    // admin_maynard_blog_blog_show
                    if (preg_match('#^/admin/maynard/blog/blog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_blog_blog_show')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::showAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_show',));
                    }

                    // admin_maynard_blog_blog_export
                    if ($pathinfo === '/admin/maynard/blog/blog/export') {
                        return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_export',  '_route' => 'admin_maynard_blog_blog_export',);
                    }

                    // admin_maynard_blog_blog_duplicate
                    if (preg_match('#^/admin/maynard/blog/blog/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_blog_blog_duplicate')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\BlogAdminController::duplicateAction',  '_sonata_admin' => 'sonata.admin.blogs',  '_sonata_name' => 'admin_maynard_blog_blog_duplicate',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/recipe/recipe')) {
                    // admin_maynard_recipe_recipe_list
                    if ($pathinfo === '/admin/maynard/recipe/recipe/list') {
                        return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::listAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_list',  '_route' => 'admin_maynard_recipe_recipe_list',);
                    }

                    // admin_maynard_recipe_recipe_create
                    if ($pathinfo === '/admin/maynard/recipe/recipe/create') {
                        return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::createAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_create',  '_route' => 'admin_maynard_recipe_recipe_create',);
                    }

                    // admin_maynard_recipe_recipe_batch
                    if ($pathinfo === '/admin/maynard/recipe/recipe/batch') {
                        return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_batch',  '_route' => 'admin_maynard_recipe_recipe_batch',);
                    }

                    // admin_maynard_recipe_recipe_edit
                    if (preg_match('#^/admin/maynard/recipe/recipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipe_edit')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::editAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_edit',));
                    }

                    // admin_maynard_recipe_recipe_delete
                    if (preg_match('#^/admin/maynard/recipe/recipe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipe_delete')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_delete',));
                    }

                    // admin_maynard_recipe_recipe_show
                    if (preg_match('#^/admin/maynard/recipe/recipe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipe_show')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::showAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_show',));
                    }

                    // admin_maynard_recipe_recipe_export
                    if ($pathinfo === '/admin/maynard/recipe/recipe/export') {
                        return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_export',  '_route' => 'admin_maynard_recipe_recipe_export',);
                    }

                    // admin_maynard_recipe_recipe_duplicate
                    if (preg_match('#^/admin/maynard/recipe/recipe/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipe_duplicate')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\RecipeAdminController::duplicateAction',  '_sonata_admin' => 'sonata.admin.recipes',  '_sonata_name' => 'admin_maynard_recipe_recipe_duplicate',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/product/product')) {
                    // admin_maynard_product_product_list
                    if ($pathinfo === '/admin/maynard/product/product/list') {
                        return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::listAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_list',  '_route' => 'admin_maynard_product_product_list',);
                    }

                    // admin_maynard_product_product_create
                    if ($pathinfo === '/admin/maynard/product/product/create') {
                        return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::createAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_create',  '_route' => 'admin_maynard_product_product_create',);
                    }

                    // admin_maynard_product_product_batch
                    if ($pathinfo === '/admin/maynard/product/product/batch') {
                        return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_batch',  '_route' => 'admin_maynard_product_product_batch',);
                    }

                    // admin_maynard_product_product_edit
                    if (preg_match('#^/admin/maynard/product/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_product_edit')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::editAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_edit',));
                    }

                    // admin_maynard_product_product_delete
                    if (preg_match('#^/admin/maynard/product/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_product_delete')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_delete',));
                    }

                    // admin_maynard_product_product_show
                    if (preg_match('#^/admin/maynard/product/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_product_show')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::showAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_show',));
                    }

                    // admin_maynard_product_product_export
                    if ($pathinfo === '/admin/maynard/product/product/export') {
                        return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_export',  '_route' => 'admin_maynard_product_product_export',);
                    }

                    // admin_maynard_product_product_duplicate
                    if (preg_match('#^/admin/maynard/product/product/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_product_duplicate')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\ProductAdminController::duplicateAction',  '_sonata_admin' => 'sonata.admin.products',  '_sonata_name' => 'admin_maynard_product_product_duplicate',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/menu/menu')) {
                    // admin_maynard_menu_menu_list
                    if ($pathinfo === '/admin/maynard/menu/menu/list') {
                        return array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::listAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_list',  '_route' => 'admin_maynard_menu_menu_list',);
                    }

                    // admin_maynard_menu_menu_create
                    if ($pathinfo === '/admin/maynard/menu/menu/create') {
                        return array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::createAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_create',  '_route' => 'admin_maynard_menu_menu_create',);
                    }

                    // admin_maynard_menu_menu_batch
                    if ($pathinfo === '/admin/maynard/menu/menu/batch') {
                        return array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_batch',  '_route' => 'admin_maynard_menu_menu_batch',);
                    }

                    // admin_maynard_menu_menu_edit
                    if (preg_match('#^/admin/maynard/menu/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_menu_menu_edit')), array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::editAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_edit',));
                    }

                    // admin_maynard_menu_menu_delete
                    if (preg_match('#^/admin/maynard/menu/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_menu_menu_delete')), array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_delete',));
                    }

                    // admin_maynard_menu_menu_show
                    if (preg_match('#^/admin/maynard/menu/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_menu_menu_show')), array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::showAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_show',));
                    }

                    // admin_maynard_menu_menu_export
                    if ($pathinfo === '/admin/maynard/menu/menu/export') {
                        return array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_export',  '_route' => 'admin_maynard_menu_menu_export',);
                    }

                    // admin_maynard_menu_menu_duplicate
                    if (preg_match('#^/admin/maynard/menu/menu/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_menu_menu_duplicate')), array (  '_controller' => 'Maynard\\MenuBundle\\Controller\\MenuAdminController::duplicateAction',  '_sonata_admin' => 'sonata.admin.menus',  '_sonata_name' => 'admin_maynard_menu_menu_duplicate',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/page/category')) {
                    // admin_maynard_page_category_list
                    if ($pathinfo === '/admin/maynard/page/category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_list',  '_route' => 'admin_maynard_page_category_list',);
                    }

                    // admin_maynard_page_category_create
                    if ($pathinfo === '/admin/maynard/page/category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_create',  '_route' => 'admin_maynard_page_category_create',);
                    }

                    // admin_maynard_page_category_batch
                    if ($pathinfo === '/admin/maynard/page/category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_batch',  '_route' => 'admin_maynard_page_category_batch',);
                    }

                    // admin_maynard_page_category_edit
                    if (preg_match('#^/admin/maynard/page/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_edit',));
                    }

                    // admin_maynard_page_category_delete
                    if (preg_match('#^/admin/maynard/page/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_delete',));
                    }

                    // admin_maynard_page_category_show
                    if (preg_match('#^/admin/maynard/page/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_show',));
                    }

                    // admin_maynard_page_category_export
                    if ($pathinfo === '/admin/maynard/page/category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.categories',  '_sonata_name' => 'admin_maynard_page_category_export',  '_route' => 'admin_maynard_page_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/recipe/recipecategory')) {
                    // admin_maynard_recipe_recipecategory_list
                    if ($pathinfo === '/admin/maynard/recipe/recipecategory/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_list',  '_route' => 'admin_maynard_recipe_recipecategory_list',);
                    }

                    // admin_maynard_recipe_recipecategory_create
                    if ($pathinfo === '/admin/maynard/recipe/recipecategory/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_create',  '_route' => 'admin_maynard_recipe_recipecategory_create',);
                    }

                    // admin_maynard_recipe_recipecategory_batch
                    if ($pathinfo === '/admin/maynard/recipe/recipecategory/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_batch',  '_route' => 'admin_maynard_recipe_recipecategory_batch',);
                    }

                    // admin_maynard_recipe_recipecategory_edit
                    if (preg_match('#^/admin/maynard/recipe/recipecategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipecategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_edit',));
                    }

                    // admin_maynard_recipe_recipecategory_delete
                    if (preg_match('#^/admin/maynard/recipe/recipecategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipecategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_delete',));
                    }

                    // admin_maynard_recipe_recipecategory_show
                    if (preg_match('#^/admin/maynard/recipe/recipecategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipecategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_show',));
                    }

                    // admin_maynard_recipe_recipecategory_export
                    if ($pathinfo === '/admin/maynard/recipe/recipecategory/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.recipecategories',  '_sonata_name' => 'admin_maynard_recipe_recipecategory_export',  '_route' => 'admin_maynard_recipe_recipecategory_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/p')) {
                    if (0 === strpos($pathinfo, '/admin/maynard/product/productcategory')) {
                        // admin_maynard_product_productcategory_list
                        if ($pathinfo === '/admin/maynard/product/productcategory/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_list',  '_route' => 'admin_maynard_product_productcategory_list',);
                        }

                        // admin_maynard_product_productcategory_create
                        if ($pathinfo === '/admin/maynard/product/productcategory/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_create',  '_route' => 'admin_maynard_product_productcategory_create',);
                        }

                        // admin_maynard_product_productcategory_batch
                        if ($pathinfo === '/admin/maynard/product/productcategory/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_batch',  '_route' => 'admin_maynard_product_productcategory_batch',);
                        }

                        // admin_maynard_product_productcategory_edit
                        if (preg_match('#^/admin/maynard/product/productcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_productcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_edit',));
                        }

                        // admin_maynard_product_productcategory_delete
                        if (preg_match('#^/admin/maynard/product/productcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_productcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_delete',));
                        }

                        // admin_maynard_product_productcategory_show
                        if (preg_match('#^/admin/maynard/product/productcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_productcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_show',));
                        }

                        // admin_maynard_product_productcategory_export
                        if ($pathinfo === '/admin/maynard/product/productcategory/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.productcategories',  '_sonata_name' => 'admin_maynard_product_productcategory_export',  '_route' => 'admin_maynard_product_productcategory_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/maynard/page/tag')) {
                        // admin_maynard_page_tag_list
                        if ($pathinfo === '/admin/maynard/page/tag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_list',  '_route' => 'admin_maynard_page_tag_list',);
                        }

                        // admin_maynard_page_tag_create
                        if ($pathinfo === '/admin/maynard/page/tag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_create',  '_route' => 'admin_maynard_page_tag_create',);
                        }

                        // admin_maynard_page_tag_batch
                        if ($pathinfo === '/admin/maynard/page/tag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_batch',  '_route' => 'admin_maynard_page_tag_batch',);
                        }

                        // admin_maynard_page_tag_edit
                        if (preg_match('#^/admin/maynard/page/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_edit',));
                        }

                        // admin_maynard_page_tag_delete
                        if (preg_match('#^/admin/maynard/page/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_delete',));
                        }

                        // admin_maynard_page_tag_show
                        if (preg_match('#^/admin/maynard/page/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_show',));
                        }

                        // admin_maynard_page_tag_export
                        if ($pathinfo === '/admin/maynard/page/tag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.tags',  '_sonata_name' => 'admin_maynard_page_tag_export',  '_route' => 'admin_maynard_page_tag_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/recipe/recipetag')) {
                    // admin_maynard_recipe_recipetag_list
                    if ($pathinfo === '/admin/maynard/recipe/recipetag/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_list',  '_route' => 'admin_maynard_recipe_recipetag_list',);
                    }

                    // admin_maynard_recipe_recipetag_create
                    if ($pathinfo === '/admin/maynard/recipe/recipetag/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_create',  '_route' => 'admin_maynard_recipe_recipetag_create',);
                    }

                    // admin_maynard_recipe_recipetag_batch
                    if ($pathinfo === '/admin/maynard/recipe/recipetag/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_batch',  '_route' => 'admin_maynard_recipe_recipetag_batch',);
                    }

                    // admin_maynard_recipe_recipetag_edit
                    if (preg_match('#^/admin/maynard/recipe/recipetag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipetag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_edit',));
                    }

                    // admin_maynard_recipe_recipetag_delete
                    if (preg_match('#^/admin/maynard/recipe/recipetag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipetag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_delete',));
                    }

                    // admin_maynard_recipe_recipetag_show
                    if (preg_match('#^/admin/maynard/recipe/recipetag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_recipe_recipetag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_show',));
                    }

                    // admin_maynard_recipe_recipetag_export
                    if ($pathinfo === '/admin/maynard/recipe/recipetag/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.recipetags',  '_sonata_name' => 'admin_maynard_recipe_recipetag_export',  '_route' => 'admin_maynard_recipe_recipetag_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/p')) {
                    if (0 === strpos($pathinfo, '/admin/maynard/product/producttag')) {
                        // admin_maynard_product_producttag_list
                        if ($pathinfo === '/admin/maynard/product/producttag/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_list',  '_route' => 'admin_maynard_product_producttag_list',);
                        }

                        // admin_maynard_product_producttag_create
                        if ($pathinfo === '/admin/maynard/product/producttag/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_create',  '_route' => 'admin_maynard_product_producttag_create',);
                        }

                        // admin_maynard_product_producttag_batch
                        if ($pathinfo === '/admin/maynard/product/producttag/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_batch',  '_route' => 'admin_maynard_product_producttag_batch',);
                        }

                        // admin_maynard_product_producttag_edit
                        if (preg_match('#^/admin/maynard/product/producttag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_producttag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_edit',));
                        }

                        // admin_maynard_product_producttag_delete
                        if (preg_match('#^/admin/maynard/product/producttag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_producttag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_delete',));
                        }

                        // admin_maynard_product_producttag_show
                        if (preg_match('#^/admin/maynard/product/producttag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_product_producttag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_show',));
                        }

                        // admin_maynard_product_producttag_export
                        if ($pathinfo === '/admin/maynard/product/producttag/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.producttags',  '_sonata_name' => 'admin_maynard_product_producttag_export',  '_route' => 'admin_maynard_product_producttag_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/maynard/page/contentblock')) {
                        // admin_maynard_page_contentblock_list
                        if ($pathinfo === '/admin/maynard/page/contentblock/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_list',  '_route' => 'admin_maynard_page_contentblock_list',);
                        }

                        // admin_maynard_page_contentblock_create
                        if ($pathinfo === '/admin/maynard/page/contentblock/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_create',  '_route' => 'admin_maynard_page_contentblock_create',);
                        }

                        // admin_maynard_page_contentblock_batch
                        if ($pathinfo === '/admin/maynard/page/contentblock/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_batch',  '_route' => 'admin_maynard_page_contentblock_batch',);
                        }

                        // admin_maynard_page_contentblock_edit
                        if (preg_match('#^/admin/maynard/page/contentblock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_contentblock_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_edit',));
                        }

                        // admin_maynard_page_contentblock_delete
                        if (preg_match('#^/admin/maynard/page/contentblock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_contentblock_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_delete',));
                        }

                        // admin_maynard_page_contentblock_show
                        if (preg_match('#^/admin/maynard/page/contentblock/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_page_contentblock_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_show',));
                        }

                        // admin_maynard_page_contentblock_export
                        if ($pathinfo === '/admin/maynard/page/contentblock/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.contentblocks',  '_sonata_name' => 'admin_maynard_page_contentblock_export',  '_route' => 'admin_maynard_page_contentblock_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/maynard/settings/settings')) {
                    // admin_maynard_settings_settings_list
                    if ($pathinfo === '/admin/maynard/settings/settings/list') {
                        return array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::listAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_list',  '_route' => 'admin_maynard_settings_settings_list',);
                    }

                    // admin_maynard_settings_settings_create
                    if ($pathinfo === '/admin/maynard/settings/settings/create') {
                        return array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::createAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_create',  '_route' => 'admin_maynard_settings_settings_create',);
                    }

                    // admin_maynard_settings_settings_batch
                    if ($pathinfo === '/admin/maynard/settings/settings/batch') {
                        return array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_batch',  '_route' => 'admin_maynard_settings_settings_batch',);
                    }

                    // admin_maynard_settings_settings_edit
                    if (preg_match('#^/admin/maynard/settings/settings/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_settings_settings_edit')), array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::editAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_edit',));
                    }

                    // admin_maynard_settings_settings_delete
                    if (preg_match('#^/admin/maynard/settings/settings/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_settings_settings_delete')), array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_delete',));
                    }

                    // admin_maynard_settings_settings_show
                    if (preg_match('#^/admin/maynard/settings/settings/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_maynard_settings_settings_show')), array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::showAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_show',));
                    }

                    // admin_maynard_settings_settings_export
                    if ($pathinfo === '/admin/maynard/settings/settings/export') {
                        return array (  '_controller' => 'Maynard\\SettingsBundle\\Controller\\SettingsAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.settings',  '_sonata_name' => 'admin_maynard_settings_settings_export',  '_route' => 'admin_maynard_settings_settings_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::viewAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                        // admin_sonata_media_media_view
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::viewAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_view',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_register_campaign
                if (0 === strpos($pathinfo, '/register/track') && preg_match('#^/register/track/(?P<campaign>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_register_campaign')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',));
                }

                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // sonata_user_impersonating
        if ($pathinfo === '/admin/dashboard') {
            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_user_impersonating',);
        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/recipe')) {
            if (0 === strpos($pathinfo, '/recipe/tagged')) {
                // RecipeBundle_tagged_full
                if (preg_match('#^/recipe/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'RecipeBundle_tagged_full');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_full')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_noslash
                if (preg_match('#^/recipe/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_noslash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_onlypage_slash
                if (preg_match('#^/recipe/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'RecipeBundle_tagged_onlypage_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_onlypage_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_onlypage
                if (preg_match('#^/recipe/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_onlypage')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_onlytag_slash
                if (preg_match('#^/recipe/tagged/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'RecipeBundle_tagged_onlytag_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_onlytag_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_onlytag
                if (preg_match('#^/recipe/tagged(?:/(?P<extraParams>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_tagged_onlytag')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // RecipeBundle_tagged_slash
                if (rtrim($pathinfo, '/') === '/recipe/tagged') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'RecipeBundle_tagged_slash');
                    }

                    return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'RecipeBundle_tagged_slash',);
                }

                // RecipeBundle_tagged
                if ($pathinfo === '/recipe/tagged') {
                    return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'RecipeBundle_tagged',);
                }

            }

            // RecipeBundle_filtered
            if (rtrim($pathinfo, '/') === '/recipe/filterPages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_filtered');
                }

                return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::filterPagesAction',  '_route' => 'RecipeBundle_filtered',);
            }

            // RecipeBundle_page_full_slash
            if (preg_match('#^/recipe/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_page_full_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_full_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_full
            if (preg_match('#^/recipe(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+)(?:/(?P<extraParams>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_full')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_only_pagin_slash
            if (preg_match('#^/recipe/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_page_only_pagin_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_only_pagin_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_only_pagin
            if (preg_match('#^/recipe(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_only_pagin')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_only_page_slash
            if (preg_match('#^/recipe/(?P<alias>[^/]++)/(?P<currentpage>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_page_only_page_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_only_page_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_only_page
            if (preg_match('#^/recipe(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_only_page')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_normal_slash
            if (preg_match('#^/recipe/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_page_normal_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_normal_slash')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_page_normal
            if (preg_match('#^/recipe(?:/(?P<alias>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_page_normal')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // RecipeBundle_home_slash
            if (rtrim($pathinfo, '/') === '/recipe') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecipeBundle_home_slash');
                }

                return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'RecipeBundle_home_slash',);
            }

            // RecipeBundle_home
            if ($pathinfo === '/recipe') {
                return array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'RecipeBundle_home',);
            }

            // RecipeBundle_showPage
            if (0 === strpos($pathinfo, '/recipe/showPage') && preg_match('#^/recipe/showPage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecipeBundle_showPage')), array (  '_controller' => 'Maynard\\RecipeBundle\\Controller\\DefaultController::showPageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            if (0 === strpos($pathinfo, '/product/tagged')) {
                // ProductBundle_tagged_full
                if (preg_match('#^/product/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ProductBundle_tagged_full');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_full')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_noslash
                if (preg_match('#^/product/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_noslash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_onlypage_slash
                if (preg_match('#^/product/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ProductBundle_tagged_onlypage_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_onlypage_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_onlypage
                if (preg_match('#^/product/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_onlypage')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_onlytag_slash
                if (preg_match('#^/product/tagged/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ProductBundle_tagged_onlytag_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_onlytag_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_onlytag
                if (preg_match('#^/product/tagged(?:/(?P<extraParams>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_tagged_onlytag')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // ProductBundle_tagged_slash
                if (rtrim($pathinfo, '/') === '/product/tagged') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ProductBundle_tagged_slash');
                    }

                    return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'ProductBundle_tagged_slash',);
                }

                // ProductBundle_tagged
                if ($pathinfo === '/product/tagged') {
                    return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'ProductBundle_tagged',);
                }

            }

            // ProductBundle_filtered
            if (rtrim($pathinfo, '/') === '/product/filterPages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_filtered');
                }

                return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::filterPagesAction',  '_route' => 'ProductBundle_filtered',);
            }

            // ProductBundle_page_full_slash
            if (preg_match('#^/product/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_page_full_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_full_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_full
            if (preg_match('#^/product(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+)(?:/(?P<extraParams>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_full')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_only_pagin_slash
            if (preg_match('#^/product/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_page_only_pagin_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_only_pagin_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_only_pagin
            if (preg_match('#^/product(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_only_pagin')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_only_page_slash
            if (preg_match('#^/product/(?P<alias>[^/]++)/(?P<currentpage>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_page_only_page_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_only_page_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_only_page
            if (preg_match('#^/product(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_only_page')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_normal_slash
            if (preg_match('#^/product/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_page_normal_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_normal_slash')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_page_normal
            if (preg_match('#^/product(?:/(?P<alias>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_page_normal')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // ProductBundle_home_slash
            if (rtrim($pathinfo, '/') === '/product') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ProductBundle_home_slash');
                }

                return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'ProductBundle_home_slash',);
            }

            // ProductBundle_home
            if ($pathinfo === '/product') {
                return array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'list',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'ProductBundle_home',);
            }

            // ProductBundle_showPage
            if (0 === strpos($pathinfo, '/product/showPage') && preg_match('#^/product/showPage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ProductBundle_showPage')), array (  '_controller' => 'Maynard\\ProductBundle\\Controller\\DefaultController::showPageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/tagged')) {
                // BlogBundle_tagged_full
                if (preg_match('#^/blog/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'BlogBundle_tagged_full');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_full')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_noslash
                if (preg_match('#^/blog/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_noslash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_onlypage_slash
                if (preg_match('#^/blog/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'BlogBundle_tagged_onlypage_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_onlypage_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_onlypage
                if (preg_match('#^/blog/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_onlypage')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_onlytag_slash
                if (preg_match('#^/blog/tagged/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'BlogBundle_tagged_onlytag_slash');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_onlytag_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_onlytag
                if (preg_match('#^/blog/tagged(?:/(?P<extraParams>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_tagged_onlytag')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
                }

                // BlogBundle_tagged_slash
                if (rtrim($pathinfo, '/') === '/blog/tagged') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'BlogBundle_tagged_slash');
                    }

                    return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'BlogBundle_tagged_slash',);
                }

                // BlogBundle_tagged
                if ($pathinfo === '/blog/tagged') {
                    return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'BlogBundle_tagged',);
                }

            }

            // BlogBundle_filtered
            if (rtrim($pathinfo, '/') === '/blog/filterPages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_filtered');
                }

                return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::filterPagesAction',  '_route' => 'BlogBundle_filtered',);
            }

            // BlogBundle_page_full_slash
            if (preg_match('#^/blog/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_page_full_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_full_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_full
            if (preg_match('#^/blog(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+)(?:/(?P<extraParams>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_full')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_only_pagin_slash
            if (preg_match('#^/blog/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_page_only_pagin_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_only_pagin_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_only_pagin
            if (preg_match('#^/blog(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_only_pagin')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_only_page_slash
            if (preg_match('#^/blog/(?P<alias>[^/]++)/(?P<currentpage>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_page_only_page_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_only_page_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_only_page
            if (preg_match('#^/blog(?:/(?P<alias>[^/]++)(?:/(?P<currentpage>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_only_page')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_normal_slash
            if (preg_match('#^/blog/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_page_normal_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_normal_slash')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_page_normal
            if (preg_match('#^/blog(?:/(?P<alias>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_page_normal')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // BlogBundle_home_slash
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BlogBundle_home_slash');
                }

                return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'BlogBundle_home_slash',);
            }

            // BlogBundle_home
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'articles',  'tags' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'BlogBundle_home',);
            }

            // BlogBundle_showPage
            if (0 === strpos($pathinfo, '/blog/showBlogPage') && preg_match('#^/blog/showBlogPage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'BlogBundle_showPage')), array (  '_controller' => 'Maynard\\BlogBundle\\Controller\\DefaultController::showPageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/tagged')) {
            // PageBundle_tagged_full
            if (preg_match('#^/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'PageBundle_tagged_full');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_full')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_noslash
            if (preg_match('#^/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_noslash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_onlypage_slash
            if (preg_match('#^/tagged/(?P<extraParams>[^/]++)/(?P<currentpage>\\d+)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'PageBundle_tagged_onlypage_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_onlypage_slash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_onlypage
            if (preg_match('#^/tagged(?:/(?P<extraParams>[^/]++)(?:/(?P<currentpage>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_onlypage')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_onlytag_slash
            if (preg_match('#^/tagged/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'PageBundle_tagged_onlytag_slash');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_onlytag_slash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_onlytag
            if (preg_match('#^/tagged(?:/(?P<extraParams>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_tagged_onlytag')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
            }

            // PageBundle_tagged_slash
            if (rtrim($pathinfo, '/') === '/tagged') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'PageBundle_tagged_slash');
                }

                return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'PageBundle_tagged_slash',);
            }

            // PageBundle_tagged
            if ($pathinfo === '/tagged') {
                return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'tagged',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'PageBundle_tagged',);
            }

        }

        // PageBundle_filtered
        if (rtrim($pathinfo, '/') === '/filterPages') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PageBundle_filtered');
            }

            return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::filterPagesAction',  '_route' => 'PageBundle_filtered',);
        }

        if (0 === strpos($pathinfo, '/sitemap')) {
            // PageBundle_sitemap
            if (preg_match('#^/sitemap(?:\\.(?P<_format>xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_sitemap')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::sitemapAction',  '_format' => 'xml',));
            }

            // PageBundle_sitemapxsl
            if ($pathinfo === '/sitemap.xsl') {
                return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::sitemapxslAction',  '_format' => 'xml',  '_route' => 'PageBundle_sitemapxsl',);
            }

        }

        // PageBundle_page_full
        if (preg_match('#^/(?P<alias>[^/]++)/(?P<currentpage>\\d+)/(?P<totalpageitems>\\d+)/(?P<extraParams>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PageBundle_page_full');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page_full')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_page_noslash
        if (preg_match('#^/(?P<alias>[^/]++)?(?:/(?P<currentpage>\\d+)(?:/(?P<totalpageitems>\\d+)(?:/(?P<extraParams>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page_noslash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_page_onlypage_slash
        if (preg_match('#^/(?P<alias>[^/]++)/(?P<currentpage>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PageBundle_page_onlypage_slash');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page_onlypage_slash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_page_onlypage
        if (preg_match('#^/(?P<alias>[^/]++)?(?:/(?P<currentpage>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page_onlypage')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_page_slash
        if (preg_match('#^/(?P<alias>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PageBundle_page_slash');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page_slash')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_page
        if (preg_match('#^/(?P<alias>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_page')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,));
        }

        // PageBundle_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'PageBundle_home');
            }

            return array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::aliasAction',  'alias' => 'home',  'extraParams' => 'all',  'currentpage' => 0,  'totalpageitems' => 0,  '_route' => 'PageBundle_home',);
        }

        // PageBundle_showPage
        if (0 === strpos($pathinfo, '/showPage') && preg_match('#^/showPage/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'PageBundle_showPage')), array (  '_controller' => 'Maynard\\PageBundle\\Controller\\DefaultController::showPageAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
