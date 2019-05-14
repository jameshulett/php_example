<?php

    $name = $_REQUEST['who'];

    if($name) {
        echo "Name in URL: $name";
    }
?>
<form method="POST">
    <input type="text" name="who" />
    <input type="submit" />
</form>