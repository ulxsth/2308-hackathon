<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSignup</title>
</head>

<body>
    <?php
    include dirname(__FILE__) . '/../app/controller/UserController.php';

    // UserControllerのsignupメソッドをテストする
    $name = 'test_user';
    $password = 'test_password';
    UserController::signup($name, $password);

    echo "success";
    ?>
</body>

</html>
