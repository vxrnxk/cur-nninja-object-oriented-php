<?php

class User
{
    public $username;
    public $email;

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

echo $userOne->username . "<br>" ;
echo $userOne->email . "<br>";
echo $userOne->addfriend() . "<br><br>";

echo $userTwo->username . "<br>" ;
echo $userTwo->email . "<br>";
echo $userTwo->addfriend() . "<br>";

// print_r(get_class_vars("User"));
// print_r(get_class_methods("User"));

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
    </head>

    <body>
    </body>
</html>