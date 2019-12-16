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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/aboutme' => [[['_route' => 'aboutme_visitor', '_controller' => 'App\\Controller\\AboutmeController::index'], null, null, null, false, false, null]],
        '/admin/aboutme/new' => [[['_route' => 'aboutme_new', '_controller' => 'App\\Controller\\AboutmeController::new'], null, null, null, false, false, null]],
        '/admin/aboutme' => [[['_route' => 'aboutme_index', '_controller' => 'App\\Controller\\AboutmeController::show'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/list' => [[['_route' => 'admin_list', '_controller' => 'App\\Controller\\AdminController::list'], null, null, null, false, false, null]],
        '/admin/new' => [[['_route' => 'admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'images_render', '_controller' => 'App\\Controller\\ImagesController::index'], null, null, null, false, false, null]],
        '/admin/gallery' => [[['_route' => 'images_index', '_controller' => 'App\\Controller\\ImagesController::list'], null, null, null, false, false, null]],
        '/admin/gallery/new' => [[['_route' => 'images_new', '_controller' => 'App\\Controller\\ImagesController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tarif' => [[['_route' => 'tarif_render', '_controller' => 'App\\Controller\\TarifController::index'], null, null, null, false, false, null]],
        '/admin/tarif' => [[['_route' => 'tarif_list', '_controller' => 'App\\Controller\\TarifController::list'], null, null, null, false, false, null]],
        '/admin/tarif/new' => [[['_route' => 'tarif_new', '_controller' => 'App\\Controller\\TarifController::new'], null, null, null, false, false, null]],
        '/tarif/detail/bronze' => [[['_route' => 'tarif_detail_bronze', '_controller' => 'App\\Controller\\TarifController::detailBronze'], null, null, null, false, false, null]],
        '/tarif/detail/or' => [[['_route' => 'tarif_detail_or', '_controller' => 'App\\Controller\\TarifController::detailOr'], null, null, null, false, false, null]],
        '/tarif/detail/platine' => [[['_route' => 'tarif_detail_platine', '_controller' => 'App\\Controller\\TarifController::detailPlatine'], null, null, null, false, false, null]],
        '/temoignage' => [[['_route' => 'temoignage_index', '_controller' => 'App\\Controller\\TemoignageController::index'], null, null, null, false, false, null]],
        '/admin/temoignage/list' => [[['_route' => 'temoignage_list', '_controller' => 'App\\Controller\\TemoignageController::list'], null, null, null, false, false, null]],
        '/temoignage/new' => [[['_route' => 'temoignage_new', '_controller' => 'App\\Controller\\TemoignageController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|aboutme/(?'
                        .'|show/([^/]++)/edit(*:208)'
                        .'|([^/]++)/delete(*:231)'
                    .')'
                    .'|gallery/(?'
                        .'|show/([^/]++)(*:264)'
                        .'|([^/]++)/(?'
                            .'|edit(*:288)'
                            .'|delete(*:302)'
                        .')'
                    .')'
                    .'|t(?'
                        .'|arif/([^/]++)/(?'
                            .'|show(*:337)'
                            .'|edit(*:349)'
                            .'|delete(*:363)'
                        .')'
                        .'|emoignage/([^/]++)/(?'
                            .'|show(*:398)'
                            .'|edit(*:410)'
                            .'|delete(*:424)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'aboutme_edit', '_controller' => 'App\\Controller\\AboutmeController::edit'], ['id'], null, null, false, false, null]],
        231 => [[['_route' => 'aboutme_delete', '_controller' => 'App\\Controller\\AboutmeController::deleteAction'], ['id'], null, null, false, false, null]],
        264 => [[['_route' => 'images_show', '_controller' => 'App\\Controller\\ImagesController::show'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'images_edit', '_controller' => 'App\\Controller\\ImagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [[['_route' => 'images_delete', '_controller' => 'App\\Controller\\ImagesController::deleteAction'], ['id'], null, null, false, false, null]],
        337 => [[['_route' => 'tarif_show', '_controller' => 'App\\Controller\\TarifController::show'], ['id'], null, null, false, false, null]],
        349 => [[['_route' => 'tarif_edit', '_controller' => 'App\\Controller\\TarifController::edit'], ['id'], null, null, false, false, null]],
        363 => [[['_route' => 'tarif_delete', '_controller' => 'App\\Controller\\TarifController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        398 => [[['_route' => 'temoignage_show', '_controller' => 'App\\Controller\\TemoignageController::show'], ['id'], null, null, false, false, null]],
        410 => [[['_route' => 'temoignage_edit', '_controller' => 'App\\Controller\\TemoignageController::edit'], ['id'], null, null, false, false, null]],
        424 => [
            [['_route' => 'temoignage_delete', '_controller' => 'App\\Controller\\TemoignageController::deleteAction'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
