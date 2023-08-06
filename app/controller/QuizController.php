<?php
include dirname(__FILE__) . '/../service/QuizService.php';

class QuizController {
    public static function create($title, $content, $description, $author_id) {
        // クイズ登録
        if(!QuizService::create($title, $content, $description, $author_id)) {
            throw new Exception("Failed to create quiz.");
        }
    }

    public static function fetchQuizzes($author_id) {
        return QuizService::fetchQuizzes($author_id);
    }

    public static function deleteByQuizId($quizId) {
        if(!QuizService::deleteByQuizId($quizId)) {
            throw new Exception("Failed to delete quiz.");
        }
    }
}
?>
