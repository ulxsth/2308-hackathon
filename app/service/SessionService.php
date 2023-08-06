<?php
class SessionService {
    public static $sessionMap = array();

    public static function set($sessionId, $userId) {
        self::$sessionMap[$sessionId] = $userId;
    }

    public static function get($sessionId) {
        return self::$sessionMap[$sessionId];
    }

    public static function getAllUser() {
        return array_values(self::$sessionMap);
    }

    public static function abort($sessionId) {
        unset(self::$sessionMap[$sessionId]);
    }
}
?>
