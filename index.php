<?php
    namespace PHPGroup\HTTP;

    require __DIR__ . '/vendor/autoload.php';

    use PHPGroup\HTTP\HandleName;

    $presets = [
        'James',
        'Don',
        'Bob'
    ];

    $name = HandleName::handleName();

    require 'views/index.php';
