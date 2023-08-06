<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUserDelete</title>
</head>

<body>
    <?php
    include dirname(__FILE__) . '/../app/controller/UserController.php';

    // UserControllerのdeleteメソッドをテストする
    $name = 'test_user';
    UserController::deleteUserById($name);

    echo "success";
    ?>
</body>
</html>