<?php
include dirname(__FILE__) . '/../service/UserService.php';

/**
 * ユーザ情報を扱うコントローラ。
 */
class UserController {
    /**
     * ログイン処理を行う。
     * @param string name ユーザ名
     * @param string password パスワード
     */
    public static function signup($name, $password) {
        // パスワードのハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // ユーザ登録
        UserService::signup($name, $password_hash);

        // トップにリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
    }

    /**
     * ユーザ名からidを取得する。存在しない場合はnullを返す
     * @param string name ユーザ名
     * @return int|null id
     */
    public static function findByName($name) {
        return UserService::findByName($name);
    }
}
?>
