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
|	https://codeigniter.com/user_guide/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes in theccccccc
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['logout']			= 'login/logout';

$route['tambah-gardu']	= 'Admincont/TambahGardu';
$route['tampil-gardu']	= 'Admincont/TampilGardu';
$route['tambah-trafo']	= 'Admincont/TambahTrafo';
$route['tampil-trafo']	= 'Admincont/TampilTrafo';
$route['tambah-penyulang']	= 'Admincont/TambahPenyulang';
$route['tampil-penyulang']	= 'Admincont/TampilPenyulang';
$route['tambah-user']	= 'Admincont/TambahUser';
$route['tampil-user']	= 'Admincont/TampilUser';
$route['tambah-pengukuran']	= 'Admincont/TampilGarduUkur';
$route['tampil-pengukuran']	= 'Admincont/TampilPengukuran';
$route['tampil-laporan']	= 'TeknisiCont/TampilLaporan';
//Petugas
$route['tambah-ukurp']	= 'Petugas/Petugascont/TampilGarduUkur';
$route['tampil-ukurp']	= 'Petugas/Petugascont/TampilPengukuran';
//Rayon
$route['tampil-garduR']	= 'Rayon/Rayoncont/TampilGardu';
$route['tampil-trafoR']	= 'Rayon/Rayoncont/TampilTrafo';
$route['tampil-ukurR']	= 'Rayon/Rayoncont/TampilPengukuran';
//Teknisi
$route['tambah-garduT']	= 'Teknisi/Teknisicont/TambahGardu';
$route['tampil-garduT']	= 'Teknisi/Teknisicont/TampilGardu';
$route['tampil-trafoT']	= 'Teknisi/Teknisicont/TampilTrafo';
$route['tambah-trafoT']	= 'Teknisi/Teknisicont/TambahTrafo';
$route['tampil-penyulangT']	= 'Teknisi/Teknisicont/TampilPenyulang';
$route['tambah-penyulangT']	= 'Teknisi/Teknisicont/TambahPenyulang';
$route['tambah-ukurT']	= 'Teknisi/Teknisicont/TampilGardu';
$route['tampil-ukurT']	= 'Teknisi/Teknisicont/TampilPengukuran';

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
