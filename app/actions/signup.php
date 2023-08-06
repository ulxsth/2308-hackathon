<?php
    include '../controller/UserController.php';

    UserController::signup($_POST['register_id'], $_POST['register_pass']);
    
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/thinker/app/view/top.php');
?>
