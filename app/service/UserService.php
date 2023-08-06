<?php
include dirname(__FILE__) . '/../dao/UserDAO.php';

/**
 * UserDAOとUserControllerの接続をするクラス
 */
class UserService {
    public static function signup($name, $password) {
        $dao = new UserDAO();

        // ユーザ名の重複チェック
        if (!is_null($dao->findByName($name))) {
            throw new Exception("$name is already exists.");
        }

        // パスワードのハッシュ化
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // ユーザ登録
        return $dao->insert($name, $password_hash);
    }


    public static function signin($name, $password) {
        $dao = new UserDAO();

        // ユーザ名で検索
        $user = $dao->findByName($name);
        if (is_null($user)) {
            throw new Exception("$name is not found.");
        }

        // パスワードの照合
        if (!password_verify($password, $user->getPasswordHash())) {
            throw new Exception("Password is invalid.");
        }

        // すでにセッション上に存在していないか確認
        $users = SessionService::getAllUser();
        if(in_array($user->getId(), $users)) {
            throw new Exception("$name is already signed in.");
        }

        // セッションにユーザIDを保存
        session_start();
        SessionService::set(session_id(), $user->getId());

        // ログイン後の画面にリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
    }

    public static function findByName($name) {
        $dao = new UserDAO();
        return $dao->findByName($name)->getId();
    }

    //ユーザデータを削除する
    public static function deleteById($name) {
        $dao = new UserDAO();
        return $dao->deleteById($name);
    }
}
?>
