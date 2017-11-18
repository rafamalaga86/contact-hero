<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
    "/",
    [
        "controller" => "contacts",
        "action"     => "showAll"
    ]
);

$router->add(
    "/contacts/new",
    [
        "controller" => "contacts",
        "action"     => "new"
    ]
);

$router->handle();
