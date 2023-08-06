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

    // QuizControllerのfetchQuizzezメソッドをテストする

    $author_id = 0;
    try {
        QuizController::fetchQuizzez($author_id);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "success";
    ?>
</body>

</html>
