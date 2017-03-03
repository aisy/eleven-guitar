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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'Login';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;


// ======================== ROUTE ADMIN ============================
$route['admin/halaman-utama'] 	   	       = 'Administrator/halaman_utama';

$route['admin/user']                       = 'User';
// =============================================================================
// Kategori
// =============================================================================
$route['admin/kategori']                   = 'Kategori';
$route['admin/kategori/tambah']		         = 'Kategori/tambah';
$route['admin/kategori/edit/(:num)']       = 'Kategori/edit/$1';
$route['admin/kategori/hapus/(:num)']      = 'Kategori/hapus/$1';
// =============================================================================
// Barang
// =============================================================================
$route['admin/barang'] 			   	           = 'Barang/index';
$route['admin/barang/tambah']		           = 'Barang/tambah';
$route['admin/barang/edit/(:num)'] 	       = 'Barang/edit/$1';
$route['admin/barang/hapus/(:num)']        = 'Barang/hapus/$1';
// =============================================================================
// Tentang kami
// =============================================================================
$route['admin/tentang']                  = 'halaman/Tentang';
$route['admin/tentang/tambah']		       = 'halaman/Tentang/tambah';
$route['admin/tentang/edit/(:num)']      = 'halaman/Tentang/edit/$1';
$route['admin/tentang/hapus/(:num)']     = 'halaman/Tentang/hapus/$1';

$route['admin/profil/tambah']		        = 'halaman/Profil/tambah';
$route['admin/profil/edit/(:num)']      = 'halaman/Profil/edit/$1';
$route['admin/profil/hapus/(:num)']     = 'halaman/Profil/hapus/$1';

$route['admin/owner']                  = 'halaman/Profil_owner';
$route['admin/owner/tambah']		       = 'halaman/Profil_owner/tambah';
$route['admin/owner/edit/(:num)']      = 'halaman/Profil_owner/edit/$1';
$route['admin/owner/hapus/(:num)']     = 'halaman/Profil_owner/hapus/$1';
