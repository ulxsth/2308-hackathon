<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFindByName</title>
</head>
<body>
    <?php
    include("../app/controller/UserController.php");

    // UserController::findByNameのテスト
    $userId = UserController::findByName('testuser');
    echo $userId;
    ?>
</body>
</html>
