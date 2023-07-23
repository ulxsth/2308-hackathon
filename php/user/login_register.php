<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/Thinker/stylesheets/user/login_register.css">
        <title>ログイン・新規登録画面</title>
    </head>
    <body>
        <div class="all">
        <h1>ログイン</h1>
        <div class="login">
        <form action="login.php" method="POST">
            <label for="id" class="form-label">ユーザーID</label><br>
            <input type="text" name="id" class="form-input">
            <div class="error login-id-error">


            </div>
            <br><label for="passward" class="form-label">パスワード<br>
            <input type="text" name="passward" class="form-input"><br>
            <div class="error login-pass-error">


            </div>
            <input type="button" value="ログイン" class="button-input">
        </form>
        </div>

        <hr>

        <h1>新規登録</h1>
        <div class="register">
        <form action="login.php" method="POST">
        <label for="id" class="form-label">ユーザーID</label><br>
        <div class="error register-id-error">


        </div>
        <input type="text" name="id" class="form-input">
        <br><label for="passward" class="form-label">パスワード</label><br>
        <div class="error register-pass-error">


        </div>
        <input type="text" name="passward" class="form-input">
        <br><label for="passward_confirm" class="form-label">パスワード(確認)</label><br>
        <div class="error register-pass_confirm-error">


        </div>
        <input type="text" name="passward_confirm" class="form-input"><br>
            <input type="button" value="新規登録" class="button-input">
        </form>
        </div>
    </body>
</html>
