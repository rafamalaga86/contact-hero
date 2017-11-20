<?php

$di->set('router', function () {

    // Deactivate default routes
    $router = new \Phalcon\Mvc\Router(false);

    // Handle 404
    $router->notFound([
        'controller' => 'error',
        'action' => 'showError',
        'params' => '404',
    ]);

    $router->add('/', [
        'controller' => 'contacts',
        'action'     => 'showAll',
    ]);

    $router->add('/contacts/new', [
        'controller' => 'contacts',
        'action'     => 'new',
    ]);

    $router->add('/contacts/:int', [
        'controller' => 'contacts',
        'action'     => 'update',
        'params'     => 1,
    ]);

    $router->addDelete('/contacts/:int', [
        'controller' => 'contacts',
        'action'     => 'delete',
        'params'     => 1,
    ]);

    return $router;
});
