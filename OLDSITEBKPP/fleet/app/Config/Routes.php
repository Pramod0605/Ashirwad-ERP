<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

$routes->get('/admin/dashboard', 'Admin\Dashboard::index');
$routes->get('/admin/staff/student_attendance', 'Admin\Staff::student_attendance');
$routes->post('/admin/student_attendance', 'Admin\Staff::student_attendance');

$routes->get('/admin/staff/geofencing', 'Admin\Staff::geofencing');
$routes->post('/admin/staff/geofencing', 'Admin\Staff::geofencing');