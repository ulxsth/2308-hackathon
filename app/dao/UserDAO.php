<?php
include dirname(__FILE__) . '/../model/User.php';
include dirname(__FILE__) . '/../service/factory/PDOFactory.php';

/**
 * Usersテーブルとのデータベース接続用クラス
 */
class UserDAO {
    private static $pdo;

    public function __construct() {
        if (is_null(self::$pdo)) {
            self::$pdo = PDOFactory::create();
        }
    }

    /**
     * ユーザ情報を登録する。
     *
     * @param string $name ユーザ名
     * @param string $password_hash パスワードのハッシュ値
     * @return bool 登録に成功した場合はtrue、失敗した場合はfalse
     */
    public function insert($name, $password_hash){
        try {
            $sql = "INSERT INTO users (name, password_hash) VALUES (:name, :password_hash)";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':password_hash', $password_hash, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * ユーザidからユーザ情報を取得する。
     * 存在しない場合はnullを返す。
     *
     * @param int $id ユーザid
     * @return User|null ユーザ情報
     */
    public function findById($id){
        try {
            $sql = "SELECT * FROM users WHERE id = :id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) {
                return null;
            }
            return new User($row['id'], $row['name'], $row['password_hash'], $row['description'], $row['signup_date']);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    /**
     * ユーザ名からユーザ情報を取得する。
     * 存在しない場合はnullを返す。
     *
     * @param string $name ユーザ名
     * @return User|null ユーザ情報
     */
    public function findByName($name) {
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) {
                return null;
            }
            return new User($row['id'], $row['name'], $row['password_hash'], $row['description'], $row['signup_date']);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    /**
     * ユーザデータを更新する。
     * ユーザidが存在しない場合は何もしない。
     */
    public function update(User $user){
        try {
            $sql = <<<EOT
            UPDATE users SET
            name = :name,
            description = :description,
            password_hash = :password_hash
            WHERE id = :id"
            EOT;
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
            $stmt->bindValue(':description', $user->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

    }
    /**
     * ユーザデータを削除する。
     * ユーザidが存在しない場合は何もしない。
     */
    public function deleteById(User $user){
        try {
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = self::$pdo->prepare($sql);
            $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
?>