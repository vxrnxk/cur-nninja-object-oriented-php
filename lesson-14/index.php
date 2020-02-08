<?php

require 'UserValidator.php';

if(isset($_POST['submit'])) {
   $validation = new UserValidator($_POST);
   $errors = $validation->validateForm();
}

?>

<html>
    <head>
        <title>PHP OOP Tutorial</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>

        <div class="new-user">
            <h2>Create new user</h2>
            
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                <label>Username:</label>
                <input type="text" name="username">
                <div class="error">
                    <?php echo $errors['username'] ?? '' ?>
                </div>

                <label>Email:</label>
                <input type="text" name="email">
                <div class="error">
                    <?php echo $errors['email'] ?? '' ?>
                </div>

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </body>
</html>