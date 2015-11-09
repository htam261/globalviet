<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "life";
$route['404_override'] = '';

//Config Router Multi Language
//$route['^en/(.+)$'] = "$1";
//$route['^vi/(.+)$'] = "$1";
//$route['^en$'] = $route['default_controller'];
//$route['^vi$'] = $route['default_controller'];

//Config Router Admincp
$route['admincp/statistics_ipbyday'] = "Admincp/statistics_ipbyday";
$route['admincp'] = "Admincp";
$route['admincp/menu'] = "Admincp/menu";
$route['admincp/login'] = "Admincp/login";
$route['admincp/logout'] = "Admincp/logout";
$route['admincp/permission'] = "Admincp/permission";
$route['admincp/saveLog'] = "Admincp/saveLog";
$route['admincp/update_profile'] = "Admincp/update_profile";
$route['admincp/setting'] = "Admincp/setting";
$route['admincp/getSetting'] = "Admincp/getSetting";
$route['admincp/(:any)/(:any)/(:any)/(:any)'] = "$1/Admincp_$2/$3/$4";
$route['admincp/(:any)/(:any)/(:any)'] = "$1/Admincp_$2/$3";
$route['admincp/(:any)/(:any)'] = "$1/Admincp_$2";
$route['admincp/(:any)'] = "$1/Admincp_index";

$route['hoachatgpb.html'] = "Life/hoachat";
$route['kythuatgpb.html'] = "Life/kythuat";
$route['dungcugpb.html'] = "Life/dungcu";
$route['hoichan.html'] = "Life/hoichan";
$route['cthoachat.html'] = "Life/chitiethoachat";

$route['mail/sentmail'] = "Life/sentmailcontact";

$route['gioi-thieu/ve-chung-toi.html'] = "Life/aboutus";
$route['lien-he.html'] = "Life/contactus";
$route['cong-trinh.html'] = "Life/gallery";
$route['dich-vu/quy-trinh-thiet-ke.html'] = "Life/quytrinhthietke";
$route['dich-vu/quy-trinh-lam-viec.html'] = "Life/quytrinhlamviec";
$route['captcha'] = "Life/captcha";
#CATEGORIES
$route['(:any).htm'] = "Life/cat/$1";
$route['(:any)/(:any).html'] = "Life/detail/$2";
$route['(:any)/(:num)'] = "Life/cat/$1/$2";
$route['life/(:num)'] = "Life/index/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */