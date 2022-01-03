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
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::categoryIndex'], null, null, null, false, false, null]],
        '/customers' => [[['_route' => 'customer_index', '_controller' => 'App\\Controller\\CustomerController::customerIndex'], null, null, null, false, false, null]],
        '/customer/add' => [[['_route' => 'customer_add', '_controller' => 'App\\Controller\\CustomerController::customerAdd'], null, null, null, false, false, null]],
        '/employees' => [[['_route' => 'employee_index', '_controller' => 'App\\Controller\\EmployeeController::employeeIndex'], null, null, null, false, false, null]],
        '/employee/add' => [[['_route' => 'employee_add', '_controller' => 'App\\Controller\\EmployeeController::employeeAdd'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order_index', '_controller' => 'App\\Controller\\OrderController::orderIndex'], null, null, null, false, false, null]],
        '/order/add' => [[['_route' => 'order_add', '_controller' => 'App\\Controller\\OrderController::orderAdd'], null, null, null, false, false, null]],
        '/getproductlist' => [[['_route' => 'product_list_api', '_controller' => 'App\\Controller\\ProductController::getproductListAPI'], null, ['GET' => 0], null, false, false, null]],
        '/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::productIndex'], null, null, null, false, false, null]],
        '/product/add' => [[['_route' => 'product_add', '_controller' => 'App\\Controller\\ProductController::productAdd'], null, null, null, false, false, null]],
        '/product/asc' => [[['_route' => 'sort_product_by_prices_asc', '_controller' => 'App\\Controller\\ProductController::sortProductPricedAsc'], null, null, null, false, false, null]],
        '/product/desc' => [[['_route' => 'sort_product_by_prices_desc', '_controller' => 'App\\Controller\\ProductController::sortProductPricedDesc'], null, null, null, false, false, null]],
        '/product/search' => [[['_route' => 'search_product_by_name', '_controller' => 'App\\Controller\\ProductController::searchProductByName'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/vendor' => [[['_route' => 'vendor_index', '_controller' => 'App\\Controller\\VendorController::vendorIndex'], null, null, null, false, false, null]],
        '/vendor/add' => [[['_route' => 'vendor_add', '_controller' => 'App\\Controller\\VendorController::vendorAdd'], null, null, null, false, false, null]],
        '/category/add' => [[['_route' => 'category_add', '_controller' => 'App\\Controller\\CategoryController::categoryAdd'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/c(?'
                    .'|ategory/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:202)'
                            .'|lete/([^/]++)(*:223)'
                        .')'
                        .'|edit/([^/]++)(*:245)'
                    .')'
                    .'|ustomer/(?'
                        .'|de(?'
                            .'|tail/([^/]++)(*:283)'
                            .'|lete/([^/]++)(*:304)'
                        .')'
                        .'|edit/([^/]++)(*:326)'
                    .')'
                .')'
                .'|/employee/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:367)'
                        .'|lete/([^/]++)(*:388)'
                    .')'
                    .'|edit/([^/]++)(*:410)'
                .')'
                .'|/order/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:447)'
                        .'|lete/([^/]++)(*:468)'
                    .')'
                    .'|edit/([^/]++)(*:490)'
                .')'
                .'|/product/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:529)'
                        .'|lete/([^/]++)(*:550)'
                    .')'
                    .'|edit/([^/]++)(*:572)'
                .')'
                .'|/vendor/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:610)'
                        .'|lete/([^/]++)(*:631)'
                    .')'
                    .'|edit/([^/]++)(*:653)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        202 => [[['_route' => 'category_detail', '_controller' => 'App\\Controller\\CategoryController::categoryDetail'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::categoryDelete'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::categoryEdit'], ['id'], null, null, false, true, null]],
        283 => [[['_route' => 'customer_detail', '_controller' => 'App\\Controller\\CustomerController::customerDetail'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'customer_delete', '_controller' => 'App\\Controller\\CustomerController::customerDelete'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::customerEdit'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'employee_detail', '_controller' => 'App\\Controller\\EmployeeController::employeeDetail'], ['id'], null, null, false, true, null]],
        388 => [[['_route' => 'employee_delete', '_controller' => 'App\\Controller\\EmployeeController::employeeDelete'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'employee_edit', '_controller' => 'App\\Controller\\EmployeeController::employeeEdit'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'order_detail', '_controller' => 'App\\Controller\\OrderController::orderDetail'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'order_delete', '_controller' => 'App\\Controller\\OrderController::orderDelete'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'order_edit', '_controller' => 'App\\Controller\\OrderController::orderEdit'], ['id'], null, null, false, true, null]],
        529 => [[['_route' => 'product_detail', '_controller' => 'App\\Controller\\ProductController::productDetail'], ['id'], null, null, false, true, null]],
        550 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::productDelete'], ['id'], null, null, false, true, null]],
        572 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::productEdit'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'vendor_detail', '_controller' => 'App\\Controller\\VendorController::vendorDetail'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'vendor_delete', '_controller' => 'App\\Controller\\VendorController::vendorDelete'], ['id'], null, null, false, true, null]],
        653 => [
            [['_route' => 'vendor_edit', '_controller' => 'App\\Controller\\VendorController::vendorEdit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
