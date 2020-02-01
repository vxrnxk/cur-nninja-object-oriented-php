<?php

class User
{
    public $username;
    private $email;
    public $role = 'member';

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->username added a new friend";
    }

    public function message()
    {
    	return "$this->email sent a new message";
    }

    //getters
    public function getEmail()
    {
        return $this->email;
    }

    //setters
    public function setEmail($email)
    {
        if(strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

class AdminUser extends User
{
    public $level;
    public $role = 'admin';

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }

    public function message()
    {
    	return "$this->email, and admin sent a new message";
    }
}

$userOne = new User("mario", "mario@email.com");
$userTwo = new User("luigi", "luigi@email.com");
$userThree = new AdminUser("yoshi", "yoshi@email.com", 5);

echo $userOne->role . "<br>";
echo $userThree->role . "<br>";

echo $userOne->message() . "<br>";
echo $userThree->message();

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
    </head>

    <body>
    </body>
</html>