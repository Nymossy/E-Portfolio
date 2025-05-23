<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles.css']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::accueil'], [], [['text', '/accueil']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\AccueilController::about'], [], [['text', '/about']], [], [], []],
    'app_cv' => [[], ['_controller' => 'App\\Controller\\AccueilController::cv'], [], [['text', '/cv']], [], [], []],
    'app_portfolio_1' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_1'], [], [['text', '/portfolio_1']], [], [], []],
    'app_portfolio_2' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_2'], [], [['text', '/portfolio_2']], [], [], []],
    'app_portfolio_3' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_3'], [], [['text', '/portfolio_3']], [], [], []],
    'app_cyber' => [[], ['_controller' => 'App\\Controller\\AccueilController::cyber'], [], [['text', '/cyber']], [], [], []],
    'generate_cv_pdf' => [[], ['_controller' => 'App\\Controller\\AccueilController::generateCvPdf'], [], [['text', '/generate-cv-pdf']], [], [], []],
    'App\Controller\AccueilController::accueil' => [[], ['_controller' => 'App\\Controller\\AccueilController::accueil'], [], [['text', '/accueil']], [], [], []],
    'App\Controller\AccueilController::about' => [[], ['_controller' => 'App\\Controller\\AccueilController::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\AccueilController::cv' => [[], ['_controller' => 'App\\Controller\\AccueilController::cv'], [], [['text', '/cv']], [], [], []],
    'App\Controller\AccueilController::portfolio_1' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_1'], [], [['text', '/portfolio_1']], [], [], []],
    'App\Controller\AccueilController::portfolio_2' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_2'], [], [['text', '/portfolio_2']], [], [], []],
    'App\Controller\AccueilController::portfolio_3' => [[], ['_controller' => 'App\\Controller\\AccueilController::portfolio_3'], [], [['text', '/portfolio_3']], [], [], []],
    'App\Controller\AccueilController::cyber' => [[], ['_controller' => 'App\\Controller\\AccueilController::cyber'], [], [['text', '/cyber']], [], [], []],
    'App\Controller\AccueilController::generateCvPdf' => [[], ['_controller' => 'App\\Controller\\AccueilController::generateCvPdf'], [], [['text', '/generate-cv-pdf']], [], [], []],
];
