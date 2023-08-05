<?php
include dirname(__FILE__) . '/../dao/UserDAO.php';

/**
 * UserDAOとUserControllerの接続をするクラス
 */
class UserService {
    public static function signup($name, $password_hash) {
        $dao = new UserDAO();
        // ユーザ名の重複チェック
        if (!is_null($dao->findByName($name))) {
            throw new Exception("$name is already exists.");
        }

        // パスワードのハッシュ化
        $password_hash = password_hash($password_hash, PASSWORD_DEFAULT);

        // ユーザ登録
        return $dao->insert($name, $password_hash);
    }
}
?>
