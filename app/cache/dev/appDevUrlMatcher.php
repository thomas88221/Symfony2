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

        if (0 === strpos($pathinfo, '/css/dd55396')) {
            // _assetic_dd55396
            if ($pathinfo === '/css/dd55396.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_dd55396',);
            }

            if (0 === strpos($pathinfo, '/css/dd55396_')) {
                // _assetic_dd55396_0
                if ($pathinfo === '/css/dd55396_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_dd55396_0',);
                }

                if (0 === strpos($pathinfo, '/css/dd55396_part_2_')) {
                    // _assetic_dd55396_1
                    if ($pathinfo === '/css/dd55396_part_2_0_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_dd55396_1',);
                    }

                    // _assetic_dd55396_2
                    if ($pathinfo === '/css/dd55396_part_2_1_font-awesome_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_dd55396_2',);
                    }

                    // _assetic_dd55396_3
                    if ($pathinfo === '/css/dd55396_part_2_3_css_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_dd55396_3',);
                    }

                    // _assetic_dd55396_4
                    if ($pathinfo === '/css/dd55396_part_2_4_ace.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_dd55396_4',);
                    }

                    // _assetic_dd55396_5
                    if ($pathinfo === '/css/dd55396_part_2_5_ace-skins.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_dd55396_5',);
                    }

                    // _assetic_dd55396_6
                    if ($pathinfo === '/css/dd55396_part_2_6_ace-rtl.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_dd55396_6',);
                    }

                    // _assetic_dd55396_7
                    if ($pathinfo === '/css/dd55396_part_2_7_style_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dd55396',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_dd55396_7',);
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
                if ($pathinfo === '/js/ccca1cb_part_1_3_ace.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_3',);
                }

                // _assetic_ccca1cb_4
                if ($pathinfo === '/js/ccca1cb_part_1_4_ace-elements.min_5.js') {
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
                if ($pathinfo === '/js/ccca1cb_part_1_7_jquery-ui.custom.min_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_7',);
                }

                // _assetic_ccca1cb_8
                if ($pathinfo === '/js/ccca1cb_part_1_8_jquery.ui.touch-punch.min_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_8',);
                }

                // _assetic_ccca1cb_9
                if ($pathinfo === '/js/ccca1cb_part_1_9_core_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ccca1cb',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_ccca1cb_9',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/51c56cc')) {
            // _assetic_51c56cc
            if ($pathinfo === '/css/51c56cc.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_51c56cc',);
            }

            if (0 === strpos($pathinfo, '/css/51c56cc_part_1_')) {
                // _assetic_51c56cc_0
                if ($pathinfo === '/css/51c56cc_part_1_0_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_51c56cc_0',);
                }

                // _assetic_51c56cc_1
                if ($pathinfo === '/css/51c56cc_part_1_1_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_51c56cc_1',);
                }

                // _assetic_51c56cc_2
                if ($pathinfo === '/css/51c56cc_part_1_3_css_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_51c56cc_2',);
                }

                // _assetic_51c56cc_3
                if ($pathinfo === '/css/51c56cc_part_1_4_ace.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_51c56cc_3',);
                }

                // _assetic_51c56cc_4
                if ($pathinfo === '/css/51c56cc_part_1_5_ace-skins.min_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_51c56cc_4',);
                }

                // _assetic_51c56cc_5
                if ($pathinfo === '/css/51c56cc_part_1_6_ace-rtl.min_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_51c56cc_5',);
                }

                // _assetic_51c56cc_6
                if ($pathinfo === '/css/51c56cc_part_1_7_style_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51c56cc',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_51c56cc_6',);
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

        // pds_home_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pds_home_homepage');
            }

            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pds_home_homepage',);
        }

        // pds_account_update
        if ($pathinfo === '/compte/update') {
            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::updateAction',  '_route' => 'pds_account_update',);
        }

        // pds_home_inbox
        if ($pathinfo === '/messages') {
            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::inboxAction',  '_route' => 'pds_home_inbox',);
        }

        // pds_friends_homepage
        if ($pathinfo === '/amis') {
            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::inboxAction',  '_route' => 'pds_friends_homepage',);
        }

        // pds_home_changeAvatar
        if ($pathinfo === '/changer-d-avatar') {
            return array (  '_controller' => 'PDS\\HomeBundle\\Controller\\DefaultController::inboxAction',  '_route' => 'pds_home_changeAvatar',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
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
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
