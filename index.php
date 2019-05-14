<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Name Form</title>
    </head>
    <body>

<?php
    function handleName() {
        $name = $_REQUEST['who'];
        if ($name) {
            return $name;
        } else {
            return 'No one you know...';
        }
    }
    echo 'Name from form: ' . handleName();
?>
        <form method="POST">
            <input type="text" name="who" />
            <input type="submit" />
        </form>
    </body>
</html>