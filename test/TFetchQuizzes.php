<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFetchquizzez</title>
</head>

<body>
    <?php
    include dirname(__FILE__) . '/../app/controller/QuizController.php';
    include dirname(__FILE__) . '/../app/controller/UserController.php';

    // テストユーザを作成
    $name = "test_fetch_quizzes";
    $password = "test_fetch_quizzes";
    UserController::signup($name, $password);

    // テストユーザのIDを取得
    $userId = UserController::findByName($name);

    // テスト用のクイズデータをいくつか生成（ある場合は作らない）
   QuizController::create("test1", "test_data", "test_data", $userId);
   QuizController::create("test2", "test_data", "test_data", $userId);
   QuizController::create("test3", "test_data", "test_data", $userId);

    // QuizControllerのfetchQuizzesメソッドをテストする
    try {
        $quizzes = QuizController::fetchQuizzes($author_id);
        foreach ($quizzes as $quiz) {
            echo $quiz->title . "<br>";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        // テストデータを削除
        QuizController::deleteByAuthorId($userId);

        // テストユーザを削除
        UserController::delete($userId);
    }

    echo "success";
    ?>
</body>

</html>