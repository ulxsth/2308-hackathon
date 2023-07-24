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
            <div class="form-component">
            <label for="id" class="form-label">ユーザーID</label><br>
            <input type="text" name="id" class="form-input">
            <div class="error login-id-error">
            エラー文

            </div>
            </div>
            <br>
            <div class="form-component">
            <label for="passward" class="form-label">パスワード</label><br>
            <input type="text" name="passward" class="form-input">
            <div class="error login-pass-error">
            エラー文

            </div>
            </div>
            <button type="submit" class="button-input">ログイン</button>
        </form>
        </div>

        <hr>

        <h1>新規登録</h1>
        <div class="register">
        <form action="login.php" method="POST">
        <div class="form-component">
        <label for="id" class="form-label">ユーザーID</label><br>
        <input type="text" name="id" class="form-input">
        <div class="error register-id-error">
        エラー文

        </div>
        </div>
        <br>
        <div class="form-component">
        <label for="passward" class="form-label">パスワード</label><br>
        <input type="text" name="passward" class="form-input">
        <div class="error register-id-error">
        エラー文

        </div>
        </div>
        <br>
        <div class="form-component">
        <label for="passward_confirm" class="form-label">パスワード(確認)</label><br>
        <input type="text" name="passward_confirm" class="form-input">
        <div class="error register-id-error">
        エラー文

        </div>
        </div>
        <button type="submit" class="button-input">新規登録</button>
        </form>
        </div>
    </body>
</html>
