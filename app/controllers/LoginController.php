<?php

class LoginController extends BaseController {



    public function index()
    {
        if(!Auth::check())
        {
            return View::make('login.index');
        }
        else
        {
            return View::make('login.loggedin');
        }

    }

    public function postAction()
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' 	=> Input::get('email'),
                'password' 	=> Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                echo 'SUCCESS!';

            } else {

                // validation not successful, send back to form
                return Redirect::to('login');

            }

        }
    }

}
