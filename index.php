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