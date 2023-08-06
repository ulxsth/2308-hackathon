<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Thinker/assets/stylesheets/new.css">
    <title>Thinker</title>
</head>

<body>
    <?php include("../../../assets/components/header-login.html"); ?>
    <div class="content-container">
        <div class="operation-screen">
            <form id="new-form" action="created.php" method="post">
                <h1>クイズ作成</h1>
                <div class="quiz-name form-content">
                    <label for="title" class="quiz-mei">クイズ名</label><br>
                    <input type="text" id="title" name="title" class="quiz-text" required><br>
                    <div id="errorMessage-title" class="err-msg"></div>
                </div>
                <div class="problem form-content">
                    <label for="content" class="content-mei">問題文</label><br>
                    <textarea id="content" name="content" class="content-text" required></textarea><br>
                    <div id="errorMessage-content" class="err-msg"></div>
                </div>
                <div class="choice form-content">
                    <label for="choices[]" class="choice-mei">選択肢</label><br>
                    <span>1</span><input type="text" id="choices1" name="choices[]" class="choice-text" required><br>
                    <div id="errorMessage-choice1" class="err-msg"></div>
                    <span>2</span><input type="text" id="choices2" name="choices[]" class="choice-text" required><br>
                    <div id="errorMessage-choice2" class="err-msg"></div>
                    <span>3</span><input type="text" id="choices3" name="choices[]" class="choice-text" required><br>
                    <div id="errorMessage-choice3" class="err-msg"></div>
                    <span>4</span><input type="text" id="choices4" name="choices[]" class="choice-text" required><br>
                    <div id="errorMessage-choice4" class="err-msg"></div>
                </div>
                <div class="correct form-content">
                    <label for="answer" class="answer-mei">正解</label><br>
                    <select require id="select" name="select">
                        <option value="" selected hidden>選択してください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <div id="errorMessage-select" class="select-err-msg"></div>
                </div>
                <div class="problem-description form-content">
                    <label for="description" class="description-mei">解説</label><br>
                    <textarea id="commentary" name="description" placeholder="問題に関する解説を入力してください" class="content-text" required></textarea><br>
                    <div id="errorMessage-commentary" class="err-msg"></div>
                </div>
                <div class="button">
                    <button type="submit" class="submit-button">確定</button>
                    <button type="reset" class="reset-button">リセット</button>
                </div>
            </form>
        </div>
    </div>
    <script src="/Thinker/app/js/validate/validate-quiz.js"></script>
</body>

</html>