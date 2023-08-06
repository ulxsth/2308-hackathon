<?php
include dirname(__FILE__) . '/../dao/QuizDAO.php';

class QuizService {
    public static function create($title, $content, $description, $author_id) {
        $dao = new QuizDAO();
        return $dao->insert($title, $content, $description, $author_id);
    }

    public static function fetchQuizzes($author_id) {
        $dao = new QuizDAO();
        return $dao->fetchQuizzes($author_id);
    }

    public static function deleteByQuizId($quiz_id) {
        $dao = new QuizDAO();
        return $dao->deleteById($quiz_id);
    }

    public static function deleteByAuthorId($author_id) {
        $dao = new QuizDAO();
        return $dao->deleteByAuthorId($author_id);
    }
}
?>
