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
}

$userOne = new User("mario", "mario@email.com");
$userTwo = new User("luigi", "luigi@email.com");

// $userOne->email = 3;

// echo $userOne->email . "<br>";
// echo $userTwo->email . "<br>";

echo $userOne->addFriend();

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
    </head>

    <body>
    </body>
</html>