<?php require_once "includes/prolog.inc.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIT</title>
</head>
<body>
    <div class="task-list">
        <?php Application::includeComponent("tasklist") ?>
    </div>
</body>
</html>