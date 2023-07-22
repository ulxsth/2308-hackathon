<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Thinker</title>
    </head>
    <body>
        <form action="created.php" method="post">
        <h1>クイズ作成</h1>
        <div class="quiz-name>
            <label for="title">クイズ名</label>
            <input type="text" name="title"><br>
        </div>
        <div class="problem">
            <label for="content">問題文</label>
            <input type="text" name="content"><br>
        </div>
        <div class="choice">
            <label for="choices[]">選択肢</label>
            1<input type="text" name="choices[]"><br>
            2<input type="text" name="choices[]"><br>
            3<input type="text" name="choices[]"><br>
            4<input type="text" name="choices[]"><br>
        </div>  
        <div class="correct">
            <label for="answer">正解</label>
            <input type="text" name="answer"><br>
        </div>
        <div class="problem-explanation">
            <label for="explanation">解説</label>
            <textarea name="explanation" placeholder="問題に関する解説を入力してください"></textarea><br>
        </div>
        <input type="submit" value="確定" class="submit-button">
        <input type="reset" value="リセット" class="reset-button">
        </form>
    </body>
</html>
