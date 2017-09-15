<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/add')) {
            // addSchool
            if ('/addSchool' === $pathinfo) {
                return array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::addAction',  '_route' => 'addSchool',);
            }

            // addAdmin
            if ('/addAdmin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::addAction',  '_route' => 'addAdmin',);
            }

            // addEleve
            if ('/addEleve' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::addAction',  '_route' => 'addEleve',);
            }

            // addEnseignant
            if ('/addEnseignant' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::addAction',  '_route' => 'addEnseignant',);
            }

            // addParental
            if ('/addParental' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParentalController::addAction',  '_route' => 'addParental',);
            }

        }

        // assoParent
        if (0 === strpos($pathinfo, '/assoParent') && preg_match('#^/assoParent/(?P<id>[^/]++)/(?P<idp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'assoParent')), array (  '_controller' => 'AppBundle\\Controller\\EleveController::assoParentAction',));
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/list')) {
                // listSchools
                if ('/listSchools' === $pathinfo) {
                    return array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::showAction',  '_route' => 'listSchools',);
                }

                // listAdmins
                if ('/listAdmins' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::showAction',  '_route' => 'listAdmins',);
                }

                // listEleves
                if ('/listEleves' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EleveController::showAction',  '_route' => 'listEleves',);
                }

                // listEnseignants
                if ('/listEnseignants' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::showAction',  '_route' => 'listEnseignants',);
                }

                // listParentals
                if ('/listParentals' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ParentalController::showAction',  '_route' => 'listParentals',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/edit')) {
            // editSchool
            if (0 === strpos($pathinfo, '/editSchool') && preg_match('#^/editSchool/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::editAction',));
            }

            // editAdmin
            if (0 === strpos($pathinfo, '/editAdmin') && preg_match('#^/editAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::editAction',));
            }

            // editEleve
            if (0 === strpos($pathinfo, '/editEleve') && preg_match('#^/editEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEleve')), array (  '_controller' => 'AppBundle\\Controller\\EleveController::editAction',));
            }

            // editEnseignant
            if (0 === strpos($pathinfo, '/editEnseignant') && preg_match('#^/editEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editEnseignant')), array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::editAction',));
            }

            // editParental
            if (0 === strpos($pathinfo, '/editParental') && preg_match('#^/editParental/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editParental')), array (  '_controller' => 'AppBundle\\Controller\\ParentalController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/remove')) {
                // removeSchool
                if (0 === strpos($pathinfo, '/removeSchool') && preg_match('#^/removeSchool/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::removeAction',));
                }

                // removeAdmin
                if (0 === strpos($pathinfo, '/removeAdmin') && preg_match('#^/removeAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::removeAction',));
                }

                // removeEleve
                if (0 === strpos($pathinfo, '/removeEleve') && preg_match('#^/removeEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEleve')), array (  '_controller' => 'AppBundle\\Controller\\EleveController::removeAction',));
                }

                // removeEnseignant
                if (0 === strpos($pathinfo, '/removeEnseignant') && preg_match('#^/removeEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeEnseignant')), array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::removeAction',));
                }

                // removeParental
                if (0 === strpos($pathinfo, '/removeParental') && preg_match('#^/removeParental/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeParental')), array (  '_controller' => 'AppBundle\\Controller\\ParentalController::removeAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // profileSchool
            if (0 === strpos($pathinfo, '/profileSchool') && preg_match('#^/profileSchool/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileSchool')), array (  '_controller' => 'SchoolBundle\\Controller\\SchoolController::profileAction',));
            }

            // profileAdmin
            if (0 === strpos($pathinfo, '/profileAdmin') && preg_match('#^/profileAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileAdmin')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::profileAction',));
            }

            // profileEleve
            if (0 === strpos($pathinfo, '/profileEleve') && preg_match('#^/profileEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEleve')), array (  '_controller' => 'AppBundle\\Controller\\EleveController::profileAction',));
            }

            // profileEnseignant
            if (0 === strpos($pathinfo, '/profileEnseignant') && preg_match('#^/profileEnseignant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileEnseignant')), array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::profileAction',));
            }

            // profileParental
            if (0 === strpos($pathinfo, '/profileParental') && preg_match('#^/profileParental/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profileParental')), array (  '_controller' => 'AppBundle\\Controller\\ParentalController::profileAction',));
            }

            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // parentEleve
        if (0 === strpos($pathinfo, '/parentEleve') && preg_match('#^/parentEleve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'parentEleve')), array (  '_controller' => 'AppBundle\\Controller\\EleveController::parentAction',));
        }

        if (0 === strpos($pathinfo, '/myProfile')) {
            // myProfileAdmin
            if ('/myProfileAdmin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::myProfileAction',  '_route' => 'myProfileAdmin',);
            }

            // myProfileEleve
            if ('/myProfileEleve' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EleveController::myProfileAction',  '_route' => 'myProfileEleve',);
            }

            // myProfileEnseignant
            if ('/myProfileEnseignant' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EnseignantController::myProfileAction',  '_route' => 'myProfileEnseignant',);
            }

            // myProfileParental
            if ('/myProfileParental' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ParentalController::myProfileAction',  '_route' => 'myProfileParental',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
