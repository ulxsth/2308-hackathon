<?php
include dirname(__FILE__) . '/../dao/QuizDAO.php';

class QuizService {
    public static function create($title, $content, $description, $author_id) {
        $dao = new QuizDAO();
        return $dao->insert($title, $content, $description, $author_id);
    }

    public static function findByAuthorId($author_id) {
        $dao = new QuizDAO();
        return $dao->findByAuthorId($author_id);
    }
}
?>
