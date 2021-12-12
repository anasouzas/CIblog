<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/(:any)'] = 'posts_controller/view/$1';

$route['posts'] = 'posts_controller/index';

$route['default_controller'] = 'pages_controller/view';

$route['(:any)'] = 'pages_controller/view/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
