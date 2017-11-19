<?php

use \Phalcon\Db\Column as Column;

class ContactsController extends ControllerBase
{
    public function showAllAction()
    {
        $allContacts = Contacts::find();

        $this->view->setVar('contacts', $allContacts->toArray());
        $this->view->pick('show-contacts');
    }

    public function newAction()
    {
        $form = new ContactForm();
        if ($this->request->isPost() && $form->isValid($this->request->getPost())) {
            // Create model
            $contact = new Contacts($this->request->getPost());
            // Assign an image at random
            $contact->picture = rand(1, 20) . '.png';

            if ($contact->create()) {
                $this->flashSession->success('Great, a new contact was created!');
            } else {
                $this->flashSession->error('Hmmmm, something went wrong.');
            }
        }
        // Send posted data errors back if they exists
        foreach ($form->getMessages() as $message) {
            $this->flashSession->error($message);
        }

        $this->view->setVar('form', $form);
        $this->view->pick('add-contact');
    }

    public function updateAction($contactId)
    {
        $contact = Contacts::findFirst($contactId);
        if (!$contact) {
            $this->dispatcher->forward(
                [
                "controller" => "error",
                "action"     => "showError",
                "params"     => [404]
                ]
            );
        }
        $this->view->setVar('form', $form);
        $this->view->pick('update-contact');
    }

    // This will be only accessed with ajax
    public function deleteAction($contactId)
    {
        $contact = Contacts::findFirst($contactId);
        if ($contact && $contact->delete()) {
            $this->response->setStatusCode(200, "OK");
        } else {
            $this->response->setStatusCode(404, "Resource not found");
        }
    }
}
