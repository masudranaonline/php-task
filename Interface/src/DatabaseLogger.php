<?php

require_once 'LoggerInterface.php';

class DatabaseLogger implements LoggerInterface {

    public function log($message) {
        echo "Database log entry: " . $message . "\n";
    }
}
