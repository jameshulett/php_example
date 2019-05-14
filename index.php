<?php

    $name = $_GET['who'];

    if($name) {
        echo "Name in URL: $name";
    }
?>
<form>
    <input type="text" name="who" />
    <input type="submit" />
</form>