<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Thinker/assets/stylesheets/user/login_register.css">
    <title>ログイン・新規登録画面</title>
</head>

<body>
    <div class="contents-container">
        <h1>ログイン</h1>
        <div class="login">
            <form action="/thinker/app/actions/login.php"  method="POST" id="loginForm">
                <div class="form-component">
                    <label for="id" class="form-label">ユーザーID</label>
                    <input type="text" id ="login_id" name="login_id" class="form-input" required>
                </div>
                <div id="loginIdErrorMessages"></div>
                <div class="form-component">
                    <label for="passward" class="form-label">パスワード</label>
                    <input type="password" id ="login_pass" name="login_pass" class="form-input" required>
                </div>
                <div id="loginPassErrorMessages"></div>
                <button type="submit" class="button-input">ログイン</button>
            </form>
        </div>

        <hr>

        <h1>新規登録</h1>
        <div class="register">
            <form action="login.php" method="POST" id="registerForm">
                <div class="form-component">
                    <label for="id" class="form-label">ユーザーID</label>
                    <input type="text" id ="register_id" name="register_id" class="form-input" required>
                </div>
                <div id="registerIdErrorMessages"></div>
                <div class="form-component">
                    <label for="passward" class="form-label">パスワード</label>
                    <input type="password" id ="register_pass" name="register_pass" class="form-input" required>
                </div>
                <div id="registerPassErrorMessages"></div>
                <div class="form-component">
                    <label for="passward_confirm" class="form-label">パスワード(確認)</label>
                    <input type="password" id ="passconfirm" name="register_password_confirm" class="form-input" required>
                </div>
                <div id="registerPassConfirmErrorMessages"></div>
                <button type="submit" class="button-input">新規登録</button>
        </form>
        <script src="/Thinker/app/js/validate/validate-login_register.js"></script>
</body>

</html>
