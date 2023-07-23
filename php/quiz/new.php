<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/Thinker/stylesheets/new.css">
        <title>Thinker</title>
    </head>
    <body>
        <div class="operation-screen">
        <form action="created.php" method="post">
        <h1>クイズ作成</h1>
        <div class="quiz-name form-content">
            <label for="title" class="quiz-mei">クイズ名</label><br>
            <input type="text" name="title" class="quiz-text"><br>
        </div>
        <div class="problem form-content">
            <label for="content" class="content-mei">問題文</label><br>
            <input type="text" name="content" class="content-text"><br>
        </div>
        <div class="choice">
            <label for="choices[]">選択肢</label><br>
            1<input type="text" name="choices[]"><br>
            2<input type="text" name="choices[]"><br>
            3<input type="text" name="choices[]"><br>
            4<input type="text" name="choices[]"><br>
        </div>  
        <div class="correct">
            <label for="answer">正解</label><br>
            <input type="text" name="answer"><br>
        </div>
        <div class="problem-explanation">
            <label for="explanation">解説</label><br>
            <textarea name="explanation" placeholder="問題に関する解説を入力してください"></textarea><br>
        </div>
        <input type="submit" value="確定" class="submit-button">
        <input type="reset" value="リセット" class="reset-button">
        </form>
    </body>
</html>
