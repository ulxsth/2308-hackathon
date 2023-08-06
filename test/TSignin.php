<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSignin</title>
</head>

<body>
    <?php
    include ('../app/controller/UserController.php');
    include ('../app/service/SessionService.php');

    // 先にsessionを削除
    session_abort();
    SessionService::abort(session_id());

    // 先にテストユーザを登録
    $name = 'test_user_signin';
    $password = 'test_password_signin';
    UserController::signup($name, $password);

    // テストユーザのデータを取得しておく
    $userId = UserController::findByName($name);

    // UserController::signinのテスト
    try {
        UserController::signin($name, $password);
        echo 'テスト成功';
        echo "sessionid: " . session_id() . "<br>";

    } catch (Exception $e) {
        echo 'テスト失敗';
        echo $e->getMessage();

    } finally {
        // テストユーザを削除
        UserController::deleteById($userId);
    }
    ?>
</body>

</html>
