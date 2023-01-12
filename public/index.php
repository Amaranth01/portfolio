<?php

use App\Routing;
use Symfony\Component\ErrorHandler\Debug;

require '../Routing.php';
require '../vendor/autoload.php';
session_start();

Debug::enable();
Routing::route();