<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homecontroller/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['index'] = 'HomeController/index';
$route['about'] = 'HomeController/changePage/about';
$route['404'] = 'HomeController/changePage/404';
$route['cart'] = 'HomeController/changePage/cart';
$route['checkout'] = 'HomeController/changePage/checkout';
$route['contact'] = 'HomeController/changePage/contact';
$route['news'] = 'HomeController/changePage/news';
$route['shop'] = 'HomeController/changePage/shop';
$route['maps'] = 'HomeController/changePage/maps';

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
$route['buying'] = 'BuyingController/index/buying';
$route['barcode'] = 'BuyingController/index/barcode';
$route['barcodeIndex'] = 'BuyingController/index/index';

$route['qr'] = 'Render/index';

$route['admin'] = 'AdminController/index/index';
$route['sehirler'] = 'AdminController/index/sehirler';
$route['kullanicilar'] = 'AdminController/index/kullanicilar';
$route['rotalar'] = 'AdminController/index/rotalar';
$route['tarifeler'] = 'AdminController/index/tarifeler';

$route['deneme'] = 'HomeController/changePage/deneme';







