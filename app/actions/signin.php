<?php
include '../controller/UserController.php';

UserController::signin($_POST['login_id'], $_POST['login_pass']);

// ログイン後の画面にリダイレクト
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
?>
