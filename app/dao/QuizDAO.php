<?php
include "../model/Quiz.php";

/**
 * Quizzesテーブルとのデータベース接続用クラス
 */
class QuizDAO {
    private static $pdo;

    public function __construct() {
        if (is_null(self::$pdo)) {
            self::$pdo = PDOFactory::create();
        }
    }

    /**
     * クイズを登録する
     * @param string $title
     * @param string $content
     * @param string $description
     * @param int $author_id
     * @return bool
     */
    public function insert($title, $content, $description, $author_id) {
        try {
            $sql = "INSERT INTO quizzes (title, content, description, author_id) VALUES (:title, :content, :description, :author_id)";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * クイズをidで検索する。存在しない場合はnullを返す
     * @param int $id
     * @return Quiz|null
     */
    public function findById($id) {
        try {
            $sql = "SELECT * FROM quizzes WHERE id = :id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $quiz = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($quiz === false) {
                return null;
            }
            return new Quiz($quiz['id'], $quiz['title'], $quiz['content'], $quiz['description'], $quiz['author_id'], $quiz['created_at'],);

        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }

    /**
     * 指定したユーザが作成したクイズを全て取得する
     * @param int $author_id
     * @return Quiz[]
     */
    public function fetchQuizzes($author_id) {
        try {
            $sql = "SELECT * FROM quizzes WHERE author_id = :author_id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
            $stmt->execute();
            $quizzes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $quiz_list = [];
            foreach ($quizzes as $quiz) {
                $quiz_list[] = new Quiz($quiz['id'], $quiz['title'], $quiz['content'], $quiz['description'], $quiz['author_id'], $quiz['created_at']);
            }
            return $quiz_list;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function deleteById($id) {
        try {
            $sql = "DELETE FROM quizzes WHERE id = :id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteByAuthorId($authorId) {
        try {
            $sql = "DELETE FROM quizzes WHERE author_id = :author_id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':author_id', $authorId, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>
