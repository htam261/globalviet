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


$route['default_controller'] = "Life";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Config Router Multi Language
//$route['^en/(.+)$'] = "$1";
//$route['^vi/(.+)$'] = "$1";
//$route['^en$'] = $route['default_controller'];
//$route['^vi$'] = $route['default_controller'];
$route['LOGIN_PAGE']    = 'Life/login';

$route['logout']        = 'Life/logout';
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

$route['demo']="Life/demosdf";
$route['booking'] = "Life/bookingcarauto";
//$route['booking'] = "Life/bookingcar";
$route['check-username'] = "Life/checkUserNameExists";
$route['check-captcha'] = "Life/checkCaptcha";
$route['check-password'] = "Life/checkPassword";
$route['captcha'] = "Life/captcha";
$route['thoat.html'] = "Life/logout";

$route['gioi-thieu'] = "Life/aboutus";
$route['tintuc-sukien/tintucsukien']="Life/sukien";
$route['article/article']="Life/sukien";

$route['hoat-dong-r-d/hoatdong-nghiencuu.html']="Life/hoatdongnghiengcuu";//
$route['activity-r-d/activity-research.html']="Life/hoatdongnghiengcuu";//
$route['hoat-dong-r-d/hoatdong-hoinghi-hoithao.html']="Life/hoatdonghoinghihoithao";//xoa roi
$route['hoat-dong-r-d/hoatdong-baocao-khoahoc.html']="Life/hoatdongbaocaokhoahoc";//xoa roi
$route['hoat-dong-r-d/hoatdongdetaill.html']="Life/hoatdongdetaill";
$route['lien-he.html'] = "Life/contactus";

$route['dang-nhap.html'] = "Life/login";
$route['dang-ky.html'] = "Life/register";

$route['contact-us.html'] = "Life/contactus";
$route['cong-trinh.html'] = "Life/gallery";
$route['dich-vu/quy-trinh-thiet-ke.html'] = "Life/quytrinhthietke";
$route['dich-vu/quy-trinh-lam-viec.html'] = "Life/quytrinhlamviec";
#CATEGORIES
$route['hoatdongdetaill/(:any).html'] = "Life/hoatdongdetaill/$1";//
$route['activity-detaill/(:any).html'] = "Life/hoatdongdetaill/$1";//
$route['gioi-thieu/(:any).html'] = "Life/abouturl/$1";//
$route['about/(:any).html'] = "Life/abouturl/$1";//

$route['event']="Life/event";
$route['event/(:any)-(:num).html']="Life/eventurl/$1/$2";
$route['event/(:num)']="Life/eventpage/$1";
$route['event/detail/(:any).html']="Life/eventdetail/$1";

$route['services']="Life/services";
$route['services/(:num)']="Life/servicespage/$1";//chưa
//$route['services/detail/(:any).html']="Life/servicesdetail/$1";


$route['services/(:any).html']="Life/servicesdetail/$1";//
$route['service/(:any)-(:num).html']="Life/servicesurl/$1/$2";

$route['hoat-dong-r-d/hoatdong-(:any)-(:num).html'] = "Life/hoatdonglist/$1/$2";
$route['activity-r-d/activity-(:any)-(:num).html'] = "Life/hoatdonglist/$1/$2";
$route['san-pham-dich-vu/(:any).html']="Life/sanphamdichvuurl/$1";//
$route['products-services/(:any).html']="Life/sanphamdichvuurl/$1";//
$route['tintucsukien/(:any).html']="Life/sukienurldetail/$1";
$route['article/(:any).html']="Life/sukienurldetail/$1";
//$route['(:any).htm'] = "Life/cat/$1";
//$route['(:any)/(:any).html'] = "Life/detail/$2";
//$route['(:any)/(:num)'] = "Life/cat/$1/$2";
//$route['Life/(:num)'] = "Life/index/$1";
//$route['Life/(:num)'] = "Life/index/$1";
$route['loadcontent/acticle-(:num).html']="Life/acticle/$1";
//$route['loadcontent/services-(:num).html']="Life/services/$1";///////////////////////////
$route['mail/sentmail']="Life/sentmailauto";
$route['loadslider/(:any)']="Slider/loadsliderurl/$1";
$route['search']="Life/search";
//$route['mail/(:any).html']="Life/sentmailauto/$1";
$route['switchLanguage/(:any)']="Life/switchLanguage/$1";
$route['about/(:any).html'] = "Life/abouturl/$1";
/*phan trang*/
$route['tintuc-sukien/tintucsukien/(:num)']="Life/sukienpage/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */