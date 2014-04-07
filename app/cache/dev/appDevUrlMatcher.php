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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // login_redirect
        if ($pathinfo === '/login_redirect') {
            return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\SecurityController::login_redirectAction',  '_route' => 'login_redirect',);
        }

        if (0 === strpos($pathinfo, '/produit')) {
            // produit
            if (rtrim($pathinfo, '/') === '/produit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'produit');
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit',);
            }

            // produit_show
            if (preg_match('#^/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::showAction',));
            }

            // produit_new
            if ($pathinfo === '/produit/new') {
                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit_new',);
            }

            // produit_create
            if ($pathinfo === '/produit/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_produit_create;
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::createAction',  '_route' => 'produit_create',);
            }
            not_produit_create:

            // produit_edit
            if (preg_match('#^/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::editAction',));
            }

            // produit_update
            if (preg_match('#^/produit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_produit_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_update')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::updateAction',));
            }
            not_produit_update:

            // produit_delete
            if (preg_match('#^/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_produit_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ProduitController::deleteAction',));
            }
            not_produit_delete:

        }

        if (0 === strpos($pathinfo, '/org')) {
            // organisation
            if (rtrim($pathinfo, '/') === '/org') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'organisation');
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::indexAction',  '_route' => 'organisation',);
            }

            // organisation_show
            if (preg_match('#^/org/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_show')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::showAction',));
            }

            // organisation_new
            if ($pathinfo === '/org/new') {
                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::newAction',  '_route' => 'organisation_new',);
            }

            // organisation_create
            if ($pathinfo === '/org/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_organisation_create;
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::createAction',  '_route' => 'organisation_create',);
            }
            not_organisation_create:

            // organisation_edit
            if (preg_match('#^/org/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_edit')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::editAction',));
            }

            // organisation_update
            if (preg_match('#^/org/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_organisation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_update')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::updateAction',));
            }
            not_organisation_update:

            // organisation_delete
            if (preg_match('#^/org/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_organisation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organisation_delete')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\OrganisationController::deleteAction',));
            }
            not_organisation_delete:

        }

        if (0 === strpos($pathinfo, '/client')) {
            // client
            if (rtrim($pathinfo, '/') === '/client') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'client');
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
            }

            // client_show
            if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::showAction',));
            }

            // client_new
            if ($pathinfo === '/client/new') {
                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
            }

            // client_create
            if ($pathinfo === '/client/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_client_create;
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
            }
            not_client_create:

            // client_edit
            if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::editAction',));
            }

            // client_update
            if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_client_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::updateAction',));
            }
            not_client_update:

            // client_delete
            if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_client_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\ClientController::deleteAction',));
            }
            not_client_delete:

        }

        if (0 === strpos($pathinfo, '/panier')) {
            // contenuPanier
            if (rtrim($pathinfo, '/') === '/panier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contenuPanier');
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::contenuPanierAction',  '_route' => 'contenuPanier',);
            }

            // ajoutArticle
            if (0 === strpos($pathinfo, '/panier/ajoutArticle') && preg_match('#^/panier/ajoutArticle/(?P<article_id>[^/]++)/(?P<qte>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutArticle')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::ajoutArticleAction',));
            }

            if (0 === strpos($pathinfo, '/panier/s')) {
                // soustraitArticle
                if (0 === strpos($pathinfo, '/panier/soustraitArticle') && preg_match('#^/panier/soustraitArticle/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soustraitArticle')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::soustraitArticleAction',));
                }

                // supprimerArticle
                if (0 === strpos($pathinfo, '/panier/supprimerArticle') && preg_match('#^/panier/supprimerArticle/(?P<article_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerArticle')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::supprimerArticleAction',));
                }

            }

            if (0 === strpos($pathinfo, '/panier/v')) {
                // viderPanier
                if ($pathinfo === '/panier/viderPanier') {
                    return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::viderPanierAction',  '_route' => 'viderPanier',);
                }

                // validationPanier
                if ($pathinfo === '/panier/valider') {
                    return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\PanierController::validationPanierAction',  '_route' => 'validationPanier',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/commande')) {
            // commande
            if (rtrim($pathinfo, '/') === '/commande') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'commande');
                }

                return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande',);
            }

            // commande_show
            if (preg_match('#^/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_show')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\CommandeController::showAction',));
            }

            // commande_validation
            if (preg_match('#^/commande/(?P<id>[^/]++)/validation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande_validation')), array (  '_controller' => 'elinoix\\shopBundle\\Controller\\CommandeController::validationAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'elinoix\\shopBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
