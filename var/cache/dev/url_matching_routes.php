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
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/admin/produits' => [[['_route' => 'admin_produit_index', '_controller' => 'App\\Controller\\ProduitController::indexBackOffice'], null, ['GET' => 0], null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profil/new' => [[['_route' => 'app_profil_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil/front/new' => [[['_route' => 'app_profil_new_front', '_controller' => 'App\\Controller\\ProfilController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recherche' => [[['_route' => 'app_recherche_index', '_controller' => 'App\\Controller\\RechercheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recherche/new' => [[['_route' => 'app_recherche_new', '_controller' => 'App\\Controller\\RechercheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reclamations' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::adminIndex'], null, null, null, false, false, null]],
        '/admin/reclamation/new' => [[['_route' => 'admin_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservations' => [[['_route' => 'admin_reservation_index', '_controller' => 'App\\Controller\\ReservationController::adminIndex'], null, null, null, false, false, null]],
        '/admin/reservation/new' => [[['_route' => 'admin_reservation_new', '_controller' => 'App\\Controller\\ReservationController::adminNew'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|nnonce/([^/]++)(?'
                        .'|(*:225)'
                        .'|/edit(*:238)'
                        .'|(*:246)'
                    .')'
                    .'|dmin/re(?'
                        .'|clamation/([^/]++)/(?'
                            .'|edit(*:291)'
                            .'|delete(*:305)'
                        .')'
                        .'|servation/([^/]++)/(?'
                            .'|edit(*:340)'
                            .'|delete(*:354)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|annonce/([^/]++)(?'
                        .'|(*:393)'
                        .'|/edit(*:406)'
                        .'|(*:414)'
                    .')'
                    .'|invitation/([^/]++)(?'
                        .'|(*:445)'
                        .'|/edit(*:458)'
                        .'|(*:466)'
                    .')'
                    .'|recherche/([^/]++)(?'
                        .'|(*:496)'
                        .'|/edit(*:509)'
                        .'|(*:517)'
                    .')'
                .')'
                .'|/compagne/(?'
                    .'|(\\d+)(*:545)'
                    .'|([^/]++)(?'
                        .'|/edit(*:569)'
                        .'|(*:577)'
                    .')'
                    .'|admin/(?'
                        .'|edit/([^/]++)(*:608)'
                        .'|delete/([^/]++)(*:631)'
                    .')'
                    .'|(\\d+)(*:645)'
                .')'
                .'|/demande/(?'
                    .'|new/([^/]++)(*:678)'
                    .'|([^/]++)/(?'
                        .'|accepter(*:706)'
                        .'|refuser(*:721)'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|update/([^/]++)(*:760)'
                    .'|show/([^/]++)(*:781)'
                .')'
                .'|/invitation/(?'
                    .'|([^/]++)(?'
                        .'|(*:816)'
                        .'|/edit(*:829)'
                        .'|(*:837)'
                    .')'
                    .'|mes\\-invitations(*:862)'
                    .'|accepter/([^/]++)(*:887)'
                    .'|refuser/([^/]++)(*:911)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|remove(?'
                            .'|\\-all/([^/]++)(*:957)'
                            .'|/(\\d+)(*:971)'
                        .')'
                        .'|add/(\\d+)(*:989)'
                    .')'
                    .'|ro(?'
                        .'|duit/(?'
                            .'|([^/]++)(?'
                                .'|(*:1022)'
                                .'|/edit(*:1036)'
                                .'|(*:1045)'
                            .')'
                            .'|admin/(?'
                                .'|edit/([^/]++)(*:1077)'
                                .'|delete/([^/]++)(*:1101)'
                            .')'
                            .'|produit/([^/]++)/rating(*:1134)'
                            .'|([^/]++)/rate/([^/]++)(*:1165)'
                        .')'
                        .'|fil/(?'
                            .'|back/([^/]++)(*:1195)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1220)'
                                .'|(*:1229)'
                            .')'
                            .'|back/([^/]++)/edit(*:1257)'
                            .'|front(?'
                                .'|(*:1274)'
                                .'|/([^/]++)(?'
                                    .'|(*:1295)'
                                    .'|/edit(*:1309)'
                                .')'
                            .')'
                            .'|([^/]++)(*:1328)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|c(?'
                        .'|herche/([^/]++)(?'
                            .'|(*:1368)'
                            .'|/edit(*:1382)'
                            .'|(*:1391)'
                        .')'
                        .'|lamation/([^/]++)(?'
                            .'|/edit(*:1426)'
                            .'|(*:1435)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/([^/]++)(?'
                            .'|(*:1470)'
                            .'|/(?'
                                .'|edit(*:1487)'
                                .'|cancel(*:1502)'
                            .')'
                            .'|(*:1512)'
                        .')'
                        .'|t\\-password/([^/]++)(*:1542)'
                    .')'
                .')'
                .'|/terrain/([^/]++)(?'
                    .'|(*:1573)'
                    .'|/edit(*:1587)'
                    .'|(*:1596)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1626)'
                        .'|/edit(*:1640)'
                        .'|(*:1649)'
                    .')'
                    .'|user/([^/]++)/signaler(*:1681)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        225 => [[['_route' => 'app_annonce_match_show', '_controller' => 'App\\Controller\\AnnonceMatchController::show'], ['annonceId'], ['GET' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_annonce_match_edit', '_controller' => 'App\\Controller\\AnnonceMatchController::edit'], ['annonceId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'app_annonce_match_delete', '_controller' => 'App\\Controller\\AnnonceMatchController::delete'], ['annonceId'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        340 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        354 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        393 => [[['_route' => 'back_annonce_show', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'back_annonce_edit', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'back_annonce_delete', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        445 => [[['_route' => 'back_invitation_show', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'back_invitation_edit', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'back_invitation_delete', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        496 => [[['_route' => 'back_recherche_show', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::show'], ['userId'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'back_recherche_edit', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::edit'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'back_recherche_delete', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::delete'], ['userId'], ['POST' => 0], null, false, true, null]],
        545 => [[['_route' => 'app_compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['idCompagne'], ['GET' => 0], null, false, true, null]],
        569 => [[['_route' => 'app_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::edit'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        577 => [[['_route' => 'app_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::delete'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        608 => [[['_route' => 'admin_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::editBackOffice'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        631 => [[['_route' => 'admin_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::deleteBackOffice'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        645 => [[['_route' => 'compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['id'], null, null, false, true, null]],
        678 => [[['_route' => 'app_demande_new', '_controller' => 'App\\Controller\\DemandeController::new'], ['annonceId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        706 => [[['_route' => 'app_demande_accepter', '_controller' => 'App\\Controller\\DemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        721 => [[['_route' => 'app_demande_refuser', '_controller' => 'App\\Controller\\DemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        760 => [[['_route' => 'evenement_update', '_controller' => 'App\\Controller\\EvenementController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        781 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], null, null, false, true, null]],
        816 => [[['_route' => 'app_invitation_show', '_controller' => 'App\\Controller\\InvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_invitation_edit', '_controller' => 'App\\Controller\\InvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        837 => [[['_route' => 'app_invitation_delete', '_controller' => 'App\\Controller\\InvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        862 => [[['_route' => 'app_invitation_mes_invitations', '_controller' => 'App\\Controller\\InvitationController::mesInvitations'], [], null, null, false, false, null]],
        887 => [[['_route' => 'app_invitation_accepter', '_controller' => 'App\\Controller\\InvitationController::accepter'], ['id'], ['POST' => 0], null, false, true, null]],
        911 => [[['_route' => 'app_invitation_refuser', '_controller' => 'App\\Controller\\InvitationController::refuser'], ['id'], ['POST' => 0], null, false, true, null]],
        957 => [[['_route' => 'app_panier_remove_all', '_controller' => 'App\\Controller\\PanierController::removeAll'], ['id'], null, null, false, true, null]],
        971 => [[['_route' => 'app_panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        989 => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        1022 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id_produit'], ['GET' => 0], null, false, true, null]],
        1036 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1045 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1077 => [[['_route' => 'admin_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editBackOffice'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1101 => [[['_route' => 'app_produit_delete2', '_controller' => 'App\\Controller\\ProduitController::delete2'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1134 => [[['_route' => 'app_produit_rating', '_controller' => 'App\\Controller\\ProduitController::showRatingChart'], ['id'], null, null, false, false, null]],
        1165 => [[['_route' => 'app_produit_rate', '_controller' => 'App\\Controller\\ProduitController::rateProduct'], ['id_produit', 'score'], ['GET' => 0], null, false, true, null]],
        1195 => [[['_route' => 'app_profil_show_back', '_controller' => 'App\\Controller\\ProfilController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1220 => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1229 => [
            [['_route' => 'app_profil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_profil_delete_back', '_controller' => 'App\\Controller\\ProfilController::deleteB'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1257 => [[['_route' => 'app_profil_edit_back', '_controller' => 'App\\Controller\\ProfilController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1274 => [[['_route' => 'app_profil_my_front', '_controller' => 'App\\Controller\\ProfilController::showMyProfil'], [], ['GET' => 0], null, false, false, null]],
        1295 => [[['_route' => 'app_profil_show_front', '_controller' => 'App\\Controller\\ProfilController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_profil_edit_front', '_controller' => 'App\\Controller\\ProfilController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1328 => [[['_route' => 'app_profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], null, null, false, true, null]],
        1368 => [[['_route' => 'app_recherche_show', '_controller' => 'App\\Controller\\RechercheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1382 => [[['_route' => 'app_recherche_edit', '_controller' => 'App\\Controller\\RechercheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1391 => [[['_route' => 'app_recherche_delete', '_controller' => 'App\\Controller\\RechercheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1426 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1435 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1470 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1487 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1502 => [[['_route' => 'app_reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1512 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1542 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1573 => [[['_route' => 'app_terrain_show', '_controller' => 'App\\Controller\\TerrainController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1587 => [[['_route' => 'app_terrain_edit', '_controller' => 'App\\Controller\\TerrainController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1596 => [[['_route' => 'app_terrain_delete', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1626 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1640 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1649 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1681 => [
            [['_route' => 'app_user_signaler', '_controller' => 'App\\Controller\\UserController::signaler'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
