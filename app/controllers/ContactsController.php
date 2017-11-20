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
            $dataContact = $this->request->getPost();
            // Asign a 'Now'
            $dataContact['createdAt'] = (new \DateTime())->format('Y-m-d H:i:s');
            // Assign an image at random
            $dataContact['picture'] = rand(1, 20) . '.png';
            $contact = new Contacts($dataContact);

            if ($contact->create()) {
                $this->flashSession->success('Great, a new contact was created!');
                return $this->response->redirect(); // Redirects to home
            }
            // This are internal errors not meant for users, lets log them instead
            foreach ($contact->getMessages() as $message) {
                $this->logger->error($message->getMessage());
            }
            $this->flashSession->error('We are really sorry, something went wrong...');
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

        // Not found. Interrupt with 404
        if (!$contact) {
            return $this->dispatcher->forward([
                "controller" => "error",
                "action"     => "showError",
                "params"     => [404]
                
            ]);
        }

        $form = new ContactForm();
        if ($this->request->isPost() && $form->isValid($this->request->getPost())) {
            // POST ONLY

            if ($contact->update($this->request->getPost())) {
                $this->flashSession->success('Great, the contact was updated!');
                return $this->response->redirect(); // Redirects to home
            }
            // This are internal errors not meant for users, lets log them instead
            foreach ($contact->getMessages() as $message) {
                $this->logger->error($message->getMessage());
            }
            $this->flashSession->error('We are really sorry, something went wrong...');
        }

        // Send posted data errors back if they exists
        foreach ($form->getMessages() as $message) {
            $this->flashSession->error($message);
        }
        $form = new ContactForm($contact);

        $this->view->setVars([
            'contact'   => $contact,
            'form' => $form,
        ]);
        $this->view->pick('update-contact');
    }


    // This can be only accessed with ajax and the responses are though that way
    public function deleteAction($contactId)
    {
        $contact = Contacts::findFirst($contactId);
        if ($contact && $contact->delete()) {
            $this->response->setStatusCode(200, 'OK');
        } else {
            $this->response->setStatusCode(404, 'Resource not found');
        }
    }
}
