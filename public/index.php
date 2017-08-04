<?php

use RescueCore\Core\Route;

$rootDir = __DIR__ . '/..';
require $rootDir . '/vendor/autoload.php';
RescueCore\Core\Bootstrap::init();

Route::match('/styleguide([/a-zA-Z0-9_-]+)*', function ($segments, $routePath) {
    $scripts = [
        '<script src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>',
        '<script src="https://use.fontawesome.com/b9c1035ab3.js"></script>',
        '<script src="/assets/js/scripts.js"></script>',
        '<script src="https://s3-us-west-1.amazonaws.com/rescue-web-services/prism.js"></script>'
    ];
    $styles  = [
        '<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">',
        '<link href="/assets/css/app.css" rel="stylesheet"/>',
        '<link href="https://s3-us-west-1.amazonaws.com/rescue-web-services/prism.css" rel="stylesheet">',
    ];

    $styleGuide = new StyleGuide([
        'base' => 'styleguide',
        'scripts' => $scripts,
        'styles'  => $styles
    ]);
    echo $styleGuide->render($segments, $routePath);
    exit;
});
