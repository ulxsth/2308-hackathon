<?php
    include '../controller/UserController.php';

    UserController::signup($_POST['register_id'], $_POST['register_pass']);

?>
