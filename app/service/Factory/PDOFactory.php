<?php
/**
 * PDOを生成するファクトリクラス。
 */
class PDOFactory {
    const SERVER = "localhost";
    const DBNAME = "thinker";
    const CHARSET = "utf8";
    const USER = "testuser";
    const PASSWORD = "test_password";

    const DSN = "mysql:host=" . self::SERVER . ";dbname=" . self::DBNAME . ";charset=" . self::CHARSET;

    /**
     * PDOを生成する。
     * @return PDO
     */
    public static function create() {
        $pdo = new PDO(self::DSN, self::USER, self::PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
