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
                        .'|servation/([^/]++)/(?'
                            .'|edit(*:404)'
                            .'|delete(*:418)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:460)'
                    .'|wdt/([^/]++)(*:480)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:522)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:559)'
                                .'|router(*:573)'
                                .'|exception(?'
                                    .'|(*:593)'
                                    .'|\\.css(*:606)'
                                .')'
                            .')'
                            .'|(*:616)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|annonce/([^/]++)(?'
                        .'|(*:655)'
                        .'|/edit(*:668)'
                        .'|(*:676)'
                    .')'
                    .'|invitation/([^/]++)(?'
                        .'|(*:707)'
                        .'|/edit(*:720)'
                        .'|(*:728)'
                    .')'
                    .'|recherche/([^/]++)(?'
                        .'|(*:758)'
                        .'|/edit(*:771)'
                        .'|(*:779)'
                    .')'
                .')'
                .'|/compagne/(?'
                    .'|(\\d+)(*:807)'
                    .'|([^/]++)(?'
                        .'|/edit(*:831)'
                        .'|(*:839)'
                    .')'
                    .'|admin/(?'
                        .'|edit/([^/]++)(*:870)'
                        .'|delete/([^/]++)(*:893)'
                    .')'
                    .'|(\\d+)(*:907)'
                .')'
                .'|/demande/(?'
                    .'|new/([^/]++)(*:940)'
                    .'|([^/]++)/(?'
                        .'|accepter(*:968)'
                        .'|refuser(*:983)'
                    .')'
                .')'
                .'|/evenement/(?'
                    .'|update/([^/]++)(*:1022)'
                    .'|show/([^/]++)(*:1044)'
                .')'
                .'|/invitation/(?'
                    .'|([^/]++)(?'
                        .'|(*:1080)'
                        .'|/edit(*:1094)'
                        .'|(*:1103)'
                    .')'
                    .'|mes\\-invitations(*:1129)'
                    .'|accepter/([^/]++)(*:1155)'
                    .'|refuser/([^/]++)(*:1180)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|remove(?'
                            .'|\\-all/([^/]++)(*:1227)'
                            .'|/(\\d+)(*:1242)'
                        .')'
                        .'|add/(\\d+)(*:1261)'
                    .')'
                    .'|ro(?'
                        .'|duit/(?'
                            .'|([^/]++)(?'
                                .'|(*:1295)'
                                .'|/edit(*:1309)'
                                .'|(*:1318)'
                            .')'
                            .'|admin/(?'
                                .'|edit/([^/]++)(*:1350)'
                                .'|delete/([^/]++)(*:1374)'
                            .')'
                            .'|produit/([^/]++)/rating(*:1407)'
                            .'|([^/]++)/rate/([^/]++)(*:1438)'
                        .')'
                        .'|fil/(?'
                            .'|back/([^/]++)(*:1468)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1493)'
                                .'|(*:1502)'
                            .')'
                            .'|back/([^/]++)/edit(*:1530)'
                            .'|front(?'
                                .'|(*:1547)'
                                .'|/([^/]++)(?'
                                    .'|(*:1568)'
                                    .'|/edit(*:1582)'
                                .')'
                            .')'
                            .'|([^/]++)(*:1601)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|c(?'
                        .'|herche/([^/]++)(?'
                            .'|(*:1641)'
                            .'|/edit(*:1655)'
                            .'|(*:1664)'
                        .')'
                        .'|lamation/([^/]++)(?'
                            .'|/edit(*:1699)'
                            .'|(*:1708)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation/([^/]++)(?'
                            .'|(*:1743)'
                            .'|/(?'
                                .'|edit(*:1760)'
                                .'|cancel(*:1775)'
                            .')'
                            .'|(*:1785)'
                        .')'
                        .'|t\\-password/([^/]++)(*:1815)'
                    .')'
                .')'
                .'|/terrain/([^/]++)(?'
                    .'|(*:1846)'
                    .'|/edit(*:1860)'
                    .'|(*:1869)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1899)'
                        .'|/edit(*:1913)'
                        .'|(*:1922)'
                    .')'
                    .'|user/([^/]++)/signaler(*:1954)'
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
        404 => [[['_route' => 'admin_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::adminEdit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'admin_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::adminDelete'], ['id'], ['POST' => 0], null, false, false, null]],
        460 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        480 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        522 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        559 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        573 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        593 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        606 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        616 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        655 => [[['_route' => 'back_annonce_show', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        668 => [[['_route' => 'back_annonce_edit', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        676 => [[['_route' => 'back_annonce_delete', '_controller' => 'App\\Controller\\BackO\\BackAnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        707 => [[['_route' => 'back_invitation_show', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'back_invitation_edit', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        728 => [[['_route' => 'back_invitation_delete', '_controller' => 'App\\Controller\\BackO\\BackInvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        758 => [[['_route' => 'back_recherche_show', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::show'], ['userId'], ['GET' => 0], null, false, true, null]],
        771 => [[['_route' => 'back_recherche_edit', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::edit'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        779 => [[['_route' => 'back_recherche_delete', '_controller' => 'App\\Controller\\BackO\\BackRechercheController::delete'], ['userId'], ['POST' => 0], null, false, true, null]],
        807 => [[['_route' => 'app_compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['idCompagne'], ['GET' => 0], null, false, true, null]],
        831 => [[['_route' => 'app_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::edit'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        839 => [[['_route' => 'app_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::delete'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        870 => [[['_route' => 'admin_compagne_edit', '_controller' => 'App\\Controller\\CompagneController::editBackOffice'], ['idCompagne'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        893 => [[['_route' => 'admin_compagne_delete', '_controller' => 'App\\Controller\\CompagneController::deleteBackOffice'], ['idCompagne'], ['POST' => 0], null, false, true, null]],
        907 => [[['_route' => 'compagne_show', '_controller' => 'App\\Controller\\CompagneController::show'], ['id'], null, null, false, true, null]],
        940 => [[['_route' => 'app_demande_new', '_controller' => 'App\\Controller\\DemandeController::new'], ['annonceId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        968 => [[['_route' => 'app_demande_accepter', '_controller' => 'App\\Controller\\DemandeController::accepter'], ['id'], ['POST' => 0], null, false, false, null]],
        983 => [[['_route' => 'app_demande_refuser', '_controller' => 'App\\Controller\\DemandeController::refuser'], ['id'], ['POST' => 0], null, false, false, null]],
        1022 => [[['_route' => 'evenement_update', '_controller' => 'App\\Controller\\EvenementController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1044 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], null, null, false, true, null]],
        1080 => [[['_route' => 'app_invitation_show', '_controller' => 'App\\Controller\\InvitationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1094 => [[['_route' => 'app_invitation_edit', '_controller' => 'App\\Controller\\InvitationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1103 => [[['_route' => 'app_invitation_delete', '_controller' => 'App\\Controller\\InvitationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1129 => [[['_route' => 'app_invitation_mes_invitations', '_controller' => 'App\\Controller\\InvitationController::mesInvitations'], [], null, null, false, false, null]],
        1155 => [[['_route' => 'app_invitation_accepter', '_controller' => 'App\\Controller\\InvitationController::accepter'], ['id'], ['POST' => 0], null, false, true, null]],
        1180 => [[['_route' => 'app_invitation_refuser', '_controller' => 'App\\Controller\\InvitationController::refuser'], ['id'], ['POST' => 0], null, false, true, null]],
        1227 => [[['_route' => 'app_panier_remove_all', '_controller' => 'App\\Controller\\PanierController::removeAll'], ['id'], null, null, false, true, null]],
        1242 => [[['_route' => 'app_panier_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        1261 => [[['_route' => 'app_panier_add', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        1295 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id_produit'], ['GET' => 0], null, false, true, null]],
        1309 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1318 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1350 => [[['_route' => 'admin_produit_edit', '_controller' => 'App\\Controller\\ProduitController::editBackOffice'], ['id_produit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1374 => [[['_route' => 'app_produit_delete2', '_controller' => 'App\\Controller\\ProduitController::delete2'], ['id_produit'], ['POST' => 0], null, false, true, null]],
        1407 => [[['_route' => 'app_produit_rating', '_controller' => 'App\\Controller\\ProduitController::showRatingChart'], ['id'], null, null, false, false, null]],
        1438 => [[['_route' => 'app_produit_rate', '_controller' => 'App\\Controller\\ProduitController::rateProduct'], ['id_produit', 'score'], ['GET' => 0], null, false, true, null]],
        1468 => [[['_route' => 'app_profil_show_back', '_controller' => 'App\\Controller\\ProfilController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        1493 => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1502 => [
            [['_route' => 'app_profil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_profil_delete_back', '_controller' => 'App\\Controller\\ProfilController::deleteB'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        1530 => [[['_route' => 'app_profil_edit_back', '_controller' => 'App\\Controller\\ProfilController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1547 => [[['_route' => 'app_profil_my_front', '_controller' => 'App\\Controller\\ProfilController::showMyProfil'], [], ['GET' => 0], null, false, false, null]],
        1568 => [[['_route' => 'app_profil_show_front', '_controller' => 'App\\Controller\\ProfilController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        1582 => [[['_route' => 'app_profil_edit_front', '_controller' => 'App\\Controller\\ProfilController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1601 => [[['_route' => 'app_profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['id'], null, null, false, true, null]],
        1641 => [[['_route' => 'app_recherche_show', '_controller' => 'App\\Controller\\RechercheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1655 => [[['_route' => 'app_recherche_edit', '_controller' => 'App\\Controller\\RechercheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1664 => [[['_route' => 'app_recherche_delete', '_controller' => 'App\\Controller\\RechercheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1699 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1708 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1743 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1760 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1775 => [[['_route' => 'app_reservation_cancel', '_controller' => 'App\\Controller\\ReservationController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        1785 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1815 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1846 => [[['_route' => 'app_terrain_show', '_controller' => 'App\\Controller\\TerrainController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1860 => [[['_route' => 'app_terrain_edit', '_controller' => 'App\\Controller\\TerrainController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1869 => [[['_route' => 'app_terrain_delete', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1899 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1913 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1922 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1954 => [
            [['_route' => 'app_user_signaler', '_controller' => 'App\\Controller\\UserController::signaler'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
