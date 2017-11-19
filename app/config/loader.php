<?php

$loader = new \Phalcon\Loader();

// Register some classes
$loader->registerClasses(
    [
        "ContactForm" => __DIR__ . "/../library/ContactForm.php",
    ]
);
/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();
