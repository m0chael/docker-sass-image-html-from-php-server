<?php

require 'env-config.php'; # mockup env file which lists variables and included in .gitignore

var_dump("$APP_ENV is from the ENV file. Running from docker with php!");

exec("php -S 0.0.0.0:8080");

?>