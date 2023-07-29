<?php
/**
 * Userテーブルとのデータベース接続用クラス
 */
class UserDAO {
    private $pdo = PDOFactory::create();

    /**
     * ユーザ情報を登録する。
     *
     * @param string $name ユーザ名
     * @param string $password_hash パスワードのハッシュ値
     */
    public function insert($name, $password_hash){
        try {
            $sql = "INSERT INTO user (name, password_hash) VALUES (:name, :password_hash)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':password_hash', $password_hash, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
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
            $sql = "SELECT * FROM user WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
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
     * ユーザデータを更新する。
     * ユーザidが存在しない場合は何もしない。
     */
    public function update(User $user){
        try {
            $sql = <<<EOT
            UPDATE user SET
            name = :name,
            description = :description,
            password_hash = :password_hash
            WHERE id = :id"
            EOT;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':name', $user->getName(), PDO::PARAM_STR);
            $stmt->bindValue(':description', $user->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
?>
