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
        '/cases' => [[['_route' => 'app_cases_index', '_controller' => 'App\\Controller\\CasesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cases/new' => [[['_route' => 'app_cases_new', '_controller' => 'App\\Controller\\CasesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_game_rules', '_controller' => 'App\\Controller\\GameController::ruleds'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'app_game', '_controller' => 'App\\Controller\\GameController::index'], null, null, null, false, false, null]],
        '/game/reset' => [[['_route' => 'app_game_reset', '_controller' => 'App\\Controller\\GameController::reset'], null, null, null, false, false, null]],
        '/game/board' => [[['_route' => 'app_game_board', '_controller' => 'App\\Controller\\GameController::board'], null, null, null, false, false, null]],
        '/game/roll' => [[['_route' => 'app_game_roll', '_controller' => 'App\\Controller\\GameController::roll'], null, null, null, false, false, null]],
        '/icon' => [[['_route' => 'app_icon_index', '_controller' => 'App\\Controller\\IconController::index'], null, ['GET' => 0], null, true, false, null]],
        '/icon/new' => [[['_route' => 'app_icon_new', '_controller' => 'App\\Controller\\IconController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/luck' => [[['_route' => 'app_luck_index', '_controller' => 'App\\Controller\\LuckController::index'], null, ['GET' => 0], null, true, false, null]],
        '/luck/new' => [[['_route' => 'app_luck_new', '_controller' => 'App\\Controller\\LuckController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/player' => [[['_route' => 'app_player_index', '_controller' => 'App\\Controller\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/player/new' => [[['_route' => 'app_player_new', '_controller' => 'App\\Controller\\PlayerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/property' => [[['_route' => 'app_property_index', '_controller' => 'App\\Controller\\PropertyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/property/new' => [[['_route' => 'app_property_new', '_controller' => 'App\\Controller\\PropertyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/station' => [[['_route' => 'app_station_index', '_controller' => 'App\\Controller\\StationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/station/new' => [[['_route' => 'app_station_new', '_controller' => 'App\\Controller\\StationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type' => [[['_route' => 'app_type_index', '_controller' => 'App\\Controller\\TypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/new' => [[['_route' => 'app_type_new', '_controller' => 'App\\Controller\\TypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/cases/(?'
                    .'|([^/]++)(?'
                        .'|(*:190)'
                        .'|/edit(*:203)'
                        .'|(*:211)'
                    .')'
                    .'|buy/([^/]++)/([^/]++)(*:241)'
                    .'|go\\-prison/([^/]++)(*:268)'
                    .'|mortgage/([^/]++)(?'
                        .'|(*:296)'
                        .'|/([^/]++)(*:313)'
                    .')'
                    .'|pay/([^/]++)/([^/]++)/([^/]++)(*:352)'
                    .'|out\\-of\\-jail/([^/]++)(*:382)'
                .')'
                .'|/luck/(?'
                    .'|random/([^/]++)(*:415)'
                    .'|([^/]++)(?'
                        .'|(*:434)'
                        .'|/edit(*:447)'
                        .'|(*:455)'
                    .')'
                .')'
                .'|/icon/([^/]++)(?'
                    .'|(*:482)'
                    .'|/edit(*:495)'
                    .'|(*:503)'
                .')'
                .'|/p(?'
                    .'|layer/(?'
                        .'|([^/]++)(?'
                            .'|(*:537)'
                            .'|/edit(*:550)'
                        .')'
                        .'|delete/([^/]++)(*:574)'
                    .')'
                    .'|roperty/(?'
                        .'|([^/]++)(?'
                            .'|(*:605)'
                            .'|/edit(*:618)'
                            .'|(*:626)'
                        .')'
                        .'|add\\-house/([^/]++)(*:654)'
                    .')'
                .')'
                .'|/station/([^/]++)(?'
                    .'|(*:684)'
                    .'|/edit(*:697)'
                    .'|(*:705)'
                .')'
                .'|/type/([^/]++)(?'
                    .'|(*:731)'
                    .'|/edit(*:744)'
                    .'|(*:752)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_cases_show', '_controller' => 'App\\Controller\\CasesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_cases_edit', '_controller' => 'App\\Controller\\CasesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_cases_delete', '_controller' => 'App\\Controller\\CasesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_cases_buy', '_controller' => 'App\\Controller\\CasesController::buy'], ['case', 'player'], ['POST' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_cases_go_prison', '_controller' => 'App\\Controller\\CasesController::goPrison'], ['player'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_cases_mortgage', '_controller' => 'App\\Controller\\CasesController::mortgage'], ['player'], null, null, false, true, null]],
        313 => [[['_route' => 'app_cases_mortgage_player', '_controller' => 'App\\Controller\\CasesController::mortgagePlayer'], ['cases', 'price'], null, null, false, true, null]],
        352 => [[['_route' => 'app_cases_pay', '_controller' => 'App\\Controller\\CasesController::pay'], ['case', 'player', 'price'], ['POST' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_out_of_jail', '_controller' => 'App\\Controller\\CasesController::outOfJail'], ['player'], ['POST' => 0], null, false, true, null]],
        415 => [[['_route' => 'app_luck_random', '_controller' => 'App\\Controller\\GameController::random'], ['player'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'app_luck_show', '_controller' => 'App\\Controller\\LuckController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        447 => [[['_route' => 'app_luck_edit', '_controller' => 'App\\Controller\\LuckController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'app_luck_delete', '_controller' => 'App\\Controller\\LuckController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        482 => [[['_route' => 'app_icon_show', '_controller' => 'App\\Controller\\IconController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        495 => [[['_route' => 'app_icon_edit', '_controller' => 'App\\Controller\\IconController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        503 => [[['_route' => 'app_icon_delete', '_controller' => 'App\\Controller\\IconController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        537 => [[['_route' => 'app_player_show', '_controller' => 'App\\Controller\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        574 => [[['_route' => 'app_player_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'app_property_show', '_controller' => 'App\\Controller\\PropertyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => 'app_property_edit', '_controller' => 'App\\Controller\\PropertyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        626 => [[['_route' => 'app_property_delete', '_controller' => 'App\\Controller\\PropertyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        654 => [[['_route' => 'app_property_add_house', '_controller' => 'App\\Controller\\PropertyController::addHouse'], ['cases'], ['POST' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_station_show', '_controller' => 'App\\Controller\\StationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        697 => [[['_route' => 'app_station_edit', '_controller' => 'App\\Controller\\StationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        705 => [[['_route' => 'app_station_delete', '_controller' => 'App\\Controller\\StationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        731 => [[['_route' => 'app_type_show', '_controller' => 'App\\Controller\\TypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        744 => [[['_route' => 'app_type_edit', '_controller' => 'App\\Controller\\TypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        752 => [
            [['_route' => 'app_type_delete', '_controller' => 'App\\Controller\\TypeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
