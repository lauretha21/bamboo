<?php

define('LIBRARY_PATH', APP_PATH . DS . 'libraries');

// 1. sanitise (remove magic quotes, slashes, global vars)
// 2. do the routing - convert path into controller and action
// 3. autoload objects
// 4. error level/reporting

// include routes
$routes = array();
$routes['#^/$#i'] = array('controller' => 'home', 'action' => 'index');
$routes['#^/home$#i'] = array('controller' => 'home', 'action' => 'index');
$routes['#^/home/index$#i'] = array('controller' => 'home', 'action' => 'index');
$routes['#^/users$#i'] = array('controller' => 'users', 'action' => 'index');
$routes['#^/users/new$#i'] = array('controller' => 'users', 'action' => 'add');
$routes['#^users/create$#i'] = array('controller' => 'users', 'action' => 'create');
$routes['#^/users/([0-9]{1,5})$#i'] = array('controller' => 'users', 'action' => 'show');
$routes['#^/users/([0-9]{1,5})/edit$#i'] = array('controller' => 'users', 'action' => 'edit');
$routes['#^/users/([0-9]{1,5})/update$#i'] = array('controller' => 'users', 'action' => 'edit');

