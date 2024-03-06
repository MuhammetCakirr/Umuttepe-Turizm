<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'HomeController/index/index';
$route['about'] = 'HomeController/index/about';
$route['404'] = 'HomeController/index/404';
$route['cart'] = 'HomeController/index/cart';
$route['checkout'] = 'HomeController/index/checkout';
$route['contact'] = 'HomeController/index/contact';
$route['news'] = 'HomeController/index/news';
$route['shop'] = 'HomeController/index/shop';

$route['login'] = 'LoginController/index/login';
$route['register'] = 'LoginController/index/register';
$route['biletlerim'] = 'SettingsController/index/biletlerim';
$route['hesap_bilgilerim'] = 'SettingsController/index/hesap_bilgilerim';
$route['kayitli_kartlarim'] = 'SettingsController/index/kayitli_kartlarim';
$route['settings'] = 'SettingsController/index/kayitli_kartlarim';
$route['rezervasyonlarim'] = 'SettingsController/index/rezervasyonlarim';
$route['sifre_degistir'] = 'SettingsController/index/sifre_degistir';
$route['cikis'] = 'SettingsController/index/cikis';
$route['hesabimi_sil'] = 'SettingsController/index/hesabimi_sil';

$route['tickets'] = 'TicketController/index';
$route['buying'] = 'BuyingController/index';





