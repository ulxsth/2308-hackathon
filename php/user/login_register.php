<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../stylesheets/user/login_register.css">
        <title>ログイン・新規登録画面</title>
    </head>
    <body>
        <h1>ログイン</h1>
        <div class="login">
        <form action="login.php" method="POST">
            <label for="id" class="form-label">ユーザーID</label><br>
            <input type="text" name="id" class="form-input">
            <div class="error login-id-error">


            </div>
            <label for="passward" class="form-label"><br>パスワード<br>
            <input type="text" name="passward" class="form-input"><br>
            <div class="error login-pass-error">


            </div>
            <input type="button" value="ログイン" class="button-input">
        </form>
        </div>

        <h1>新規登録</h1>
        <div class="register">
        <form action="login.php" method="POST">
        <label for="id" class="form-label">ユーザーID</label><br>
        <div class="error register-id-error">


        </div>
        <input type="text" name="id" class="form-input">
        <label for="passward" class="form-label"><br>パスワード</label><br>
        <div class="error register-pass-error">


        </div>
        <input type="text" name="passward" class="form-input">
        <label for="passward_confirm" class="form-label"><br>パスワード(確認)</label><br>
        <div class="error register-pass_confirm-error">


        </div>
        <input type="text" name="passward_confirm" class="form-input"><br>
            <input type="button" value="新規登録" class="button-input">
        </div>
        </form>
    </body>
</html>
