<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/aboutus' => [[['_route' => 'aboutus', '_controller' => 'App\\Controller\\AboutUsController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/annonce' => [[['_route' => 'app_annonce_match_index', '_controller' => 'App\\Controller\\AnnonceMatchController::index'], null, ['GET' => 0], null, true, false, null]],
        '/annonce/new' => [[['_route' => 'app_annonce_match_new', '_controller' => 'App\\Controller\\AnnonceMatchController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/annonce' => [[['_route' => 'back_annonce_index', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/annonce/new' => [[['_route' => 'back_annonce_new', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [
            [['_route' => 'back_home', '_controller' => 'App\\Controller\\BackO\\BackController::index'], null, null, null, true, false, null],
            [['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null],
        ],
        '/back/backO' => [[['_route' => 'app_backO', '_controller' => 'App\\Controller\\BackO\\BackController::backO'], null, null, null, false, false, null]],
        '/back/invitation' => [[['_route' => 'back_invitation_index', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/invitation/new' => [[['_route' => 'back_invitation_new', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/recherche' => [[['_route' => 'back_recherche_index', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/recherche/new' => [[['_route' => 'back_recherche_new', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/buttons' => [[['_route' => 'app_buttons', '_controller' => 'App\\Controller\\BackController::buttons'], null, null, null, false, false, null]],
        '/dropdowns' => [[['_route' => 'app_dropdowns', '_controller' => 'App\\Controller\\BackController::dropdowns'], null, null, null, false, false, null]],
        '/typography' => [[['_route' => 'app_typography', '_controller' => 'App\\Controller\\BackController::typography'], null, null, null, false, false, null]],
        '/form-elements' => [[['_route' => 'app_form_elements', '_controller' => 'App\\Controller\\BackController::formElements'], null, null, null, false, false, null]],
        '/compagneback' => [[['_route' => 'app_compagneback', '_controller' => 'App\\Controller\\BackController::compagneback'], null, null, null, false, false, null]],
        '/icons' => [[['_route' => 'app_icons', '_controller' => 'App\\Controller\\BackController::icons'], null, null, null, false, false, null]],
        '/blank-page' => [[['_route' => 'app_blank_page', '_controller' => 'App\\Controller\\BackController::blankPage'], null, null, null, false, false, null]],
        '/error-404' => [[['_route' => 'app_error_404', '_controller' => 'App\\Controller\\BackController::error404'], null, null, null, false, false, null]],
        '/error-500' => [[['_route' => 'app_error_500', '_controller' => 'App\\Controller\\BackController::error500'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\BaseController::index'], null, null, null, false, false, null],
            [['_route' => 'app_root', '_controller' => 'App\\Controller\\HomeController::root'], null, null, null, false, false, null],
        ],
        '/compagne' => [[['_route' => 'app_compagne_index', '_controller' => 'App\\Controller\\CompagneController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/compagne/new' => [[['_route' => 'app_compagne_new', '_controller' => 'App\\Controller\\CompagneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compagne/admin/campagnes' => [[['_route' => 'admin_compagne_index', '_controller' => 'App\\Controller\\CompagneController::indexBackOffice'], null, ['GET' => 0], null, false, false, null]],
        '/compagne/admin/campagne/new' => [[['_route' => 'admin_compagne_new', '_controller' => 'App\\Controller\\CompagneController::newBackOffice'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compagne/admin/campagnes/export' => [[['_route' => 'admin_compagne_export', '_controller' => 'App\\Controller\\CompagneController::exportToExcel'], null, ['GET' => 0], null, false, false, null]],
        '/demande/repertoire' => [[['_route' => 'app_demande_repertoire', '_controller' => 'App\\Controller\\DemandeController::repertoire'], null, ['GET' => 0], null, false, false, null]],
        '/demande/mes-demandes' => [[['_route' => 'app_demande_mes_demandes', '_controller' => 'App\\Controller\\DemandeController::mesDemandes'], null, ['GET' => 0], null, false, false, null]],
        '/demande/debug' => [[['_route' => 'app_demande_debug', '_controller' => 'App\\Controller\\DemandeController::debug'], null, null, null, false, false, null]],
        '/emploidutemps/new' => [[['_route' => 'emploi_du_temps_new', '_controller' => 'App\\Controller\\EmploidutempsController::new'], null, null, null, false, false, null]],
        '/emploidutemps/calendrier' => [[['_route' => 'emploi_du_temps_calendrier', '_controller' => 'App\\Controller\\EmploidutempsController::calendrier'], null, null, null, false, false, null]],
        '/emploidutemps/show' => [[['_route' => 'emploi_du_temps_show', '_controller' => 'App\\Controller\\EmploidutempsController::show'], null, null, null, false, false, null]],
        '/emploidutemps/api' => [[['_route' => 'emploi_du_temps_api', '_controller' => 'App\\Controller\\EmploidutempsController::api'], null, null, null, false, false, null]],
        '/equipe/new' => [[['_route' => 'equipe_ajouter', '_controller' => 'App\\Controller\\EquipeController::ajouter'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_list', '_controller' => 'App\\Controller\\EvenementController::list'], null, null, null, false, false, null]],
        '/evenement/back' => [[['_route' => 'evenement_list_back', '_controller' => 'App\\Controller\\EvenementController::listBack'], null, null, null, false, false, null]],
        '/evenement/create' => [[['_route' => 'evenement_create', '_controller' => 'App\\Controller\\EvenementController::create'], null, null, null, false, false, null]],
        '/evenement/dashboard' => [[['_route' => 'dashboard_powerbi', '_controller' => 'App\\Controller\\EvenementController::dashboardPowerBI'], null, null, null, false, false, null]],
        '/invitation' => [[['_route' => 'app_invitation_index', '_controller' => 'App\\Controller\\InvitationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/invitation/new' => [[['_route' => 'app_invitation_new', '_controller' => 'App\\Controller\\InvitationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ouss' => [[['_route' => 'app_ouss', '_controller' => 'App\\Controller\\OussemaController::index'], null, null, null, false, false, null]],
        '/panier/clear' => [[['_route' => 'app_panier_clear', '_controller' => 'App\\Controller\\PanierController::clear'], null, null, null, false, false, null]],
        '/checkout/payment' => [[['_route' => 'app_checkout_payment', '_controller' => 'App\\Controller\\PanierController::payment'], null, null, null, false, false, null]],
        '/checkout/success' => [[['_route' => 'app_checkout_success', '_controller' => 'App\\Controller\\PanierController::checkoutSuccess'], null, null, null, false, false, null]],
        '/checkout/cancel' => [[['_route' => 'app_checkout_cancel', '_controller' => 'App\\Controller\\PanierController::checkoutCancel'], null, null, null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/admin/produits' => [[['_route' => 'admin_produit_index', '_controller' => 'App\\Controller\\ProduitController::indexBackOffice'], null, ['GET' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profil/new' => [[['_route' => 'app_profil_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil/front/new' => [[['_route' => 'app_profil_new_front', '_controller' => 'App\\Controller\\ProfilController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche' => [[['_route' => 'app_recherche_index', '_controller' => 'App\\Controller\\RechercheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recherche/new' => [[['_route' => 'app_recherche_new', '_controller' => 'App\\Controller\\RechercheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reclamations/statistiques' => [[['_route' => 'admin_reclamation_stats', '_controller' => 'App\\Controller\\ReclamationController::stats'], null, null, null, false, false, null]],
        '/admin/reclamations' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::adminIndex'], null, null, null, false, false, null]],
        '/admin/reclamation/new' => [[['_route' => 'admin_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reclamation/visualisation' => [[['_route' => 'app_reclamation_visualisation', '_controller' => 'App\\Controller\\ReclamationController::visualisation'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\ReservationController::adminIndex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations/export' => [[['_route' => 'admin_reservation_export', '_controller' => 'App\\Controller\\ReservationController::export'], null, null, null, false, false, null]],
        '/admin/reservations/event-names' => [[['_route' => 'admin_reservation_event_names', '_controller' => 'App\\Controller\\ReservationController::getEventNamesAjax'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservations/stats' => [[['_route' => 'admin_reservation_stats', '_controller' => 'App\\Controller\\ReservationController::reservationStats'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/terrain' => [[['_route' => 'app_terrain_index', '_controller' => 'App\\Controller\\TerrainController::index'], null, ['GET' => 0], null, true, false, null]],
        '/terrain/new' => [[['_route' => 'app_terrain_new', '_controller' => 'App\\Controller\\TerrainController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/produit/new' => [[['_route' => 'admin_produit_new', '_controller' => 'App\\Controller\\ProduitController::newBackOffice'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\PanierController::checkout'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:40)'
                            .'|\\.well\\-known/genid/([^/]++)(*:75)'
                            .'|validation_errors/([^/]++)(*:108)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:145)'
                        .'|/(?'
                            .'|contexts/([^.]+)(?:\\.(jsonld))?(*:188)'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:223)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:260)'
                            .')'
                        .')'
                    .')'
                    .'|nnonce/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                    .'|dmin/re(?'
                        .'|clamation/([^/]++)/(?'
                            .'|edit(*:355)'
                            .'|delete(*:369)'
                        .')'
                        .'|servation/(?'
                            .'|([^/]++)(*:399)'
                            .'|new(*:410)'
                            .'|([^/]++)/(?'
                                .'|e(?'
                                    .'|dit(*:437)'
                                    .'|xists(*:450)'
                                .')'
                                .'|delete(*:465)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:508)'
                    .'|wdt/([^/]++)(*:528)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:570)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:607)'
                                .'|router(*:621)'
                                .'|exception(?'
                                    .'|(*:641)'
                                    .'|\\.css(*:654)'
                                .')'
                            .')'
                            .'|(*:664)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|annonce/([^/]++)(?'
                        .'|(*:703)'
                        .'|/edit(*:716)'
                        .'|(*:724)'
                    .')'
                    .'|invitation/([^/]++)(?'
                        .'|(*:755)'
                        .'|/edit(*:768)'
                        .'|(*:776)'
                    .')'
                    .'|recherche/([^/]++)(?'
                        .'|(*:806)'
                        .'|/edit(*:819)'
                        .'|(*:827)'
                    .')'
                .')'
                .'|/compagne/(?'
                    .'|(\\d+)(*:855)'
                    .'|([^/]++)(?'
                        .'|/edit(*:879)'
                        .'|(*:887)'
                    .')'
                    .'|admin/(?'
                        .'|edit/([^/]++)(*:918)'
                        .'|delete/([^/]++)(*:941)'
                    .')'
                    .'|(\\d+)(*:955)'
                .')'
                .'|/demande/(?'
                    .'|new/([^/]++)(*:988)'
                    .'|([^/]++)/(?'
                        .'|accepter(*:1016)'
                        .'|refuser(*:1032)'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|update/([^/]++)(*:1072)'
                    .'|show/([^/]++)(*:1094)'
                .')'
                .'|/invitation/(?'
                    .'|([^/]++)(?'
                        .'|(*:1130)'
                        .'|/edit(*:1144)'
                        .'|(*:1153)'
                    .')'
                    .'|mes\\-invitations(*:1179)'
                    .'|accepter/([^/]++)(*:1205)'
                    .'|refuser/([^/]++)(*:1230)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|remove(?'
                                .'|\\-all/([^/]++)(*:1280)'
                                .'|/(\\d+)(*:1295)'
                            .')'
                            .'|add/(\\d+)(*:1314)'
                        .')'
                        .'|iement/(?'
                            .'|([^/]++)(*:1342)'
                            .'|success/([^/]++)(*:1367)'
                            .'|cancel/([^/]++)(*:1391)'
                        .')'
                    .')'
                    .'|ro(?'
                        .'|duit/(?'
                            .'|([^/]++)(?'
                                .'|(*:1426)'
                                .'|/edit(*:1440)'
                                .'|(*:1449)'
                            .')'
                            .'|admin/(?'
                                .'|edit/([^/]++)(*:1481)'
                                .'|delete/([^/]++)(*:1505)'
                            .')'
                            .'|produit/([^/]++)/rating(*:1538)'
                            .'|([^/]++)/rate/([^/]++)(*:1569)'
                        .')'
                        .'|fil/(?'
                            .'|back/([^/]++)(*:1599)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1624)'
                                .'|(*:1633)'
                            .')'
                            .'|back/([^/]++)/edit(*:1661)'
                            .'|front(?'
                                .'|(*:1678)'
                                .'|/([^/]++)(?'
                                    .'|(*:1699)'
                                    .'|/edit(*:1713)'
                                .')'
                            .')'
                            .'|([^/]++)(*:1732)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|c(?'
                        .'|herche/([^/]++)(?'
                            .'|(*:1772)'
                            .'|/edit(*:1786)'
                            .'|(*:1795)'
                        .')'
                        .'|lamation/([^/]++)(?'
                            .'|/edit(*:1830)'
                            .'|(*:1839)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/([^/]++)(?'
                            .'|(*:1874)'
                            .'|/(?'
                                .'|edit(*:1891)'
                                .'|cancel(*:1906)'
                                .'|pdf(*:1918)'
                                .'|barcode(*:1934)'
                            .')'
                            .'|(*:1944)'
                        .')'
                        .'|t\\-password/([^/]++)(*:1974)'
                    .')'
                .')'
                .'|/terrain/([^/]++)(?'
                    .'|(*:2005)'
                    .'|/edit(*:2019)'
                    .'|(*:2028)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:2058)'
                        .'|/edit(*:2072)'
                        .'|(*:2081)'
                    .')'
                    .'|user/([^/]++)/signaler(*:2113)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        75 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        108 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        145 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        188 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        223 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors'], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        260 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        289 => [[['_route' => 'app_annonce_match_show', '_controller' => 'App\\Controller\\AnnonceMatchController::show'], ['annonceId'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_annonce_match_edit', '_controller' => 'App\\Controller\\AnnonceMatchController::edit'], ['annonceId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_annonce_match_delete', '_controller' => 'App\\Controller\\AnnonceMatchController::delete'], ['annonceId'], ['POST' => 0], null, false, true, null]],
        355 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        399 => [[['_route' => 'admin_reservation_show', '_controller' => 'App\\Controller\\ReservationController::adminShow'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\ReservationController::adminNew'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        450 => [[['_route' => 'admin_reservation_exists', '_controller' => 'App\\Controller\\ReservationController::checkReservationExists'], ['id'], ['GET' => 0], null, false, false, null]],
        465 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        508 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        528 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        570 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        607 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        621 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        641 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        654 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        664 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        703 => [[['_route' => 'back_annonce_show', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        716 => [[['_route' => 'back_annonce_edit', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        724 => [[['_route' => 'back_annonce_delete', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        755 => [[['_route' => 'back_invitation_show', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        768 => [[['_route' => 'back_invitation_edit', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        776 => [[['_route' => 'back_invitation_delete', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        806 => [[['_route' => 'back_recherche_show', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::show'], ['userId'], ['GET' => 0], null, false, true, null]],
        819 => [[['_route' => 'back_recherche_edit', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::edit'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [[['_route' => 'back_recherche_delete', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::delete'], ['userId'], ['POST' => 0], null, false, true, null]],
        855 => [[['_route' => 'app_compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['idCompagne'], ['GET' => 0], null, false, true, null]],
        879 => [[['_route' => 'app_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::edit'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        887 => [[['_route' => 'app_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::delete'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        918 => [[['_route' => 'admin_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::editBackOffice'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        941 => [[['_route' => 'admin_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::deleteBackOffice'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        955 => [[['_route' => 'compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['id'], null, null, false, true, null]],
        988 => [[['_route' => 'app_demande_new', '_controller' => 'App\\Controller\\DemandeController::new'], ['annonceId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1016 => [[['_route' => 'app_demande_accepter', '_controller' => 'App\\Controller\\DemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        1032 => [[['_route' => 'app_demande_refuser', '_controller' => 'App\\Controller\\DemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        1072 => [[['_route' => 'evenement_update', '_controller' => 'App\\Controller\\EvenementController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1094 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], null, null, false, true, null]],
        1130 => [[['_route' => 'app_invitation_show', '_controller' => 'App\\Controller\\InvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1144 => [[['_route' => 'app_invitation_edit', '_controller' => 'App\\Controller\\InvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1153 => [[['_route' => 'app_invitation_delete', '_controller' => 'App\\Controller\\InvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1179 => [[['_route' => 'app_invitation_mes_invitations', '_controller' => 'App\\Controller\\InvitationController::mesInvitations'], [], null, null, false, false, null]],
        1205 => [[['_route' => 'app_invitation_accepter', '_controller' => 'App\\Controller\\InvitationController::accepter'], ['id'], ['POST' => 0], null, false, true, null]],
        1230 => [[['_route' => 'app_invitation_refuser', '_controller' => 'App\\Controller\\InvitationController::refuser'], ['id'], ['POST' => 0], null, false, true, null]],
        1280 => [[['_route' => 'app_panier_remove_all', '_controller' => 'App\\Controller\\PanierController::removeAll'], ['id'], null, null, false, true, null]],
        1295 => [[['_route' => 'app_panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        1314 => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        1342 => [[['_route' => 'app_stripe_payment', '_controller' => 'App\\Controller\\StripeController::createCheckoutSession'], ['id'], ['GET' => 0], null, false, true, null]],
        1367 => [[['_route' => 'app_stripe_success', '_controller' => 'App\\Controller\\StripeController::success'], ['id'], null, null, false, true, null]],
        1391 => [[['_route' => 'app_stripe_cancel', '_controller' => 'App\\Controller\\StripeController::cancel'], ['id'], null, null, false, true, null]],
        1426 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id_produit'], ['GET' => 0], null, false, true, null]],
        1440 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1449 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1481 => [[['_route' => 'admin_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editBackOffice'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1505 => [[['_route' => 'app_produit_delete2', '_controller' => 'App\\Controller\\ProduitController::delete2'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1538 => [[['_route' => 'app_produit_rating', '_controller' => 'App\\Controller\\ProduitController::showRatingChart'], ['id'], null, null, false, false, null]],
        1569 => [[['_route' => 'app_produit_rate', '_controller' => 'App\\Controller\\ProduitController::rateProduct'], ['id_produit', 'score'], ['GET' => 0], null, false, true, null]],
        1599 => [[['_route' => 'app_profil_show_back', '_controller' => 'App\\Controller\\ProfilController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1624 => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1633 => [
            [['_route' => 'app_profil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_profil_delete_back', '_controller' => 'App\\Controller\\ProfilController::deleteB'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1661 => [[['_route' => 'app_profil_edit_back', '_controller' => 'App\\Controller\\ProfilController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1678 => [[['_route' => 'app_profil_my_front', '_controller' => 'App\\Controller\\ProfilController::showMyProfil'], [], ['GET' => 0], null, false, false, null]],
        1699 => [[['_route' => 'app_profil_show_front', '_controller' => 'App\\Controller\\ProfilController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        1713 => [[['_route' => 'app_profil_edit_front', '_controller' => 'App\\Controller\\ProfilController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1732 => [[['_route' => 'app_profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], null, null, false, true, null]],
        1772 => [[['_route' => 'app_recherche_show', '_controller' => 'App\\Controller\\RechercheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1786 => [[['_route' => 'app_recherche_edit', '_controller' => 'App\\Controller\\RechercheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1795 => [[['_route' => 'app_recherche_delete', '_controller' => 'App\\Controller\\RechercheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1830 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1839 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1874 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1891 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1906 => [[['_route' => 'app_reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1918 => [[['_route' => 'app_reservation_pdf', '_controller' => 'App\\Controller\\ReservationController::generatePdf'], ['id'], null, null, false, false, null]],
        1934 => [[['_route' => 'app_reservation_barcode', '_controller' => 'App\\Controller\\ReservationController::generateBarcode'], ['id'], ['GET' => 0], null, false, false, null]],
        1944 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1974 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        2005 => [[['_route' => 'app_terrain_show', '_controller' => 'App\\Controller\\TerrainController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2019 => [[['_route' => 'app_terrain_edit', '_controller' => 'App\\Controller\\TerrainController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2028 => [[['_route' => 'app_terrain_delete', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2058 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2072 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2081 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2113 => [
            [['_route' => 'app_user_signaler', '_controller' => 'App\\Controller\\UserController::signaler'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
