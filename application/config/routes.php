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

//main website routes
$route['default_controller'] ='CupWebsite/index';
$route['about'] ='CupWebsite/about';
$route['academic'] ='CupWebsite/academic';
$route['admission'] ='CupWebsite/admission';

$route['downloads/(:any)'] ='CupWebsite/download/$1';

$route['studentlife'] ='CupWebsite/studentlife';

$route['gallery'] ='CupWebsite/gallery';
$route['gallery/(:any)'] ='CupWebsite/gallery/$1';
$route['gallery/(:any)/(:any)'] ='CupWebsite/gallery/$slug/$1';

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
$route['calendar']='CupWebsite/calendar';
$route['pdf']='CupWebsite/pdf';

//portal routes
$route['sportal']='StudentPortal/sportal';
$route['info']='StudentPortal/info';
$route['grades']='StudentPortal/grades';
$route['error1']='StudentPortal/error1';
$route['schedules']='StudentPortal/schedules';
$route['curriculum']='StudentPortal/curriculum';
$route['forum2']='StudentPortal/forum2';

//do portal routes
// $route['dportal']='StudentPortal/dportal';
$route['forum3']='StudentPortal/forum3';
$route['addsubject']='StudentPortal/addsubject';
$route['viewsched']='StudentPortal/viewsched';

//gelo's routes for do
$route['dportal/login']		  			 = 'portal_do_login/index';
$route['do/logout']		  			 = 'portal_do/logout';
$route['do/login/status']			 = 'portal_do_login/login';
$route['dportal']  				 =  'portal_do/index';

$route['dportal/course']  				 =  'portal_do/courses';
$route['dportal/courses/add']  			 =  'portal_do/addCourse';

$route['dportal/curriculums/(:any)']			=  'portal_do/list_curriculums/$1';
$route['dportal/curriculum/(:any)/(:any)']	=  'portal_do/view_curriculum/$1/$cu';
$route['dportal/curriculums/add/(:any)']			=  'portal_do/add_curriculums/$1';
$route['dportal/curriculum/delete/(:any)/(:any)'] =  'portal_do/delete_curriculum/$1/$cu';



//faculty portal routes
$route['fportal']='StudentPortal/fportal';
$route['forum4']='StudentPortal/forum4';
$route['classes']='StudentPortal/classes';
$route['viewclass']='StudentPortal/viewclass';


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

$route['admin/portal'] 	= 'admin_portal/index';

$route['admin/portal/school_year'] 	= 'admin_portal/school_year';
$route['admin/portal/school_year/add'] 	= 'admin_portal/add_school_year';

$route['admin/portal/students']	= 'admin_portal/student';

$route['admin/portal/deans_office']	= 'admin_portal/do';
$route['admin/portal/do/add']	= 'admin_portal/add_do';
$route['admin/portal/do/delete/(:any)']	= 'admin_portal/delete_do/$1';

$route['forum']		  		   =  'forum/index';
$route['forum/create']		   =  'forum/create_post';
$route['forum/post/(:any)'] 		   =  'forum/read_post';
$route['forum/(:any)/(:any)']  =  'admin_portal/student';

//DO ROUTES


$route['do/subjects/add/(:any)/(:any)'] =  'portal_do/addSubjects/$1/$cu';

$route['do/schedules'] 		    =  'portal_do/index';
$route['do/professors']		    =  'portal_do/index';
$route['do/students']			=  'portal_do/index';


$route['portal']='portal/login';

$route['portal/forum']='forum/index';
$route['portal/forum/(:any)']='forum/index';

$route['register']='portal/register';
//$route['default_controller'] = 'welcome';
$route['404_override'] = 'customError';
$route['translate_uri_dashes'] = FALSE;
