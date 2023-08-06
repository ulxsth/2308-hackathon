<?php
include dirname(__FILE__) . '/../dao/QuizDAO.php';

class QuizService {
    public static function create($title, $content, $description, $author_id) {
        $dao = new QuizDAO();
        return $dao->insert($title, $content, $description, $author_id);
    }

    public static function fetchQuizzez($author_id) {
        $dao = new QuizDAO();
        return $dao->fetchQuizzez($author_id);
    }
}
?>
