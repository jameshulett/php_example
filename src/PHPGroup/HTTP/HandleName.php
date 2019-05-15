<?php
    namespace PHPGroup\HTTP;

    class HandleName {

        static function handleName() {
            $name = filter_var($_REQUEST['who'], FILTER_SANITIZE_STRING);
            if ($name) {
                return $name;
            } else {
                return 'No one you know...';
            }
        }
        
    }