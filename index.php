<?php
    function handleName() {
        $name = $_REQUEST['who'];
        if ($name) {
            return $name;
        } else {
            return 'No one you know...';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Name Form</title>
    </head>
    <body>
        <h2><?= 'Name from form: '. handleName() ?></h2>
        <form method="POST">
            <input type="text" name="who" />
            <input type="submit" />
        </form>
    </body>
</html>