<?php
include dirname(__FILE__) . '/../service/UserService.php';
include dirname(__FILE__) . '/../service/factory/PDOFactory.php';

/**
 * ユーザ情報を扱うコントローラ。
 */
class UserController {
    public static function signup($name, $password) {
        // パスワードのハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // ユーザ登録
        UserService::signup($name, $password_hash);

        // ログイン画面にリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/user/login_register.php');
    }

    /**
     * ユーザの名前からIDを取得する
     */
    public static function getUserIdByName($name) {
        $pdo = PDOFactory::create();
        $sql = "SELECT id FROM users WHERE name = '$name'";
        $result = $pdo->query($sql);

        //結果を表示する連想配列形式で取得
        $row = $result->fetch(PDO::FETCH_ASSOC);
    }
}
?>
