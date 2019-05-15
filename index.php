<?php
    namespace PHPGroup\HTTP;

    require __DIR__ . '/vendor/autoload.php';

    $presets = [
        'James',
        'Don',
        'Bob'
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Name Form</title>
    </head>
    <body>
        <h2>Presets</h2>
        <ul>
            <?php foreach($presets as $preset): ?>
                <li>
                    <a href="/?who=<?= $preset ?>">
                        <?= $preset ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h2><?= 'Name from form: '. handleName() ?></h2>
        <form method="POST">
            <input type="text" name="who" />
            <input type="submit" />
        </form>
    </body>
</html>