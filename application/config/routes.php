<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'LoginController/login';
$route['login'] = 'LoginController/login';
$route['user_list']="AdminController/user_list";
$route['add_user'] ="AdminController/add_user";
$route['add_user/(:any)'] ="AdminController/add_user/$1";
$route['activate/(:any)/(:any)'] = 'AdminController/activate/$1/$2';
$route['inactivate/(:any)/(:any)'] = 'AdminController/inactivate/$1/$2';
$route['delete/(:any)/(:any)'] = 'welcome/delete/$1/$2';
$route['subadmin']="AdminController/subadmin";
$route['subadmin/(:any)'] ="AdminController/subadmin/$1";
$route['subadmin_list'] ="AdminController/subadmin_list";
$route['permission'] ="AdminController/permission";
$route['permission/(:any)'] ="AdminController/permission/$1";
$route['permission_list'] ="AdminController/permission_list";
$route['permission/(:any)'] ="AdminController/permission/$1";
$route['logout'] ="AdminController/logout";

// $route['default_controller'] = 'welcome/customer_list';
$route['customer_list'] = 'welcome/customer_list';
$route['add'] = 'welcome/add';

$route['delete/(:any)/(:any)'] = 'welcome/delete/$1/$2';
$route['game_list'] = 'welcome/game_list';
$route['add_game'] = 'welcome/add_game';
$route['store_list'] = 'welcome/store_list';
$route['add_store'] = 'welcome/add_store';
$route['term_list'] = 'welcome/term_list';
$route['add_term'] = 'welcome/add_term';
$route['add_contact'] = 'welcome/add_contact';
$route['contact_list'] = 'welcome/contact_list';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
