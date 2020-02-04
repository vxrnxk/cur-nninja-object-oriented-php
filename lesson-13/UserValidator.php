<?php

class UserValiator
{
    private $data;
    private $errors = [];
    private static $fields = ['usrenme', 'email'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm()
    {
        foreach(self::$fields as $field) {
            if(array_key_exists($field, $this->$data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }

        $this->validateUsername();
        $this->validadEmail();
        return $this->errors;
    }

    private function validateUsername()
    {
        $val = trim($this->data['username']);
        
        if(empty($val)) {
            $this->addError('username', 'username cannot be empty');
        } else {
            if(!preg_match('/^[a-za-Z0-9]{6,12}$/', $val)) {
                $this->addError('username', 'username must be 6-12 chars & alphanumeric');
            }
        }
    }

    private function validadEmail()
    {
        $val = trim($this->data['email']);

        if(empty($val)) {
            $this->addError('email', 'email cannot be empty');
        } else {
            if(filter_var($val, FILTER_VALIDADE_EMAIL)) {
                $this->addError('email', 'email must be a valid email');
            }
        }
    }

    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}