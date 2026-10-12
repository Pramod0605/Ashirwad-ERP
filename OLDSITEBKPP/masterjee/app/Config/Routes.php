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

$routes->get('/admin/staff/leads', 'Admin\Staff::leads');
$routes->post('/admin/staff/leads', 'Admin\Staff::leads');
$routes->get('/admin/staff/missed', 'Admin\Staff::missed_followup');