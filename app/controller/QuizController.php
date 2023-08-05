<?php
class QuizController {
    public static function create($title, $content, $description, $author_id) {
        // クイズ登録
        QuizService::create($title, $content, $description, $author_id);

        // トップにリダイレクト
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
    }
}
?>
