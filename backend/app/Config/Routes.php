<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::showLandingPage');
$routes->get('/moodboard', 'Users::showMoodboard');

// Auth page
$routes->get('/login', 'Auth::showLoginPage');
$routes->get('/signup', 'Auth::showSignupPage');
