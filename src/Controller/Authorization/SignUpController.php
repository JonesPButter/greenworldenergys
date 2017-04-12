<?php

namespace Source\Controller\Authorization;

use Respect\Validation\Validator as Validator;
use Source\Controller\AbstractController;

class SignUpController extends AbstractController {

    /**
     * This is the index of the registration process,
     * which shows the registration form.
     */
    public function getRegistration($request, $response) {
        return $this->view->render($response, '@authorization/signup.twig');
    }

    /**
     * This function receives the data, typed in and submitted by the user
     * at the signup.twig-view.
     */
    public function postRegistration($request, $response) {
        die("The postRegistration functionality has to be implemented");
    }
}