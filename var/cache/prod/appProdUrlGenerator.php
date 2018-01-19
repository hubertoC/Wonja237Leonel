<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminArtiste_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminArtiste_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminArtiste_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminArtiste_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminArtiste_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtisteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/artisteProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::categoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237_categoryArtiste' => array (  0 =>   array (    0 => 'category',    1 => 'name',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::categoryArtisteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category',    ),    2 =>     array (      0 => 'text',      1 => '/categoryArtiste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'presentation' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::presentationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/artiste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::searchAction',    '_method' => 'GET',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_reservation' => array (  0 =>   array (    0 => 'id',    1 => 'name',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::ReservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_enregistrement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::enregistremenArtisteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enregistrement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_newsletters' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::newsLettersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newsLetters/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_commentaire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::commentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hz_wonja237bundle_testSite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ArtistePublicController::testSiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test/wonja237test/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicites_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/publicites/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicites_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicites_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/publicites/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicites_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicites_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PublicitesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicitedefile_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/publicitedefile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicitedefile_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicitedefile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicitedefile_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/publicitedefile/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicitedefile_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicitedefile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicitedefile_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\PubliciteDefileController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/publicitedefile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_actualite_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/actualite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_actualite_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/actualite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_actualite_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/actualite/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_actualite_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/actualite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_actualite_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ActualiteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/actualite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reservation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\ReservationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_enregistrement_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/enregistrement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_enregistrement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/enregistrement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_enregistrement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/enregistrement/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_enregistrement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/enregistrement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_enregistrement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\EnregistrementAutreArtisteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/enregistrement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tuto_starratingsystem' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\StarratingsystemController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/starratingsystem',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_star_rating_system' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HZ\\Wonja237Bundle\\Controller\\AjaxStarratingsystemController::updateDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/starrating/update/data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}