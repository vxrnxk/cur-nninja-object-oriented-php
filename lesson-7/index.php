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

class AdminUser extends User
{
    public $level;

    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$userOne = new User("mario", "mario@email.com");
$userTwo = new User("luigi", "luigi@email.com");
$userThree = new AdminUser("yoshi", "yoshi@email.com", 5);

echo $userThree->username . "<br>";
echo $userThree->getEmail() . "<br>";
echo $userThree->level;

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
    </head>

    <body>
    </body>
</html>