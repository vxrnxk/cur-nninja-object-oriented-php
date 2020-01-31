<?php

class User
{
    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->username added a new friend";
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

$userOne = new User("mario", "mario@email.com");
$userTwo = new User("luigi", "luigi@email.com");

// $userOne->email = 3;

// echo $userOne->email . "<br>";
// echo $userTwo->email . "<br>";

$userOne->setEmail('email1@mail.com');
$userTwo->setEmail('email2@mail.com');

echo $userOne->getEmail() . "<br>";
echo $userTwo->getEmail();

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
    </head>

    <body>
    </body>
</html>