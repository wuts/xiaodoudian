<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
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
| 	www.your-site.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://www.codeigniter.com/user_guide/general/routing.html
*/

$route['galleries/([a-zA-Z0-9_-]+)'] = "galleries/view/$1";

$route['photos'] = "galleries";
$route['photos/view'] = "galleries";
$route['photos/([a-zA-Z0-9_-]+)'] = "galleries/view/$1";
$route['galleries/photo/([a-zA-Z0-9_-]+)'] = "galleries/photo/view/$1";
$route['galleries/page/(:num)'] = "galleries/index/$1";
$route['galleries/([a-zA-Z0-9_-]+)/page/(:num)'] = "galleries/view/$1";
?>