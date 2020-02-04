<?php

if(isset($_POST['submit']))
    echo "form submitted";
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

                <label>Email:</label>
                <input type="text" name="email">

                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </body>
</html>