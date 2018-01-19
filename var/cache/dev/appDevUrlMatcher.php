<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        if (0 === strpos($pathinfo, '/admin')) {
            // adminArtiste_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminArtiste_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminArtiste_index');
                }

                return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::indexAction',  '_route' => 'adminArtiste_index',);
            }
            not_adminArtiste_index:

            // adminArtiste_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_adminArtiste_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArtiste_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::showAction',));
            }
            not_adminArtiste_show:

            // adminArtiste_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminArtiste_new;
                }

                return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::newAction',  '_route' => 'adminArtiste_new',);
            }
            not_adminArtiste_new:

            // adminArtiste_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_adminArtiste_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArtiste_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::editAction',));
            }
            not_adminArtiste_edit:

            // adminArtiste_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_adminArtiste_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminArtiste_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::deleteAction',));
            }
            not_adminArtiste_delete:

        }

        // hz_wonja237_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237_homepage');
            }

            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::indexAction',  '_route' => 'hz_wonja237_homepage',);
        }

        // hz_wonja237_profile
        if (0 === strpos($pathinfo, '/artisteProfile') && preg_match('#^/artisteProfile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hz_wonja237_profile')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::profileAction',));
        }

        if (0 === strpos($pathinfo, '/category')) {
            // hz_wonja237_category
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::categoryAction',  '_route' => 'hz_wonja237_category',);
            }

            // hz_wonja237_categoryArtiste
            if (0 === strpos($pathinfo, '/categoryArtiste') && preg_match('#^/categoryArtiste/(?P<category>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hz_wonja237_categoryArtiste')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::categoryArtisteAction',));
            }

        }

        // presentation
        if (0 === strpos($pathinfo, '/artiste') && preg_match('#^/artiste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::presentationAction',));
        }

        // ajax_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::searchAction',  '_method' => 'GET',  '_route' => 'ajax_search',);
        }

        // hz_wonja237bundle_reservation
        if (0 === strpos($pathinfo, '/reservation') && preg_match('#^/reservation/(?P<id>[^/]++)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hz_wonja237bundle_reservation')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::ReservationAction',));
        }

        // hz_wonja237bundle_enregistrement
        if (rtrim($pathinfo, '/') === '/enregistrement') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237bundle_enregistrement');
            }

            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::enregistremenArtisteAction',  '_route' => 'hz_wonja237bundle_enregistrement',);
        }

        // hz_wonja237bundle_contact
        if (rtrim($pathinfo, '/') === '/contact') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237bundle_contact');
            }

            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::contactAction',  '_route' => 'hz_wonja237bundle_contact',);
        }

        // hz_wonja237bundle_newsletters
        if (rtrim($pathinfo, '/') === '/newsLetters') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237bundle_newsletters');
            }

            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::newsLettersAction',  '_route' => 'hz_wonja237bundle_newsletters',);
        }

        // hz_wonja237bundle_commentaire
        if (0 === strpos($pathinfo, '/commentaire') && preg_match('#^/commentaire/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237bundle_commentaire');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hz_wonja237bundle_commentaire')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::commentaireAction',));
        }

        // hz_wonja237bundle_testSite
        if (rtrim($pathinfo, '/') === '/test/wonja237test') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hz_wonja237bundle_testSite');
            }

            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::testSiteAction',  '_route' => 'hz_wonja237bundle_testSite',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/category')) {
                // category_index
                if (rtrim($pathinfo, '/') === '/admin/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category_index');
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
                }
                not_category_index:

                // category_show
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::showAction',));
                }
                not_category_show:

                // category_new
                if ($pathinfo === '/admin/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_new;
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }
                not_category_new:

                // category_edit
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::editAction',));
                }
                not_category_edit:

                // category_delete
                if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/admin/publicite')) {
                if (0 === strpos($pathinfo, '/admin/publicites')) {
                    // publicites_index
                    if (rtrim($pathinfo, '/') === '/admin/publicites') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicites_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'publicites_index');
                        }

                        return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::indexAction',  '_route' => 'publicites_index',);
                    }
                    not_publicites_index:

                    // publicites_show
                    if (preg_match('#^/admin/publicites/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicites_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicites_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::showAction',));
                    }
                    not_publicites_show:

                    // publicites_new
                    if ($pathinfo === '/admin/publicites/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_publicites_new;
                        }

                        return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::newAction',  '_route' => 'publicites_new',);
                    }
                    not_publicites_new:

                    // publicites_edit
                    if (preg_match('#^/admin/publicites/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_publicites_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicites_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::editAction',));
                    }
                    not_publicites_edit:

                    // publicites_delete
                    if (preg_match('#^/admin/publicites/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_publicites_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicites_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::deleteAction',));
                    }
                    not_publicites_delete:

                }

                if (0 === strpos($pathinfo, '/admin/publicitedefile')) {
                    // publicitedefile_index
                    if (rtrim($pathinfo, '/') === '/admin/publicitedefile') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicitedefile_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'publicitedefile_index');
                        }

                        return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::indexAction',  '_route' => 'publicitedefile_index',);
                    }
                    not_publicitedefile_index:

                    // publicitedefile_show
                    if (preg_match('#^/admin/publicitedefile/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_publicitedefile_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicitedefile_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::showAction',));
                    }
                    not_publicitedefile_show:

                    // publicitedefile_new
                    if ($pathinfo === '/admin/publicitedefile/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_publicitedefile_new;
                        }

                        return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::newAction',  '_route' => 'publicitedefile_new',);
                    }
                    not_publicitedefile_new:

                    // publicitedefile_edit
                    if (preg_match('#^/admin/publicitedefile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_publicitedefile_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicitedefile_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::editAction',));
                    }
                    not_publicitedefile_edit:

                    // publicitedefile_delete
                    if (preg_match('#^/admin/publicitedefile/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_publicitedefile_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicitedefile_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::deleteAction',));
                    }
                    not_publicitedefile_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/actualite')) {
                // admin_actualite_index
                if (rtrim($pathinfo, '/') === '/admin/actualite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_actualite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_actualite_index');
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::indexAction',  '_route' => 'admin_actualite_index',);
                }
                not_admin_actualite_index:

                // admin_actualite_show
                if (preg_match('#^/admin/actualite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_actualite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_actualite_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::showAction',));
                }
                not_admin_actualite_show:

                // admin_actualite_new
                if ($pathinfo === '/admin/actualite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_actualite_new;
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::newAction',  '_route' => 'admin_actualite_new',);
                }
                not_admin_actualite_new:

                // admin_actualite_edit
                if (preg_match('#^/admin/actualite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_actualite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_actualite_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::editAction',));
                }
                not_admin_actualite_edit:

                // admin_actualite_delete
                if (preg_match('#^/admin/actualite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_actualite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_actualite_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::deleteAction',));
                }
                not_admin_actualite_delete:

            }

            if (0 === strpos($pathinfo, '/admin/reservation')) {
                // admin_reservation_index
                if (rtrim($pathinfo, '/') === '/admin/reservation') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_reservation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_reservation_index');
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::indexAction',  '_route' => 'admin_reservation_index',);
                }
                not_admin_reservation_index:

                // admin_reservation_show
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_reservation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservation_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::showAction',));
                }
                not_admin_reservation_show:

                // admin_reservation_new
                if ($pathinfo === '/admin/reservation/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_reservation_new;
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::newAction',  '_route' => 'admin_reservation_new',);
                }
                not_admin_reservation_new:

                // admin_reservation_edit
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_reservation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservation_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::editAction',));
                }
                not_admin_reservation_edit:

                // admin_reservation_delete
                if (preg_match('#^/admin/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_reservation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reservation_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::deleteAction',));
                }
                not_admin_reservation_delete:

            }

            if (0 === strpos($pathinfo, '/admin/enregistrement')) {
                // admin_enregistrement_index
                if (rtrim($pathinfo, '/') === '/admin/enregistrement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_enregistrement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_enregistrement_index');
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::indexAction',  '_route' => 'admin_enregistrement_index',);
                }
                not_admin_enregistrement_index:

                // admin_enregistrement_show
                if (preg_match('#^/admin/enregistrement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_enregistrement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_enregistrement_show')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::showAction',));
                }
                not_admin_enregistrement_show:

                // admin_enregistrement_new
                if ($pathinfo === '/admin/enregistrement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_enregistrement_new;
                    }

                    return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::newAction',  '_route' => 'admin_enregistrement_new',);
                }
                not_admin_enregistrement_new:

                // admin_enregistrement_edit
                if (preg_match('#^/admin/enregistrement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_enregistrement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_enregistrement_edit')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::editAction',));
                }
                not_admin_enregistrement_edit:

                // admin_enregistrement_delete
                if (preg_match('#^/admin/enregistrement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_enregistrement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_enregistrement_delete')), array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::deleteAction',));
                }
                not_admin_enregistrement_delete:

            }

        }

        // tuto_starratingsystem
        if ($pathinfo === '/starratingsystem') {
            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\StarratingsystemController::indexAction',  '_route' => 'tuto_starratingsystem',);
        }

        // ajax_star_rating_system
        if ($pathinfo === '/ajax/starrating/update/data') {
            return array (  '_controller' => 'HZ\\Wonja237Bundle\\Controller\\AjaxStarratingsystemController::updateDataAction',  '_route' => 'ajax_star_rating_system',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
