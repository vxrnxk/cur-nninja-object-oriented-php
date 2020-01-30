<?php

class User {

    public $username = "franciscov";
    public $email = "franciscov@email.com";

    public function addFriend() {
        return "$this->username added a new friend";
    }

}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . "<br>" ;
echo $userOne->email . "<br>";
echo $userOne->addfriend() . "<br><br>";

$userTwo->username = "Yoshi";
$userTwo->email = "yoshi@email.com";

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