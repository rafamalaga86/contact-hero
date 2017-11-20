<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\TextArea;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\PresenceOf;

class ContactForm extends Form
{
    public function initialize()
    {
        // Add hidden input preventing CSRF attacks
        $csrfInput = new Hidden('csrf');
        $csrfInput->addValidator(new Identical([
            'value' => $this->security->getSessionToken(),
            'message' => 'CSRF validation failed'
        ]));
        $csrfInput->clear();
        $this->add($csrfInput);

        // Add text inputs
        $firstNameInput = new Text('firstName');
        $firstNameInput->setFilters(['string', 'trim', 'striptags']); // Prevents XSS attacks
        $firstNameInput->addValidator(new PresenceOf(['message' => 'The first name is required']));
        $this->add($firstNameInput);

        $lastNameInput = new Text('lastName');
        $lastNameInput->setFilters(['string', 'trim', 'striptags']); // Prevents XSS attacks
        $lastNameInput->addValidator(new PresenceOf(['message' => 'The last name is required']));
        $this->add($lastNameInput);

        // Email is a input text field to be able to test validation
        // Normally it would be of type 'email'
        $emailInput = new Text('email');
        $emailInput->setFilters(['email', 'striptags']);
        $emailInput->addValidator(new Email(['message' => 'The e-mail is not valid']));
        $this->add($emailInput);

        $descriptionInput = new TextArea('description');
        $descriptionInput->setFilters(['string', 'trim', 'striptags']); // Prevents XSS attacks
        $this->add($descriptionInput);
    }
}
