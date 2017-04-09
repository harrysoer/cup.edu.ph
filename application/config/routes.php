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
$route['default_controller'] ='CupWebsite/index';
$route['about'] ='CupWebsite/about';
$route['academic'] ='CupWebsite/academic';
$route['admission'] ='CupWebsite/admission';
$route['studentlife'] ='CupWebsite/studentlife';

$route['gallery'] ='CupWebsite/gallery';
$route['gallery/(:any)'] ='CupWebsite/gallery/$1';

$route['news'] = 'CupWebsite/news';
$route['news/(:any)'] = 'CupWebsite/read_news/$1';

$route['mvg']='CupWebsite/mvg';
$route['adm']='CupWebsite/adm';
$route['hymn']='CupWebsite/hymn';
$route['cba']='CupWebsite/cba';
$route['coact']='CupWebsite/coact';
$route['coas']='CupWebsite/coas';
$route['coe']='CupWebsite/coe';
$route['conm']='CupWebsite/conm';
$route['csc']='CupWebsite/csc';
$route['koh']='CupWebsite/koh';
$route['mss']='CupWebsite/mss';
$route['sts']='CupWebsite/sts';
$route['ec']='CupWebsite/ec';
$route['kgmaf']='CupWebsite/kgmaf';
$route['promise']='CupWebsite/promise';


$route['logout']		  		 = 'admin/logout';
$route['login']		  			 = 'admin_login/index';
$route['login/status']			 = 'admin_login/login';
$route['admin/index']		 	 = 'admin/index';
$route['admin/news/create'] 	 = 'admin/addNews';
$route['admin/news/edit/(:any)'] = 'admin/editNews/$1';
$route['admin/news/list'] 		 = 'admin/listNews';
$route['admin/news/read/(:any)'] = 'admin/readMore/$1';
$route['admin/news/callList']	 = 'admin/ajax_listNews';

$route['admin/admission/forms/list']     = 'admin/listForms';
$route['admin/admission/forms/upload'] 	 = 'admin/uploadView';
$route['admin/admission/forms/submit']	 = 'admin/uploadForm';
$route['admin/admission/forms/callList'] = 'admin/ajax_listForms';

$route['admin/gallery/albums/list']     = 'admin/listAlbums';
$route['admin/gallery/albums/callList'] = 'admin/ajax_listAlbums';
$route['admin/gallery/albums/create']	= 'admin/addAlbum';
$route['admin/gallery/albums/upload']	= 'admin/uploadAlbum';
$route['admin/gallery/view/(:any)'] 	= 'admin/listImages/$1';
$route['admin/gallery/view/(:any)/(:any)'] 	= 'admin/listImages/$1/$id';

$route['portal']='portal/login';
$route['register']='portal/register';
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
