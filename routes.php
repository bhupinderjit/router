<?php
// Defines routes to be added to the router instance (by request type).

// GET Route(s):
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
// POST Route(s):
$router->post('names', 'controllers/add-name.php');