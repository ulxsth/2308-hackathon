<?php
    include dirname(__FILE__) . '/../service/UserController.php';

    UserController::signup($_POST['register_id'], $_POST['register_pass']);
?>
