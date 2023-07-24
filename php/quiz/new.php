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
        <div class="choice form-content">
            <label for="choices[]" class="choice-mei">選択肢</label><br>
            1<input type="text" name="choices[]" class="choice-text"><br>
            2<input type="text" name="choices[]" class="choice-text"><br>
            3<input type="text" name="choices[]" class="choice-text"><br>
            4<input type="text" name="choices[]" class="choice-text"><br>
        </div>  
        <div class="correct form-content">
            <label for="answer" class="answer-mei">正解</label><br>
            <select>
            <option value="" selected hidden>選択してください</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
        </div>
        <div class="problem-description form-content">
            <label for="description" class="description-mei">解説</label><br>
            <textarea name="description"  placeholder="問題に関する解説を入力してください" class="content-text"></textarea><br>
        </div>
        <div class="button">
        <input type="submit" value="確定" class="submit-button">
        <input type="reset" value="リセット" class="reset-button">
        </div>
        </form>
    </body>
</html>
