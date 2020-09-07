
<?php
require 'vendor/autoload.php';
$database = require 'core/bootstrap.php';

// Load routes into a router instance, and then direct traffic to
// the controllers associated with a URI based on the request method:
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());