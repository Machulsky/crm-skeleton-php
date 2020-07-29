<?php

require_once APP_DIR."autoload.php";

require_once "vendor/autoload.php";

ini_set("display_errors", "On");
$app = new App\App();

$app->run();