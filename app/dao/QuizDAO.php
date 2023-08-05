<?php
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
}
?>
