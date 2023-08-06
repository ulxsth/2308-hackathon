<?php
include dirname(__FILE__) . '/../service/QuizService.php';

class QuizController {
    public static function create($title, $content, $description, $author_id) {
        // クイズ登録
        if(!QuizService::create($title, $content, $description, $author_id)) {
            throw new Exception("Failed to create quiz.");
        }

        // トップにリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
    }

    public static function fetchQuizzez($author_id) {
        return QuizService::findByAuthorId($author_id);
    }



}
?>
