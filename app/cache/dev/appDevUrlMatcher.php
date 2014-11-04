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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/bd31afc')) {
            // _assetic_bd31afc
            if ($pathinfo === '/css/bd31afc.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bd31afc',);
            }

            if (0 === strpos($pathinfo, '/css/bd31afc_')) {
                // _assetic_bd31afc_0
                if ($pathinfo === '/css/bd31afc_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bd31afc_0',);
                }

                if (0 === strpos($pathinfo, '/css/bd31afc_part_2_')) {
                    // _assetic_bd31afc_1
                    if ($pathinfo === '/css/bd31afc_part_2_0_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bd31afc_1',);
                    }

                    // _assetic_bd31afc_2
                    if ($pathinfo === '/css/bd31afc_part_2_1_font-awesome_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_bd31afc_2',);
                    }

                    // _assetic_bd31afc_3
                    if ($pathinfo === '/css/bd31afc_part_2_3_css_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_bd31afc_3',);
                    }

                    // _assetic_bd31afc_4
                    if ($pathinfo === '/css/bd31afc_part_2_4_ace.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_bd31afc_4',);
                    }

                    // _assetic_bd31afc_5
                    if ($pathinfo === '/css/bd31afc_part_2_5_ace-skins.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_bd31afc_5',);
                    }

                    // _assetic_bd31afc_6
                    if ($pathinfo === '/css/bd31afc_part_2_6_ace-rtl.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_bd31afc_6',);
                    }

                    // _assetic_bd31afc_7
                    if ($pathinfo === '/css/bd31afc_part_2_7_style_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bd31afc',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_bd31afc_7',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ccca1cb')) {
            // _assetic_ccca1cb
            if ($pathinfo === '/js/ccca1cb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ccca1cb',);
            }

            if (0 === strpos($pathinfo, '/js/ccca1cb_part_1_')) {
                // _assetic_ccca1cb_0
                if ($pathinfo === '/js/ccca1cb_part_1_0_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_0',);
                }

                // _assetic_ccca1cb_1
                if ($pathinfo === '/js/ccca1cb_part_1_1_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_1',);
                }

                // _assetic_ccca1cb_2
                if ($pathinfo === '/js/ccca1cb_part_1_2_ace-extra.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_2',);
                }

                // _assetic_ccca1cb_3
                if ($pathinfo === '/js/ccca1cb_part_1_3_jquery-ui.custom.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_3',);
                }

                // _assetic_ccca1cb_4
                if ($pathinfo === '/js/ccca1cb_part_1_4_jquery.ui.touch-punch.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_4',);
                }

                // _assetic_ccca1cb_5
                if ($pathinfo === '/js/ccca1cb_part_1_5_jquery.easypiechart.min_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_5',);
                }

                // _assetic_ccca1cb_6
                if ($pathinfo === '/js/ccca1cb_part_1_6_jquery.sparkline.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_6',);
                }

                // _assetic_ccca1cb_7
                if ($pathinfo === '/js/ccca1cb_part_1_7_ace-elements.min_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_7',);
                }

                // _assetic_ccca1cb_8
                if ($pathinfo === '/js/ccca1cb_part_1_8_ace.min_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_8',);
                }

                // _assetic_ccca1cb_9
                if ($pathinfo === '/js/ccca1cb_part_1_9_core_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_9',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        // pds_login_homepage
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'PDS\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pds_login_homepage',);
        }

        // pds_home_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pds_home_homepage');
            }

            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pds_home_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
