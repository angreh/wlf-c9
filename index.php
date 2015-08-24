<?php

require 'vendor/aCoisa/Core/AutoLoader_Core.php';

define('SYSTEM_PATH', $_SERVER['DOCUMENT_ROOT'] . '/vendor/aCoisa/Core/');
define('APP_PATH', $_SERVER['DOCUMENT_ROOT'] . '/app/');

AutoLoader_Core::getInstance()->register();
Bootstrap_Core::init();
