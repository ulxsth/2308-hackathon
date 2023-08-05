<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCreateQuiz</title>
</head>

<body>
    <?php
    include dirname(__FILE__) . '/../app/controller/QuizController.php';
    include dirname(__FILE__) . '/../app/controller/UserController.php';

    // テスト用のユーザデータを一時登録（存在する場合は作らない）
    $test_user_name = 'test_user';
    $test_user_password = 'test_password';
    try {
        UserController::signup($test_user_name, $test_user_password);
    } catch (Exception $e) {}

    // QuizControllerのcreateメソッドをテストする

    $title = 'test_title';
    $content = 'test_content';
    $description = 'test_description';
    $author_id = 7;
    try {
        QuizController::create($title, $content, $description, $author_id);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "success";
    ?>
</body>

</html>
