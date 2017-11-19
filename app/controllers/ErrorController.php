<?php

use \Phalcon\Db\Column as Column;

class ErrorController extends ControllerBase
{
    public function showErrorAction($statusCode)
    {
        $this->view->setVar('statusCode', $statusCode);
        $this->view->pick('error');
    }
}
