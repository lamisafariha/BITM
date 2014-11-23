<?php
// initialize session
session_start();

if (isset($_POST) && !empty($_POST)) {

    // check if it is a data remove request
    if($_POST['remove'] == 'yes')
    {
        // erase data from session
        unset($_SESSION); // using unset
//        $_SESSION['username'] = ""; // update session data
        session_destroy();
    }

    $username = $_POST['username'];
    $age = $_POST['age'];

    // store data to session
    $_SESSION['username'] = $username;
    $_SESSION['age'] = $age;

    header('Location: session.php'); // redirect
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Authentication Using Session</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- stylesheets -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>

<?php
// check if the session has any value
if (!empty($_SESSION)) {
    ?>

    <div class="well">
        <p>My name is <?php echo $_SESSION['username']; ?></p>
        <p>My age is <?php echo $_SESSION['age']; ?></p>
    </div>

    <form action="" method="post">
        <input type="hidden" name="remove" value="yes"></input>
        <p>
            <button type="submit">Remove my data!</button>
        </p>
    </form>

<?php } else { ?>

    <form action="" method="post">
        <p>
            <label for="username">Username: </label>
            <input type="text" name="username"/>
        </p>

        <p>
            <label for="age">Age: </label>
            <input type="text" name="age"/>
        </p>

        <p>
            <button type="submit">Get my data!</button>
        </p>
    </form>

<?php } ?>

</body>
</html>