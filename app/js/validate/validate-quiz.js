//遅延実行用のタイマーID
let delayTimer;

// 各入力欄の値をチェックする関数
function validateInput(inputElement, errorMessageElement, minLength, maxLength) {
    const inputValue = inputElement.value;
    if (inputValue.length === 0 || inputValue.length > maxLength) {
      errorMessageElement.textContent = `入力欄には1文字以上${maxLength}文字以内の文を入力してください。`;
      errorMessageElement.style.color = "red";
      return false;
    } else {
      errorMessageElement.textContent = '';
      return true;
    }
  }

  //セレクトボックスの値をチェックする関数
  function validateSelect(selectElement, errorMessageElement) {
    if (!selectElement.value) {
      errorMessageElement.textContent = 'セレクトボックスから選択してください。';
      errorMessageElement.style.color = "red";
      return false;
    } else {
      errorMessageElement.textContent = '';
      return true;
    }
  }
  
  // 入力欄に対してinputイベントをハンドリング
  document.getElementById('title').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() =>{
        validateInput(this, document.getElementById('errorMessage-title'), 1, 16);
    },500);
  });
  
  document.getElementById('content').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() =>{
        validateInput(this, document.getElementById('errorMessage-content'), 1, 400);
    },500);
  });

  document.getElementById('choices1').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() => {
      validateInput(this, document.getElementById('errorMessage-choice1'), 1, 50);
    }, 500);
  });
  
  document.getElementById('choices2').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() => {
      validateInput(this, document.getElementById('errorMessage-choice2'), 1, 50);
    }, 500);
  });
  
  document.getElementById('choices3').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() => {
      validateInput(this, document.getElementById('errorMessage-choice3'), 1, 50);
    }, 500);
  });
  
  document.getElementById('choices4').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() => {
      validateInput(this, document.getElementById('errorMessage-choice4'), 1, 50);
    }, 500);
  });

  document.getElementById('commentary').addEventListener('input', function() {
    clearTimeout(delayTimer);
    delayTimer = setTimeout(() =>{
        validateInput(this, document.getElementById('errorMessage-commentary'), 1, 400);
    },500);
  });

// セレクトボックスに対してchangeイベントをハンドリング
document.getElementById('select').addEventListener('change', function() {
  validateSelectBox(this, document.getElementById('errorMessage-select'));
});
  
  // フォームの送信イベントをハンドリング
  document.getElementById('new-form').addEventListener('submit', function(event) {
    event.preventDefault(); // フォームの送信を阻止
  
    // 各入力欄をバリデーション
    const titleIsValid = validateInput(document.getElementById('title'), document.getElementById('errorMessage-title'), 1, 16);
    const contentIsValid = validateInput(document.getElementById('content'), document.getElementById('errorMessage-content'), 1, 400);
    const choices1IsValid = validateInput(document.getElementById('choices1'), document.getElementById('errorMessage-choice1'), 1, 50);
    const choices2IsValid = validateInput(document.getElementById('choices2'), document.getElementById('errorMessage-choice2'), 1, 50);
    const choices3IsValid = validateInput(document.getElementById('choices3'), document.getElementById('errorMessage-choice3'), 1, 50);
    const choices4IsValid = validateInput(document.getElementById('choices4'), document.getElementById('errorMessage-choice4'), 1, 50);
    const commentaryIsValid = validateInput(document.getElementById('commentary'), document.getElementById('errorMessage-commentary'), 1, 400);
    
    // セレクトボックスをバリデーション
    const selectIsValid = validateSelect(document.getElementById('select'), document.getElementById('errorMessage-select'));


    // 入力欄ごとにエラーがある場合はフォームの送信を中止
    if (!titleIsValid || !contentIsValid || !choices1IsValid || !choices2IsValid || !choices3IsValid || !choices4IsValid || !selectIsValid || ! commentaryIsValid) {
      return;
    }
  
    // バリデーションが通った場合、フォームを送信
    document.getElementById('new=form').submit();
  });