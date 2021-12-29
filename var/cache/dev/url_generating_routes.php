<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::categoryIndex'], [], [['text', '/category']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::categoryDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/delete']], [], [], []],
    'customer_index' => [[], ['_controller' => 'App\\Controller\\CustomerController::customerIndex'], [], [['text', '/customers']], [], [], []],
    'customer_detail' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::customerDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/detail']], [], [], []],
    'customer_delete' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::customerDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/delete']], [], [], []],
    'customer_add' => [[], ['_controller' => 'App\\Controller\\CustomerController::customerAdd'], [], [['text', '/customer/add']], [], [], []],
    'customer_edit' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::customerEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/edit']], [], [], []],
    'employee_index' => [[], ['_controller' => 'App\\Controller\\EmployeeController::employeeIndex'], [], [['text', '/employees']], [], [], []],
    'employee_detai' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::employeeDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/detail']], [], [], []],
    'employee_delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::employeeDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/delete']], [], [], []],
    'employee_add' => [[], ['_controller' => 'App\\Controller\\EmployeeController::employeeAdd'], [], [['text', '/employee/add']], [], [], []],
    'employee_edit' => [['id'], ['_controller' => 'App\\Controller\\EmployeeController::employeeEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employee/edit']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'order_index' => [[], ['_controller' => 'App\\Controller\\OrderController::orderIndex'], [], [['text', '/order']], [], [], []],
    'order_detail' => [['id'], ['_controller' => 'App\\Controller\\OrderController::orderDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order/detail']], [], [], []],
    'order_delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::orderDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order/delete']], [], [], []],
    'order_add' => [[], ['_controller' => 'App\\Controller\\OrderController::orderAdd'], [], [['text', '/order/add']], [], [], []],
    'order_edit' => [['id'], ['_controller' => 'App\\Controller\\OrderController::orderEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/order/edit']], [], [], []],
    'sort_order_date_asc' => [[], ['_controller' => 'App\\Controller\\OrderController::sortOrderDateAsc'], [], [['text', '/order/sort/date/asc']], [], [], []],
    'sort_order_date_desc' => [[], ['_controller' => 'App\\Controller\\OrderController::sortOrderDateDesc'], [], [['text', '/order/sort/date/desc']], [], [], []],
    'product_list_api' => [[], ['_controller' => 'App\\Controller\\ProductController::getproductListAPI'], [], [['text', '/getproductlist']], [], [], []],
    'product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::productIndex'], [], [['text', '/products']], [], [], []],
    'product_detail' => [['id'], ['_controller' => 'App\\Controller\\ProductController::productDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/detail']], [], [], []],
    'product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::productDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/delete']], [], [], []],
    'product_add' => [[], ['_controller' => 'App\\Controller\\ProductController::productAdd'], [], [['text', '/product/add']], [], [], []],
    'product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::productEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product/edit']], [], [], []],
    'sort_product_price_asc' => [[], ['_controller' => 'App\\Controller\\ProductController::sortProductPriceAsc'], [], [['text', '/product/sort/price/asc']], [], [], []],
    'sort_product_price_desc' => [[], ['_controller' => 'App\\Controller\\ProductController::sortProductIdDesc'], [], [['text', '/product/sort/price/desc']], [], [], []],
    'search_product_by_name' => [[], ['_controller' => 'App\\Controller\\ProductController::searchProductByName'], [], [['text', '/product/search']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'vendor_index' => [[], ['_controller' => 'App\\Controller\\VendorController::vendorIndex'], [], [['text', '/vendor']], [], [], []],
    'vendor_detail' => [['id'], ['_controller' => 'App\\Controller\\VendorController::vendorDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vendor/detail']], [], [], []],
    'vendor_delete' => [['id'], ['_controller' => 'App\\Controller\\VendorController::vendorDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vendor/delete']], [], [], []],
    'vendor_add' => [[], ['_controller' => 'App\\Controller\\VendorController::vendorAdd'], [], [['text', '/vendor/add']], [], [], []],
    'vendor_edit' => [['id'], ['_controller' => 'App\\Controller\\VendorController::vendorEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/vendor/edit']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'category_add' => [[], ['_controller' => 'App\\Controller\\CategoryController::categoryAdd'], [], [['text', '/category/add']], [], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::categoryEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category/edit']], [], [], []],
];
