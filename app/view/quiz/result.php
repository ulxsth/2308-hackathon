<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinker</title>
    <link rel="stylesheet" href="/Thinker/assets/stylesheets/result.css">
</head>

<body>
    <?php include("../../../assets/components/header-login.html"); ?>
    <div class="contents-container">
        <div class="result-container">
            <!-- PHPで正誤によって表示を切り替え -->
            <div class="result-correct">
                <img src="/thinker/assets/images/correct.png">
                <h1>正解</h1>
            </div>

            <div class="answer">
                <h1>答え</h1>
                <h2>ルイボスティー</h2>
            </div>

            <div class="description">
                <h1>解説</h1>
                <p>
                    ルイボスティーは、南アフリカ共和国の西ケープ州地域で栽培される植物、アスパラギン酸科のルイボス（Rooibos）から作られます。ルイボスは、その葉が発酵することで赤褐色の色合いを持ち、独特の甘い香りを放ちます。このため、別名「赤いブッシュ」と呼ばれることもあります。
                    <br><br>
                    ルイボスティーは、一般的な紅茶とは異なり、カフェインを含んでいません。そのため、カフェインに敏感な人や、就寝前に飲みたい人にとっては適した飲み物です。また、ルイボスティーは多くの抗酸化物質やミネラルを含み、健康に良いとされています。
                </p>
            </div>
        </div>

        <hr>

        <div class="recommend-container">
            <h1>ほかの問題を探す</h1>
            <div class="quizzes-same_auther">
                <h2>同じ作者の問題</h2>
                <ul class="recommend-list">
                    <li>
                        <div class="quiz-item">
                            <a href="quiz/answer.php?id=1">
                                <span class="quiz-title-span">test1</span>
                                <span class="quiz-posted_date-span">xxxx/xx/xx</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="quiz-item">
                            <a href="quiz/answer.php?id=1">
                                <span class="quiz-title-span">test1</span>
                                <span class="quiz-posted_date-span">xxxx/xx/xx</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="quizzes-recommend">
                <h2>おすすめの問題</h2>
                <ul class="recommend-list">
                    <li>
                        <div class="quiz-item">
                            <a href="quiz/answer.php?id=1">
                                <span class="quiz-title-span">test1</span>
                                <span class="quiz-posted_date-span">xxxx/xx/xx</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="quiz-item">
                            <a href="quiz/answer.php?id=1">
                                <span class="quiz-title-span">test1</span>
                                <span class="quiz-posted_date-span">xxxx/xx/xx</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <button class="back_top-button" onclick="location.href='#'">トップに戻る</button>
        </div>
    </div>
</body>

</html>