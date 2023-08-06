<?php
include '/../dao/UserDAO.php';
include "../model/User.php";

/**
 * UserDAOとUserControllerの接続をするクラス
 */
class UserService {
    private $dao;

    public function __construct() {
        $this->dao = new UserDAO();
    }

    public static function signup($name, $password_hash) {
        // ユーザ名の重複チェック
        if (!is_null(self::$dao->findByName($name))) {
            throw new Exception("$name is already exists.");
        }

        // パスワードのハッシュ化
        $password_hash = password_hash($password_hash, PASSWORD_DEFAULT);

        // ユーザ登録
        return self::$dao->insert($name, $password_hash);
    }

    public static function findByName($name) {
        $dao = new UserDAO();

        return $dao->findByName($name)->getId();
    }
}
?>
