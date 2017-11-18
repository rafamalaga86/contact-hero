<?php

use \Phalcon\Db\Column as Column;

class ContactsController extends ControllerBase
{
    public function showAllAction()
    {
        $allContacts = Contacts::find();

        $this->view->setVar('flashMessage', $this->flashSession->output());
        $this->view->setVar('contacts', $allContacts->toArray());

        $this->view->pick('show-contacts');
    }

    public function newAction()
    {

        if ($this->request->isPost()) {
            if ($this->security->checkToken()) {
                // CSRF Token invalid
                
                $this->flashSession->error('CSRF Token invalid');
                return $this->response->redirect('contacts/showAll')->sendHeaders();
            } else {
                // CSRF Token invalid
                $this->flashSession->error('CSRF Token invalid');
                return $this->response->redirect('contacts/showAll')->sendHeaders();
            }
        } else {
            $this->view->setVar('csrf', [
                'name'  => $this->security->getTokenKey(),
                'token' => $this->security->getToken(),
            ]);
            $this->view->pick('new-contact');
        }
    }
}
