<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Webpage Route (Dynamic)
$route['test'] = 'portals/test';

//========================================================================>
//Student Portal Routes
$route['portals/dashboard'] = 'portals/view';
$route['portals/grade'] = 'portals/viewgrades';
$route['portals/enrollment'] = 'portals/viewenrollment';
$route['portals/schedule'] = 'portals/viewschedule';
$route['portals/account'] = 'portals/viewaccount';
$route['portals/payment'] = 'portals/viewpayment';
$route['portals/maintenance'] = 'portals/viewmaintenance';
$route['login'] = 'portals/login';
$route['accountsetupview'] = 'portals/accountsetupview';
$route['accountsetup'] = 'portals/accountsetup';
$route['logout'] = 'portals/logout';

//========================================================================>
//Registrar Routes
$route['registrar/login'] = 'registrars/login';
$route['registrar/studentlist'] = 'registrars/viewstudentlist';
$route['registrar/logout'] = 'registrars/logout';

//========================================================================>
//Faculty Routes
$route['faculties/login'] = 'faculties/loginfaculty';
$route['faculty/logout'] = 'faculties/logoutfaculty';
$route['faculty/dashboard'] = 'faculties/profile';
$route['faculty/subjects'] = 'faculties/subjects';
$route['faculty/maintenance'] = 'faculties/maintenance';

//Registrar Routes
$route['registrars/create'] = 'registrars/createstudentview';
$route['registrars/docreate'] = 'registrars/docreate';
//========================================================================>

//Admission Routes
$route['admission/addstudent'] = 'admissions/viewcreatestudent';
$route['admission/create'] = 'admissions/createstudent';
$route['admission/activatestudent'] = 'admissions/viewpendingstudent';

$route['(:any)'] = 'webpages/view/$1';
$route['default_controller'] = 'webpages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;