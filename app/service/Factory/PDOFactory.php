<?php
/**
 * PDOを生成するファクトリクラス。
 */
class PDOFactory {
    const SERVER = "localhost";
    const DBNAME = "thinker";
    const USER = "test_user";
    const PASSWORD = "test_password";

    const DSN = "mysql:host=" . self::SERVER . ";dbname=" . self::DBNAME . ";charset=utf8";

    /**
     * PDOを生成する。
     * @return PDO
     */
    public static function create() {
        try {
            $pdo = new PDO(self::DSN, self::USER, self::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
