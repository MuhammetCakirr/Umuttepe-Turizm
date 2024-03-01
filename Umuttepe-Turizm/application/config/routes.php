<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'HomeController/changePage/index';
$route['about'] = 'HomeController/changePage/about';
$route['404'] = 'HomeController/changePage/404';
$route['cart'] = 'HomeController/changePage/cart';
$route['checkout'] = 'HomeController/changePage/checkout';
$route['contact'] = 'HomeController/changePage/contact';
$route['news'] = 'HomeController/changePage/news';
$route['shop'] = 'HomeController/changePage/shop';

$route['login'] = 'LoginController/index/login';
$route['register'] = 'LoginController/index/register';
$route['settings'] = 'SettingsController/index/settings';



