<?php

require_once './src/FileLogger.php';
require_once './src/DatabaseLogger.php';


$fileLogger = new FileLogger('./logs/app.log');
$fileLogger->log("This is a log message to the file.");


$databaseLogger = new DatabaseLogger();
$databaseLogger->log("This is a log message to the database.");
